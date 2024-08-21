<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted' => 'The :attribute must be accepted.',
    'accepted_if' => 'The :attribute must be accepted when :other is :value.',
    'active_url' => 'The :attribute is not a valid URL.',
    'after' => 'The :attribute must be a date after :date.',
    'after_or_equal' => 'The :attribute must be a date after or equal to :date.',
    'alpha' => 'The :attribute must only contain letters.',
    'alpha_dash' => 'The :attribute must only contain letters, numbers, dashes and underscores.',
    'alpha_num' => 'The :attribute must only contain letters and numbers.',
    'array' => 'The :attribute must be an array.',
    'before' => 'The :attribute must be a date before :date.',
    'before_or_equal' => 'The :attribute must be a date before or equal to :date.',
    'between' => [
        'array' => 'The :attribute must have between :min and :max items.',
        'file' => 'The :attribute must be between :min and :max kilobytes.',
        'numeric' => 'The :attribute must be between :min and :max.',
        'string' => 'The :attribute must be between :min and :max characters.',
    ],
    'boolean' => 'The :attribute field must be true or false.',
    'bool' => 'The :attribute field must be true or false.',
    'confirmed' => 'The :attribute confirmation does not match.',
    'current_password' => 'The password is incorrect.',
    'date' => 'The :attribute is not a valid date.',
    'date_equals' => 'The :attribute must be a date equal to :date.',
    'date_format' => 'The :attribute does not match the format :format.',
    'declined' => 'The :attribute must be declined.',
    'declined_if' => 'The :attribute must be declined when :other is :value.',
    'different' => 'The :attribute and :other must be different.',
    'digits' => 'The :attribute must be :digits digits.',
    'digits_between' => 'The :attribute must be between :min and :max digits.',
    'dimensions' => 'The :attribute has invalid image dimensions.',
    'distinct' => 'The :attribute field has a duplicate value.',
    'email' => 'The :attribute must be a valid email address.',
    'ends_with' => 'The :attribute must end with one of the following: :values.',
    'enum' => 'The selected :attribute is invalid.',
    'exists' => 'The selected :attribute is invalid.',
    'file' => 'The :attribute must be a file.',
    'filled' => 'The :attribute field must have a value.',
    'gt' => [
        'array' => 'The :attribute must have more than :value items.',
        'file' => 'The :attribute must be greater than :value kilobytes.',
        'numeric' => 'The :attribute must be greater than :value.',
        'string' => 'The :attribute must be greater than :value characters.',
    ],
    'gte' => [
        'array' => 'The :attribute must have :value items or more.',
        'file' => 'The :attribute must be greater than or equal to :value kilobytes.',
        'numeric' => 'The :attribute must be greater than or equal to :value.',
        'string' => 'The :attribute must be greater than or equal to :value characters.',
    ],
    'image' => 'The :attribute must be an image.',
    'in' => 'The selected :attribute is invalid.',
    'in_array' => 'The :attribute field does not exist in :other.',
    'integer' => 'The :attribute must be an integer.',
    'ip' => 'The :attribute must be a valid IP address.',
    'ipv4' => 'The :attribute must be a valid IPv4 address.',
    'ipv6' => 'The :attribute must be a valid IPv6 address.',
    'json' => 'The :attribute must be a valid JSON string.',
    'lt' => [
        'array' => 'The :attribute must have less than :value items.',
        'file' => 'The :attribute must be less than :value kilobytes.',
        'numeric' => 'The :attribute must be less than :value.',
        'string' => 'The :attribute must be less than :value characters.',
    ],
    'lte' => [
        'array' => 'The :attribute must not have more than :value items.',
        'file' => 'The :attribute must be less than or equal to :value kilobytes.',
        'numeric' => 'The :attribute must be less than or equal to :value.',
        'string' => 'The :attribute must be less than or equal to :value characters.',
    ],
    'mac_address' => 'The :attribute must be a valid MAC address.',
    'max' => [
        'array' => 'The :attribute must not have more than :max items.',
        'file' => 'The :attribute must not be greater than :max kilobytes.',
        'numeric' => 'The :attribute must not be greater than :max.',
        'string' => 'The :attribute must not be greater than :max characters.',
    ],
    'mimes' => 'The :attribute must be a file of type: :values.',
    'mimetypes' => 'The :attribute must be a file of type: :values.',
    'min' => [
        'array' => 'The :attribute must have at least :min items.',
        'file' => 'The :attribute must be at least :min kilobytes.',
        'numeric' => 'The :attribute must be at least :min.',
        'string' => 'The :attribute must be at least :min characters.',
    ],
    'multiple_of' => 'The :attribute must be a multiple of :value.',
    'not_in' => 'The selected :attribute is invalid.',
    'not_regex' => 'The :attribute format is invalid.',
    'numeric' => 'The :attribute must be a number.',
    'password' => 'The password is incorrect.',
    'present' => 'The :attribute field must be present.',
    'prohibited' => 'The :attribute field is prohibited.',
    'prohibited_if' => 'The :attribute field is prohibited when :other is :value.',
    'prohibited_unless' => 'The :attribute field is prohibited unless :other is in :values.',
    'prohibits' => 'The :attribute field prohibits :other from being present.',
    'regex' => 'The :attribute format is invalid.',
    'required' => 'Поле :attribute обязательно для заполнения.',
    'required_array_keys' => 'The :attribute field must contain entries for: :values.',
    'required_if' => 'The :attribute field is required when :other is :value.',
    'required_unless' => 'The :attribute field is required unless :other is in :values.',
    'required_with' => 'The :attribute field is required when :values is present.',
    'required_with_all' => 'The :attribute field is required when :values are present.',
    'required_without' => 'The :attribute field is required when :values is not present.',
    'required_without_all' => 'The :attribute field is required when none of :values are present.',
    'same' => 'The :attribute and :other must match.',
    'size' => [
        'array' => 'The :attribute must contain :size items.',
        'file' => 'The :attribute must be :size kilobytes.',
        'numeric' => 'The :attribute must be :size.',
        'string' => 'The :attribute must be :size characters.',
    ],
    'starts_with' => 'The :attribute must start with one of the following: :values.',
    'string' => 'The :attribute must be a string.',
    'timezone' => 'The :attribute must be a valid timezone.',
    'unique' => 'The :attribute has already been taken.',
    'item_has_product' => ':item has :value',
    'uploaded' => 'The :attribute failed to upload.',
    'url' => 'The :attribute must be a valid URL.',
    'uuid' => 'The :attribute must be a valid UUID.',
    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
        'item' => 'category',
        'value' => 'product'
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [
        'id' => 'ид',
        'h1' => 'п1',
        'to' => 'кому',

        'day' => 'день',
        'ssl' => 'ssl',
        'url' => 'ссылка',
        'img' => 'фото',
        'end' => 'конец',
        'qty' => 'количество',
        'tax' => 'налог',
        'tag' => 'тег',
        'key' => 'ключ',
        'faq' => 'ЧЗВ',

        'open' => 'открыт',
        'path' => 'путь',
        'uuid' => 'uuid',
        'rate' => 'ставка',
        'type' => 'тип',
        'host' => 'хозяин',
        'port' => 'порт',
        'mime' => 'пантомима',
        'size' => 'размер',
        'role' => 'роль',
        'name' => 'имя',
        'body' => 'тело',
        'note' => 'примечание',
        'sort' => 'cортировать',
        'data' => 'данные',
        'date' => 'дата',
        'text' => 'текст',
        'area' => 'область',
        'from' => 'от',
        'read' => 'читать',

        'group' => 'группа',
        'price' => 'цена',
        'bonus' => 'бонус',
        'title' => 'заголовок',
        'value' => 'ценить',
        'start' => 'начинать',
        'phone' => 'телефон',
        'input' => 'вход',
        'email' => 'электронная почта',
        'brand' => 'марка',
        'model' => 'модель',
        'color' => 'цвет',
        'cause' => 'причина',
        'month' => 'месяц',

        'status' => 'положение дел',
        'active' => 'активный',
        'locale' => 'место действия',
        'symbol' => 'символ',
        'number' => 'число',
        'online' => 'в сети',
        'faq_id' => 'ЧЗВ',
        'answer' => 'отвечать',
        'robots' => 'роботы',
        'weight' => 'масса',
        'rating' => 'рейтинг',
        'gender' => 'пол',
        'avatar' => 'аватар',
        'tag_id' => 'ярлык',

        'current' => 'текущий',
        'sandbox' => 'песочница',
        'unit_id' => 'единица',
        'qr_code' => 'QR код',
        'shop_id' => 'магазин',
        'user_id' => 'пользователь',
        'blog_id' => 'блог',
        'address' => 'адрес',
        'default' => 'по умолчанию',
        'from_to' => 'от до',
        'subject' => 'предмет',
        'send_to' => 'отправить',
        'payload' => 'полезная нагрузка',
        'comment' => 'комментарий',
        'api_key' => 'API-ключ',
        'content' => 'содержание',
        'cart_id' => 'тележка',

        'lastname' => 'фамилия',
        'birthday' => 'день рождения',
        'referral' => 'направления',
        'end_date' => 'Дата окончания',
        'calories' => 'калории',
        'servings' => 'порции',
        'username' => 'имя пользователя',
        'order_id' => 'заказ',
        'brand_id' => 'марка',
        'sku'      => 'ску',
        'max_time' => 'максимальное время',
        'end_time' => 'время окончания',
        'owner_id' => 'владелец',
        'quantity' => 'количество',
        'discount' => 'скидка',
        'location' => 'расположение',
        'keywords' => 'ключевые слова',
        'position' => 'позиция',
        'password' => 'пароль',
        'alt_body' => 'альтернативное тело',
        'question' => 'вопрос',
        'backward' => 'назад',
        'model_id' => 'модель',
        'seo_text' => 'SEO-текст',
        'priority' => 'приоритет',
        'price_to' => 'цена до',
        'logo_img' => 'логотип',
        'disabled' => 'неполноценный',
        'provider' => 'провайдер',

        'file_urls' => 'URL-адреса файлов',
        'firstname' => 'имя',
        'client_id' => 'клиент',
        'secret_id' => 'секрет',
        'banner_id' => 'баннер',
        'clickable' => 'кликабельный',
        'parent_id' => 'родитель',
        'coupon_id' => 'купон',
        'smtp_auth' => 'smtp-аутентификация',
        'from_site' => 'с сайта',
        'canonical' => 'канонический',

        'payment_id' => 'оплата',
        'product_id' => 'продукт',
        'percentage' => 'процент',
        'total_time' => 'общее время',
        'price_from' => 'цена от',
        'visibility' => 'видимость',
        'min_amount' => 'минимальная сумма',
        'secret_key' => 'секретный ключ',
        'service_id' => 'услуга',
        'payable_id' => 'подлежащий уплате',
        'likable_id' => 'приятный',
        'created_by' => 'сделано',
        'created_at' => 'созданный',
        'updated_at' => 'обновлен',
        'short_desc' => 'короткое описание',
        'expired_at' => 'истек в',
        'start_time' => 'время начала',
        'smtp_debug' => 'smtp-отладка',
        'model_type' => 'тип модели',
        'ip_address' => 'ip адрес',
        'start_date' => 'дата начала',

        'approved_by' => 'одобрено',
        'shop_tag_id' => 'тег магазина',
        'description' => 'описание',
        'button_text' => 'текст кнопки',
        'total_price' => 'итоговая цена',
        'category_id' => 'категория',
        'currency_id' => 'валюта',
        'loadable_id' => 'нагрузка',
        'change_freq' => 'изменить частоту',
        'deliveryman' => 'курьер',
        'discount_id' => 'скидка',
        'active_time' => 'активное время',
        'referral_id' => 'направления',
        'order_limit' => 'лимит заказа',
        'with_report' => 'с отчетом',
        'chair_count' => 'количество стульев',
        'status_note' => 'примечание о состоянии',
        'provider_id' => 'провайдер',
        'wallet_uuid' => 'UUID кошелька',
        'my_referral' => 'мой реферал',
        'refund_time' => 'время возврата',

        'payable_type' => 'способ оплаты',
        'perform_time' => 'выполнять время',
        'published_at' => 'опубликовано',
        'stock_id'     => 'сток',
        'user_cart_id' => 'корзина пользователя',
        'likable_type' => 'как тип',
        'delivery_fee' => 'плата за доставку',
        'origin_price' => 'исходная цена',
        'nutrition_id' => 'питание',
        'min_quantity' => 'минимальное количество',
        'verify_token' => 'проверить токен',

        'loadable_type' => 'загружаемый тип',
        'delivery_date' => 'дата доставки',
        'delivery_time' => 'срок поставки',
        'delivery_type' => 'тип доставки',
        'discount_type' => 'тип скидки',
        'reviewable_id' => 'обзор',
        'assignable_id' => 'назначать',
        'product_limit' => 'максимум продуктов',

        'extra_value_id' => 'дополнительная ценность',
        'payment_sys_id' => 'платежная система',
        'payment_trx_id' => 'платеж trx',
        'firebase_token' => 'токен firebase',
        'remember_token' => 'запомнить токен',
        'bonus_quantity' => 'количество бонусов',
        'bonus_stock_id' => 'бонусный запас',
        'extra_group_id' => 'дополнительная группа',
        'total_discount' => 'общая скидка',
        'discount_price' => 'цена со скидкой',
        'background_img' => 'фоновое изображение',
        'transaction_id' => 'сделка',

        'notification_id' => 'уведомление',
        'reviewable_type' => 'тип обзора',
        'subscription_id' => 'подписка',
        'assignable_type' => 'назначить тип',

        'email_setting_id' => 'настройка электронной почты',

        'term_condition_id' => 'термин & условие',
        'email_verified_at' => 'электронная почта подтверждена',
        'phone_verified_at' => 'телефон подтвержден',
        'type_of_technique' => 'тип техники',
        'privacy_policy_id' => 'политика конфиденциальности',

        'status_description' => 'описание статуса',

    ],

];
