<?php if(count($tags)): ?>
    <?php $__currentLoopData = config('meta-tags.available'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $option): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if(isset($tags[$key])): ?>
            <?php if($key === 'canonical' && $tags[$key]): ?>
                <link rel="canonical" href="<?php echo e(url($tags[$key])); ?>"/>
            <?php elseif($key === 'title'): ?>
                <title><?php echo e($tags[$key]); ?></title>
            <?php elseif($key === 'description'): ?>
                <meta name="description" content="<?php echo e($tags[$key]); ?>"/>
            <?php elseif($key === 'keywords'): ?>
                <meta name="keywords" content="<?php echo e($tags[$key]); ?>"/>
            <?php elseif($key === 'robots'): ?>
                <meta name="robots" content="<?php echo e($tags[$key]); ?>"/>
            <?php elseif(preg_match('/^og_\w+/', $key)): ?>
                <?php if($key === 'og_url'): ?>
                    <meta property="og:url" content="<?php echo e(url($tags[$key] ?: $path)); ?>"/>
                <?php elseif($key === 'og_image' && !empty($tags[$key])): ?>
                    <meta property="og:image" content="<?php echo e(url($tags[$key])); ?>"/>
                    <meta property="og:image:type" content="<?php echo e($tags['og_image_type'] ?? config('meta-tags.default.og_image.type', 'image/png')); ?>">
                    <meta property="og:image:width" content="<?php echo e($tags['og_image_width'] ?? config('meta-tags.default.og_image.width', 780)); ?>">
                    <meta property="og:image:height" content="<?php echo e($tags['og_image_height'] ?? config('meta-tags.default.og_image.height', 780)); ?>">
                <?php else: ?>
                    <meta property="<?php echo e(\Str::replaceFirst('og_', 'og:', $key)); ?>" content="<?php echo e($tags[$key]); ?>"/>
                <?php endif; ?>
            <?php elseif(preg_match('/^twitter_\w+/', $key)): ?>
                <?php if($key === 'twitter_image' && !empty($tags[$key])): ?>
                    <meta name="twitter_image" content="<?php echo e(url($tags[$key])); ?>" />
                <?php else: ?>
                    <meta name="<?php echo e(\Str::replaceFirst('twitter_', 'twitter:', $key)); ?>" content="<?php echo e($tags[$key]); ?>" />
                <?php endif; ?>
            <?php endif; ?>
        <?php endif; ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php else: ?>
    <title><?php echo e(config('meta-tags.default.title')); ?></title>
<?php endif; ?>

<?php if(config('meta-tags.default.fb_app_id')): ?>
    <meta property="fb:app_id" content="<?php echo e(config('meta-tags.default.fb_app_id')); ?>"/>
<?php endif; ?><?php /**PATH /Users/mac/Documents/softwares/work/QuickFix/QuickFixBackend/vendor/fomvasss/laravel-meta-tags/resources/views/tags.blade.php ENDPATH**/ ?>