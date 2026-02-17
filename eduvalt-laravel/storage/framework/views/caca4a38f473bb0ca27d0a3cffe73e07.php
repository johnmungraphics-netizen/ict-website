<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <title><?php echo $__env->yieldContent('title', 'Eduvalt - Online Education'); ?></title>
    
    <!-- Favicon -->
    <link rel="icon" href="<?php echo e(asset('uploads/2023/06/favicon.png')); ?>" sizes="32x32" />
    <link rel="apple-touch-icon" href="<?php echo e(asset('uploads/2023/06/favicon.png')); ?>" />
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Hind:wght@400,500,600,700|Lexend+Deca:wght@400,500,600,700,800&display=swap" rel="stylesheet">
    
    <!-- CSS Files -->
    <link rel="stylesheet" href="<?php echo e(asset('css/theme/bootstrap.min4d80.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/theme/animate.min4d80.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/theme/fontawesome-all.min4d80.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/theme/flaticon-eduvalt4d80.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/theme/default-icons4d80.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/theme/odometer4d80.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/theme/aos4d80.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/theme/spacing4d80.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/theme/tg-cursor4d80.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/theme/eduvalt-core4d80.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/theme/eduvalt-unit4d80.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/theme/eduvalt-woo4d80.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/theme/style.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/theme/eduvalt-custom4d80.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/plugins/flaticon4d80.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/plugins/eduvalt-frontend4d80.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/plugins/slick4d80.css')); ?>">
    
    <!-- Custom CSS Variables -->
    <style>
        html:root { --tg-theme-primary: #1363DF; --unit-primary-color: #1363DF; }
        html:root { --tg-theme-secondary: #082A5E; --unit-secondary-color: #082A5E; }
        html:root { --tg-common-color-yellow: #FAB123; }
        html:root { --tg-common-color-gray: #E7EFFC; }
        img.wp-smiley, img.emoji { display: inline !important; border: none !important; box-shadow: none !important; height: 1em !important; width: 1em !important; margin: 0 0.07em !important; vertical-align: -0.1em !important; background: none !important; padding: 0 !important; }
    </style>
    
    <?php echo $__env->yieldPushContent('styles'); ?>
</head>

<body class="wp-singular page-template theme-eduvalt no-sidebar">
    <!-- Preloader -->
    <div id="preloader">
        <div class="spinner">
            <div class="rect1"></div>
            <div class="rect2"></div>
            <div class="rect3"></div>
            <div class="rect4"></div>
            <div class="rect5"></div>
        </div>
    </div>
    <!-- Preloader-end -->

    <!-- Scroll-top -->
    <button class="scroll__top scroll-to-target" data-target="html">
        <i class="tg-flaticon-arrowhead-up"></i>
    </button>
    <!-- Scroll-top-end-->

    <!-- Header -->
    <?php echo $__env->make('partials.header', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    
    <!-- Main Area -->
    <main class="main-area fix">
        <?php echo $__env->yieldContent('content'); ?>
    </main>
    <!-- main-area-end -->

    <!-- Footer -->
    <?php echo $__env->make('partials.footer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

    <!-- JavaScript Files -->
    <script src="<?php echo e(asset('js/vendor/jquery.minf43b.js')); ?>"></script>
    <script src="<?php echo e(asset('js/vendor/jquery-migrate.min5589.js')); ?>"></script>
    <script src="<?php echo e(asset('js/theme/bootstrap.min4d80.js')); ?>"></script>
    <script src="<?php echo e(asset('js/vendor/imagesloaded.minbb93.js')); ?>"></script>
    <script src="<?php echo e(asset('js/vendor/slick.min5fa1.js')); ?>"></script>
    <script src="<?php echo e(asset('js/theme/isotope.pkgd.min4d80.js')); ?>"></script>
    <script src="<?php echo e(asset('js/theme/jquery.odometer.min4d80.js')); ?>"></script>
    <script src="<?php echo e(asset('js/theme/jquery.appear4d80.js')); ?>"></script>
    <script src="<?php echo e(asset('js/theme/tween-max.min4d80.js')); ?>"></script>
    <script src="<?php echo e(asset('js/theme/slick-animation.min4d80.js')); ?>"></script>
    <script src="<?php echo e(asset('js/theme/tg-cursor.min4d80.js')); ?>"></script>
    <script src="<?php echo e(asset('js/theme/vivus.min4d80.js')); ?>"></script>
    <script src="<?php echo e(asset('js/theme/wow.min4d80.js')); ?>"></script>
    <script src="<?php echo e(asset('js/theme/aos4d80.js')); ?>"></script>
    <script src="<?php echo e(asset('js/theme/main4d80.js')); ?>"></script>
    
    <?php echo $__env->yieldPushContent('scripts'); ?>
</body>
</html>
<?php /**PATH C:\ICT11\ICT1\eduvalt-laravel\resources\views/layouts/app.blade.php ENDPATH**/ ?>