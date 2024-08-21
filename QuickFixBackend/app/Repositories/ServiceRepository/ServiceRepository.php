<?php
declare(strict_types=1);

namespace App\Repositories\ServiceRepository;

use App\Models\Language;
use App\Models\Service;
use App\Repositories\CoreRepository;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;

class ServiceRepository extends CoreRepository
{
    protected function getModelClass(): string
    {
        return Service::class;
    }

    public function getShowWith(): array
    {
        $locale = data_get(Language::where('default', 1)->first(), 'locale');

        return [
            'category:id',
            'category.translation' => fn($q) => $q
                ->select('id', 'category_id', 'locale', 'title')
                ->when($this->language, function ($q) use ($locale) {
                    $q->where(fn($q) => $q->where('locale', $this->language)->orWhere('locale', $locale));
                }),
            'shop:id,logo_img',
            'shop.translation' => fn($q) => $q
                ->select('id', 'shop_id', 'locale', 'title')
                ->when($this->language, function ($q) use ($locale) {
                    $q->where(fn($q) => $q->where('locale', $this->language)->orWhere('locale', $locale));
                }),

            'translation' => fn($q) => $q
                ->when($this->language, function ($q) use ($locale) {
                    $q->where(fn($q) => $q->where('locale', $this->language)->orWhere('locale', $locale));
                }),
            'translations',
            'galleries',
            'serviceExtras' => fn($q) => $q->select(['id', 'service_id', 'active'])->where('active', true),
            'serviceExtras.translation' => fn($q) => $q
                ->select('id', 'service_extra_id', 'locale', 'title')
                ->when($this->language, function ($q) use ($locale) {
                    $q->where(fn($q) => $q->where('locale', $this->language)->orWhere('locale', $locale));
                })
        ];
    }

    public function paginate(array $filter): LengthAwarePaginator
    {
        $locale = data_get(Language::where('default', 1)->first(), 'locale');

        /** @var Service $model */
        $model = $this->model();

        $isAdminPanel = [];

        if (!request()->is('api/v1/dashboard/user/*') && !request()->is('api/v1/rest/*') ) {
            $isAdminPanel = [
                'translations',
                'category:id',
                'shop:id,logo_img',
                'shop.translation' => fn($q) => $q
                    ->select('id', 'shop_id', 'locale', 'title')
                    ->when($this->language, function ($q) use ($locale) {
                        $q->where(fn($q) => $q->where('locale', $this->language)->orWhere('locale', $locale));
                    }),
                'category.translation' => fn($q) => $q
                    ->select('id', 'category_id', 'locale', 'title')
                    ->when($this->language, function ($q) use ($locale) {
                        $q->where(fn($q) => $q->where('locale', $this->language)->orWhere('locale', $locale));
                    })
            ];
        }

        return $model
            ->filter($filter)
            ->with(array_merge([
                'translation' => fn($q) => $q
                    ->when($this->language, function ($q) use ($locale) {
                        $q->where(fn($q) => $q->where('locale', $this->language)->orWhere('locale', $locale));
                    }),
                'galleries',
                'serviceExtras' => fn($q) => $q->select(['id', 'service_id', 'active'])->where('active', true),
                'serviceExtras.translation' => fn($q) => $q
                    ->select('id', 'service_extra_id', 'locale', 'title')
                    ->when($this->language, function ($q) use ($locale) {
                        $q->where(fn($q) => $q->where('locale', $this->language)->orWhere('locale', $locale));
                    }),
            ], $isAdminPanel))
            ->when(request()->is('api/v1/rest/*') && $this->language, function ($query) use ($locale) {
                $query->whereHas('translation', function ($q) use ($locale) {
                    $q->where(fn($q) => $q->where('locale', $this->language)->orWhere('locale', $locale));
                });
            })
            ->paginate($filter['perPage'] ?? 10);
    }

    public function show(Service $model): Service
    {
        return $model->loadMissing($this->getShowWith());
    }

    public function showById(int $id): ?Service
    {
        return $this->model()
            ->withMax('serviceMaster', 'discount')
            ->with($this->getShowWith())->find($id);
    }

}
