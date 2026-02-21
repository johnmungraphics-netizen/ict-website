

<?php $__env->startSection('title', 'Contact - Eduvalt'); ?>

<?php $__env->startPush('styles'); ?>
<style>
/* Contact info icons styling */
.contact-info-wrap .icon i {
    font-size: 24px;
    color: #2467ec;
    display: inline-block;
}
</style>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
<!-- breadcrumb-area -->
<section class="breadcrumb-area breadcrumb-bg" data-background="<?php echo e(asset('images/theme/bg/breadcrumb_bg.jpg')); ?>">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-content">
                    <h3 class="title">Contact</h3>
                    <nav aria-label="breadcrumb" class="breadcrumb">
                        <span><a href="<?php echo e(route('home')); ?>">Home</a></span>
                        <span class="breadcrumb-separator"><i class="fas fa-angle-right"></i></span>
                        <span class="current-item">Contact</span>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb-area-end -->

<!-- contact-section -->
<?php if (isset($component)) { $__componentOriginal647b175ed9e08e7e2da03809063e0558 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal647b175ed9e08e7e2da03809063e0558 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.contact-section','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('contact-section'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal647b175ed9e08e7e2da03809063e0558)): ?>
<?php $attributes = $__attributesOriginal647b175ed9e08e7e2da03809063e0558; ?>
<?php unset($__attributesOriginal647b175ed9e08e7e2da03809063e0558); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal647b175ed9e08e7e2da03809063e0558)): ?>
<?php $component = $__componentOriginal647b175ed9e08e7e2da03809063e0558; ?>
<?php unset($__componentOriginal647b175ed9e08e7e2da03809063e0558); ?>
<?php endif; ?>
<!-- contact-section-end -->

<!-- map-area -->
<section class="map-area">
    <div class="contact-map">
        <iframe 
            src="https://maps.google.com/maps?q=The+Odyssey+Building,+Muthithi+Road,+Westlands,+Nairobi,+Kenya&amp;t=m&amp;z=15&amp;output=embed&amp;iwloc=near"
            title="ICT Africa - The Odyssey Building, Westlands, Nairobi"
            aria-label="ICT Africa - The Odyssey Building, Westlands, Nairobi"
            style="width: 100%; height: 450px; border: 0;"
            loading="lazy"
        ></iframe>
    </div>
</section>
<!-- map-area-end -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\ICT11\ICT1\ICT WEBSITE\ict-a.com\resources\views/pages/contact.blade.php ENDPATH**/ ?>