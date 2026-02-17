

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

<!-- contact-area -->
<section class="contact-area section-py-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="contact-info-wrap">
                    <h2 class="title">Keep In Touch With Us</h2>
                    <p>We're here to help transform your digital vision into reality. Reach out to us for innovative ICT solutions, training programs, or partnership opportunities across East Africa.</p>
                    <ul class="list-wrap">
                        <li>
                            <div class="icon">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div class="content">
                                <p>8th & 9th Floor, The Odyssey Building <br> 84 Muthithi Road, Westlands, Nairobi</p>
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <i class="fas fa-phone-alt"></i>
                            </div>
                            <div class="content">
                                <p>+254 (0)715 995 266 / 775 995 266 <br> +254 (0)736 995 266</p>
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div class="content">
                                <p>icta.automation@ict-a.com</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="contact-form-wrap">
                    <h2 class="title">Get in Touch</h2>
                    
                    <?php if(session('success')): ?>
                    <div class="alert alert-success">
                        <?php echo e(session('success')); ?>

                    </div>
                    <?php endif; ?>
                    
                    <?php if($errors->any()): ?>
                    <div class="alert alert-danger">
                        <ul class="mb-0">
                            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li><?php echo e($error); ?></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                    <?php endif; ?>
                    
                    <form action="<?php echo e(route('contact.submit')); ?>" method="POST" class="contact-form">
                        <?php echo csrf_field(); ?>
                        <div class="cta-form">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-grp">
                                        <input type="text" name="name" class="form-control" placeholder="Name" value="<?php echo e(old('name')); ?>" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-grp">
                                        <input type="email" name="email" class="form-control" placeholder="Email*" value="<?php echo e(old('email')); ?>" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-grp">
                                        <input type="text" name="phone" class="form-control" placeholder="Phone" value="<?php echo e(old('phone')); ?>">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-grp">
                                        <input type="text" name="subject" class="form-control" placeholder="Subject*" value="<?php echo e(old('subject')); ?>" required>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-grp">
                                        <textarea name="message" class="form-control" rows="4" placeholder="Your Message*" required><?php echo e(old('message')); ?></textarea>
                                    </div>
                                    <button type="submit" class="btn submit-btn">Send Message</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- contact-area-end -->

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

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\ICT11\ICT1\eduvalt-laravel\resources\views/pages/contact.blade.php ENDPATH**/ ?>