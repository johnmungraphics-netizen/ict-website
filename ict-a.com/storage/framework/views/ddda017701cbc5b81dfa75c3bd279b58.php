

<?php $__env->startSection('title', $service['title'] . ' - ICT Africa'); ?>

<?php $__env->startPush('styles'); ?>
<style>
/* Service features list styling */
.event-details-list ul.list-wrap {
    list-style: none;
    padding: 0;
    margin: 20px 0;
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 15px;
}

.event-details-list ul.list-wrap li {
    position: relative;
    padding-left: 25px;
    color: #39557E;
    font-size: 15px;
    line-height: 1.6;
}

.event-details-list ul.list-wrap li:before {
    content: "—";
    position: absolute;
    left: 0;
    color: #2467ec;
    font-weight: bold;
}

/* Responsive layout for mobile */
@media (max-width: 767.98px) {
    .event-details-list ul.list-wrap {
        grid-template-columns: 1fr;
        gap: 12px;
    }
    
    .event-details-list ul.list-wrap li {
        font-size: 14px;
    }
}
</style>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
<!-- breadcrumb-area -->
<section class="breadcrumb-area breadcrumb-bg details-breadcrumb" data-background="<?php echo e(asset('images/theme/bg/breadcrumb_bg.jpg')); ?>">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-content">
                    <h3 class="title"><?php echo e($service['title']); ?></h3>
                    <nav aria-label="breadcrumb" class="breadcrumb">
                        <span><a href="<?php echo e(route('home')); ?>">Home</a></span>
                        <span class="breadcrumb-separator"> / </span>
                        <span><a href="<?php echo e(route('blog')); ?>">Services</a></span>
                        <span class="breadcrumb-separator"> / </span>
                        <span><a href="#"><?php echo e($service['category']); ?></a></span>
                        <span class="breadcrumb-separator"> / </span>
                        <span class="current-item"><?php echo e($service['title']); ?></span>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb-area-end -->

<section class="blog-standard-area section-py-120 blog-details-area">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="blog-item-wrap">
                    
                    <article class="blog__standard-post blog__details-wrapper format-image">
                        <div class="blog__standard-thumb">
                            <img src="<?php echo e(asset($service['image'])); ?>" class="img-responsive wp-post-image" alt="<?php echo e($service['title']); ?>" loading="lazy">
                        </div>
                        
                        <div class="blog__standard-content blog-details-content">
                            <!-- blog meta -->
                            <ul class="list-wrap blog__post-meta d-flex flex-wrap align-items-center p-0">
                                <li><a href="#">ICT Africa</a></li>
                                <li>Professional Service</li>
                                <li><a href="#respond">Contact Us</a></li>
                            </ul>
                            
                            <div class="post-text">
                                <p><?php echo e($service['description']); ?></p>
                                
                                <blockquote>
                                    <p>"<?php echo e($service['quote']); ?>"</p>
                                </blockquote>
                                
                                <h4 class="inner-title">What We Offer</h4>
                                <p><?php echo e($service['offer_intro']); ?></p>
                                
                                <div class="event-details-list">
                                    <ul class="list-wrap">
                                        <?php $__currentLoopData = $service['features']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $feature): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li><?php echo e($feature); ?></li>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </ul>
                                </div>
                                
                                <p><?php echo e($service['conclusion']); ?></p>
                            </div>
                            
                            <div class="blog-details-bottom">
                                <div class="row">
                                    <div class="col-md-7">
                                        <div class="tg-post-tag">
                                            <h5 class="tag-title">Tags :</h5>
                                            <ul class="list-wrap p-0 mb-0">
                                                <?php $__currentLoopData = $service['tags']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <li><a href="#" rel="tag"><?php echo e($tag); ?></a></li>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </ul>
                                        </div>
                                    </div>
                                   
                                </div>
                            </div>
                        </div>
                    </article>
                    
                    <!-- Contact Information Card -->
                    <div id="respond" class="blog-post-comment">
                        <div class="comment-respond">
                            <h3 class="comment-reply-title">Get In Touch With Us</h3>
                            <p class="mb-4">Interested in this service? Contact us today and our team will get back to you promptly.</p>
                            
                            <div class="contact-info-card" style="background: #f8f9fa; padding: 30px; border-radius: 10px; border-left: 4px solid #2467ec;">
                                <div class="row">
                                    <div class="col-md-6 mb-4">
                                        <h5 style="color: #161439; font-weight: 600; margin-bottom: 15px;">Phone Numbers</h5>
                                        <p style="margin-bottom: 8px;">
                                            <a href="tel:+254204404993" style="color: #39557E; text-decoration: none; font-size: 16px;">
                                                <strong>+254 20 440 4993</strong>
                                            </a>
                                        </p>
                                        <p style="margin-bottom: 0;">
                                            <a href="tel:+254204404151" style="color: #39557E; text-decoration: none; font-size: 16px;">
                                                <strong>+254 20 440 4151</strong>
                                            </a>
                                        </p>
                                    </div>
                                    
                                    <div class="col-md-6 mb-4">
                                        <h5 style="color: #161439; font-weight: 600; margin-bottom: 15px;">Email Address</h5>
                                        <p style="margin-bottom: 0;">
                                            <a href="mailto:info@ict-a.com" style="color: #39557E; text-decoration: none; font-size: 16px;">
                                                <strong>info@ict-a.com</strong>
                                            </a>
                                        </p>
                                    </div>
                                    
                                    <div class="col-md-6 mb-4 mb-md-0">
                                        <h5 style="color: #161439; font-weight: 600; margin-bottom: 15px;">Our Location</h5>
                                        <p style="color: #39557E; margin-bottom: 0; line-height: 1.6;">
                                            The Odyssey Building,<br>
                                            84 Muthithi Road, Westlands,<br>
                                            Nairobi, Kenya
                                        </p>
                                    </div>
                                    
                                    <div class="col-md-6">
                                        <h5 style="color: #161439; font-weight: 600; margin-bottom: 15px;">Working Hours</h5>
                                        <p style="color: #39557E; margin-bottom: 5px;"><strong>Monday - Friday:</strong> 7:30 AM - 4:30 PM</p>
                                        <p style="color: #39557E; margin-bottom: 0;"><strong>Saturday:</strong> 8:00 AM - 1:00 PM</p>
                                    </div>
                                </div>
                                
                                <div class="row mt-4">
                                    <div class="col-12">
                                        <div class="d-flex flex-wrap gap-2" style="gap: 10px;">
                                            <a href="tel:+254204404993" class="btn" style="background: #2467ec; color: white; padding: 12px 24px; border-radius: 5px; text-decoration: none; display: inline-block;">Call Now</a>
                                            <a href="mailto:info@ict-a.com?subject=Inquiry about <?php echo e(urlencode($service['title'])); ?>" class="btn" style="background: #2467ec; color: white; padding: 12px 24px; border-radius: 5px; text-decoration: none; display: inline-block;">Send Email</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
            
            <div class="col-lg-4">
                <aside class="blog-sidebar">
                    
                    <!-- Search Widget -->
                    <div class="blog-widget widget widget_search">
                        <div class="sidebar-search-form">
                            <form action="<?php echo e(route('blog')); ?>" method="get">
                                <input type="text" value="<?php echo e(request('s')); ?>" name="s" placeholder="Search services...">
                                <button type="submit"><i class="flaticon-magnifying-glass"></i></button>
                            </form>
                        </div>
                    </div>
                    
                    <!-- Services Categories Widget -->
                    <div class="blog-widget widget widget_categories">
                        <h3 class="widget-title">Our Services</h3>
                        <ul>
                            <?php $__currentLoopData = $allServices; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li class="cat-item <?php echo e($s['slug'] == $service['slug'] ? 'active' : ''); ?>">
                                <a href="<?php echo e(route('service.show', $s['slug'])); ?>"><?php echo e($s['title']); ?></a>
                            </li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                    
                    <!-- Featured Services Widget -->
                    <div class="blog-widget widget">
                        <h3 class="widget-title">Featured Solutions</h3>
                        <div class="sidebar-rc-post">
                            <?php $__currentLoopData = array_slice($allServices, 0, 3); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $featured): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="rc-post-item">
                                <div class="rc-post-thumb">
                                    <a href="<?php echo e(route('service.show', $featured['slug'])); ?>">
                                        <img src="<?php echo e(asset($featured['thumb'])); ?>" alt="<?php echo e($featured['title']); ?>" loading="lazy">
                                    </a>
                                </div>
                                <div class="rc-post-content">
                                    <h4 class="title"><a href="<?php echo e(route('service.show', $featured['slug'])); ?>"><?php echo e(Str::limit($featured['title'], 30)); ?></a></h4>
                                    <span class="date"><i class="flaticon-calendar-date"></i>Available Now</span>
                                </div>
                            </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                    
                    <!-- Tags Widget -->
                    <div class="blog-widget widget widget_tag_cloud">
                        <h3 class="widget-title">Technologies</h3>
                        <div class="tagcloud">
                            <a href="#" class="tag-cloud-link">Cloud Computing</a>
                            <a href="#" class="tag-cloud-link">Networking</a>
                            <a href="#" class="tag-cloud-link">Web Development</a>
                            <a href="#" class="tag-cloud-link">Mobile Apps</a>
                            <a href="#" class="tag-cloud-link">Cyber Security</a>
                            <a href="#" class="tag-cloud-link">Database</a>
                            <a href="#" class="tag-cloud-link">AI/ML</a>
                            <a href="#" class="tag-cloud-link">ERP Systems</a>
                        </div>
                    </div>
                    
                </aside>
            </div>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\ICT11\ICT1\ICT WEBSITE\ict-a.com\resources\views/pages/service-show.blade.php ENDPATH**/ ?>