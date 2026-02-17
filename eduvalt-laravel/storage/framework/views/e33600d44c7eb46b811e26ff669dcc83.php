

<?php $__env->startSection('title', $service['title'] . ' - ICT Africa'); ?>

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
                        <span class="breadcrumb-separator"><i class="fas fa-angle-right"></i></span>
                        <span><a href="<?php echo e(route('blog')); ?>">Services</a></span>
                        <span class="breadcrumb-separator"><i class="fas fa-angle-right"></i></span>
                        <span><a href="#"><?php echo e($service['category']); ?></a></span>
                        <span class="breadcrumb-separator"><i class="fas fa-angle-right"></i></span>
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
                            <img src="<?php echo e(asset($service['image'])); ?>" class="img-responsive wp-post-image" alt="<?php echo e($service['title']); ?>">
                        </div>
                        
                        <div class="blog__standard-content blog-details-content">
                            <!-- blog meta -->
                            <ul class="list-wrap blog__post-meta d-flex flex-wrap align-items-center p-0">
                                <li><i class="flaticon-account"></i><a href="#">ICT Africa</a></li>
                                <li><i class="flaticon-calendar-date"></i> Professional Service</li>
                                <li><i class="flaticon-help"></i> <a href="#respond">Contact Us</a></li>
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
                                        <li><i class="fas fa-check-circle"></i><?php echo e($feature); ?></li>
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
                                    <div class="col-md-5">
                                        <div class="tg-post-social justify-content-start justify-content-md-end">
                                            <h5 class="social-title">Social Share :</h5>
                                            <ul class="list-wrap p-0 mb-0">
                                                <li><a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo e(urlencode(request()->url())); ?>"><i class="fab fa-facebook-f"></i></a></li>
                                                <li><a href="https://twitter.com/intent/tweet?url=<?php echo e(urlencode(request()->url())); ?>"><i class="fab fa-twitter"></i></a></li>
                                                <li><a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo e(urlencode(request()->url())); ?>"><i class="fab fa-linkedin-in"></i></a></li>
                                                <li><a href="https://wa.me/?text=<?php echo e(urlencode(request()->url())); ?>"><i class="fab fa-whatsapp"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                    
                    <!-- Contact Form -->
                    <div id="respond" class="blog-post-comment">
                        <div class="comment-respond">
                            <h3 class="comment-reply-title">Request a Quote</h3>
                            <form action="<?php echo e(route('contact.submit')); ?>" method="post" class="comment-form">
                                <?php echo csrf_field(); ?>
                                <input type="hidden" name="subject" value="Service Inquiry: <?php echo e($service['title']); ?>">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="comment-field">
                                            <input placeholder="Enter Name" name="name" type="text" class="tp-form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="comment-field">
                                            <input placeholder="Enter Email" name="email" type="email" class="tp-form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="comment-field">
                                            <input placeholder="Enter Phone Number" name="phone" type="tel" class="tp-form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row post-input">
                                    <div class="col-md-12">
                                        <div class="comment-field">
                                            <textarea class="tp-form-control msg-box" placeholder="Tell us about your project requirements" name="message" cols="45" rows="8" required></textarea>
                                        </div>
                                    </div>
                                </div>
                                <p class="form-submit">
                                    <div class="col-xl-12">
                                        <button class="btn" type="submit">Send Request</button>
                                    </div>
                                </p>
                            </form>
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
                                        <img src="<?php echo e(asset($featured['thumb'])); ?>" alt="<?php echo e($featured['title']); ?>">
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

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\ICT11\ICT1\eduvalt-laravel\resources\views/pages/service-show.blade.php ENDPATH**/ ?>