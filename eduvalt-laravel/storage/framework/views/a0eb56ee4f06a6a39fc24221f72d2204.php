

<?php $__env->startSection('title', 'Home - Eduvalt'); ?>

<?php $__env->startPush('styles'); ?>
<style>
/* Slider gradient overlay for text visibility - matching original site */
.slider__item::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 75%;
    height: 100%;
    background: linear-gradient(to right, 
        rgba(255, 255, 255, 1) 0%, 
        rgba(255, 255, 255, 1) 25%, 
        rgba(255, 255, 255, 0.95) 40%, 
        rgba(255, 255, 255, 0.7) 60%, 
        rgba(255, 255, 255, 0.3) 80%,
        rgba(255, 255, 255, 0) 100%);
    z-index: 1;
    pointer-events: none;
}

.slider__item .container {
    position: relative;
    z-index: 2;
}

.slider__item .top-shape,
.slider__item .bottom-shape {
    z-index: 0;
}

/* Statistics icons size */
.fact__icon-two img {
    max-width: 60px;
    height: auto;
}

/* Product cards styling */
.categories__item-three {
    margin: 0 10px;
    border: 2px solid #e8e8e8;
    border-radius: 10px;
    overflow: hidden;
    transition: all 0.3s ease;
}

.categories__item-three:hover {
    border-color: #2467ec;
    box-shadow: 0 5px 20px rgba(36, 103, 236, 0.1);
    transform: translateY(-5px);
}

.categories__item-three .thumb {
    height: 250px;
    overflow: hidden;
}

.categories__item-three .thumb img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    object-position: center;
}

/* Testimonial cards styling - matching original design */
.testimonial-active {
    overflow: hidden;
    width: 100%;
    max-width: 100%;
    position: relative;
    z-index: 2;
}

.testimonial-active .slick-list {
    overflow: visible;
}

.testimonial-active .slick-track {
    display: flex !important;
    align-items: center;
}

.testimonial-active .slick-slide {
    float: none;
    height: auto;
}

.testimonial__item {
    text-align: center;
    background-color: #ffffff;
    box-shadow: 0px 14px 50px rgba(0, 0, 0, 0.1);
    border-radius: 40px;
    margin: 63px 85px;
    padding: 35px 95px 65px;
}

/* Quick Action Area Styling - Matching Original Design */
.quick-action-area {
    padding-top: 50px !important;
    padding-bottom: 50px;
}

.quick__action-item {
    position: relative;
    border-radius: 20px;
    overflow: hidden;
    min-height: 320px;
    display: flex;
    align-items: center;
    padding: 50px;
    background-size: cover !important;
    background-position: center !important;
    background-repeat: no-repeat !important;
}

.quick__action-item::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.3);
    z-index: 1;
}

.quick__action-content {
    position: relative;
    z-index: 2;
    max-width: 400px;
}

.quick__action-content .title {
    color: #ffffff;
    font-size: 28px;
    font-weight: 700;
    line-height: 1.3;
    margin-bottom: 25px;
}

.quick__action-item .btn.white-btn {
    background-color: #ffffff;
    color: #1363DF;
    padding: 14px 32px;
    border-radius: 50px;
    font-weight: 600;
    transition: all 0.3s ease;
}

.quick__action-item .btn.white-btn:hover {
    background-color: #f0f0f0;
    transform: translateY(-2px);
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
}

@media (max-width: 991.98px) {
    .quick__action-item {
        min-height: 280px;
        padding: 40px;
        margin-bottom: 20px;
    }
    
    .quick__action-content .title {
        font-size: 24px;
    }
}

@media (max-width: 767.98px) {
    .quick__action-item {
        min-height: 250px;
        padding: 30px;
    }
    
    .quick__action-content .title {
        font-size: 20px;
    }
}

@media (max-width: 991.98px) {
    .testimonial__item {
        padding: 35px 50px 55px;
        max-width: 700px;
    }
}

@media (max-width: 767.98px) {
    .testimonial__item {
        padding: 35px 25px 45px;
        box-shadow: none;
        max-width: 100%;
    }
}

.testimonial__item p {
    font-weight: 500;
    color: #39557E;
    margin: 0 28px 0;
}

.testimonial__quote {
    margin: 0 0 25px;
}

.testimonial__quote img {
    display: inline-block;
    max-width: 49px;
}

.testimonial__rating {
    display: flex;
    justify-content: center;
    color: #F8BC24;
    gap: 3px;
    margin: 0 0 15px;
}

.testimonial__avatar {
    margin: 16px 0 0;
}

.testimonial__avatar .name {
    line-height: 1;
    color: #2467ec;
    font-size: 20px;
    font-weight: 500;
    margin: 0 0 7px;
}

.testimonial__avatar .designation {
    display: block;
    line-height: 1;
}

/* Testimonial Area Background */
.testimonial-area-wrapper {
    background-image: url('<?php echo e(asset('uploads/2023/07/area_bg.jpg')); ?>');
    background-position: center center;
    background-repeat: no-repeat;
    background-size: cover;
    padding: 100px 0 110px;
}

/* Decorative Images - Left Column */
.testimonial-decorative-left {
    position: relative;
    height: 450px;
}

.testi-deco-img-1 {
    position: absolute;
    width: 70px;
    max-width: 70px;
    top: 0;
    left: -100px;
}

.testi-deco-img-2 {
    position: absolute;
    width: 70px;
    max-width: 70px;
    top: 200px;
    left: 80px;
}

.testi-deco-img-3 {
    position: absolute;
    width: 70px;
    max-width: 70px;
    top: 350px;
    left: -100px;
}

/* Decorative Images - Right Column */
.testimonial-decorative-right {
    position: relative;
    height: 450px;
}

.testi-deco-img-4 {
    position: absolute;
    width: 70px;
    max-width: 70px;
    top: 0;
    right: -100px;
}

.testi-deco-img-5 {
    position: absolute;
    width: 70px;
    max-width: 70px;
    top: 200px;
    left: -80px;
}

.testi-deco-img-6 {
    position: absolute;
    width: 70px;
    max-width: 70px;
    bottom: 100px;
    left: 100px;
}

@media (max-width: 991.98px) {
    .testimonial-decorative-left,
    .testimonial-decorative-right {
        display: none;
    }
}

/* Custom column widths for testimonial section - matching original design */
@media (min-width: 768px) {
    .testimonial-area-wrapper .row > .col-lg-1:first-child {
        width: 10%;
    }
    
    .testimonial-area-wrapper .row > .col-lg-10 {
        width: 79.333%;
    }
    
    .testimonial-area-wrapper .row > .col-lg-1:last-child {
        width: 10%;
    }
}
</style>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
<!-- slider-area -->
<section class="slider-area">
    <div class="slider__active_two">
        <!-- Slide 1 -->
        <div class="slider__item d-flex" style="background-image:url(<?php echo e(asset('images/hero1.jpg')); ?>)">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-8">
                        <div class="slider__content">
                            <span class="sub-title" data-animation-in="slideInLeft" data-delay-in=".2" data-duration-in="0.8">Any Time, Any Where To Do Discover Courses</span>
                            <h2 class="title tg-svg" data-animation-in="slideInLeft" data-delay-in=".3" data-duration-in="0.8">Find The Best Suitable <span class="position-relative"><span class="svg-icon" id="slider-0" data-svg-icon="<?php echo e(asset('images/theme/icons/title_shape.svg')); ?>"></span>Courses</span> From Here</h2>
                            <ul class="list-wrap" data-animation-in="slideInLeft" data-delay-in=".4" data-duration-in="0.8">
                                <li><i class="fas fa-check-circle"></i>You can access 7,900+ different courses</li>
                                <li><i class="fas fa-check-circle"></i>Lifetime Access For All</li>
                            </ul>
                            <div class="tg-button-wrap" data-animation-in="slideInLeft" data-delay-in=".5" data-duration-in="0.8">
                                <a href="<?php echo e(route('courses')); ?>" class="btn tg-svg"><span class="text">Explore Courses</span> <span class="svg-icon" id="slider-btn01-0" data-svg-icon="<?php echo e(asset('images/theme/icons/btn-arrow.svg')); ?>"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <img decoding="async" src="<?php echo e(asset('uploads/2023/07/categories_shape02.png')); ?>" alt="shape" width="108" class="top-shape" data-animation-in="slideInDown" data-delay-in=".6" data-duration-in="0.8">
            <img decoding="async" src="<?php echo e(asset('uploads/2023/07/slider_shape.png')); ?>" alt="shape" class="bottom-shape" data-animation-in="slideInLeft" data-delay-in=".6" data-duration-in="0.8">
        </div>
        <!-- Slide 2 -->
        <div class="slider__item d-flex" style="background-image:url(<?php echo e(asset('images/hero2.jpg')); ?>)">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-8">
                        <div class="slider__content">
                            <span class="sub-title" data-animation-in="slideInLeft" data-delay-in=".2" data-duration-in="0.8">Any Time, Any Where To Do Discover Courses</span>
                            <h2 class="title tg-svg" data-animation-in="slideInLeft" data-delay-in=".3" data-duration-in="0.8">Find The Best Suitable <span class="position-relative"><span class="svg-icon" id="slider-1" data-svg-icon="<?php echo e(asset('images/theme/icons/title_shape.svg')); ?>"></span>Courses</span> From Here</h2>
                            <ul class="list-wrap" data-animation-in="slideInLeft" data-delay-in=".4" data-duration-in="0.8">
                                <li><i class="fas fa-check-circle"></i>You can access 7,900+ different courses</li>
                                <li><i class="fas fa-check-circle"></i>Lifetime Access For All</li>
                            </ul>
                            <div class="tg-button-wrap" data-animation-in="slideInLeft" data-delay-in=".5" data-duration-in="0.8">
                                <a href="<?php echo e(route('courses')); ?>" class="btn tg-svg"><span class="text">Explore Courses</span> <span class="svg-icon" id="slider-btn01-1" data-svg-icon="<?php echo e(asset('images/theme/icons/btn-arrow.svg')); ?>"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <img decoding="async" src="<?php echo e(asset('uploads/2023/07/categories_shape02.png')); ?>" alt="shape" width="108" class="top-shape" data-animation-in="slideInDown" data-delay-in=".6" data-duration-in="0.8">
            <img decoding="async" src="<?php echo e(asset('uploads/2023/07/slider_shape.png')); ?>" alt="shape" class="bottom-shape" data-animation-in="slideInLeft" data-delay-in=".6" data-duration-in="0.8">
        </div>
        <!-- Slide 3 -->
        <div class="slider__item d-flex" style="background-image:url(<?php echo e(asset('images/hero3.jpg')); ?>)">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-8">
                        <div class="slider__content">
                            <span class="sub-title" data-animation-in="slideInLeft" data-delay-in=".2" data-duration-in="0.8">Any Time, Any Where To Do Discover Courses</span>
                            <h2 class="title tg-svg" data-animation-in="slideInLeft" data-delay-in=".3" data-duration-in="0.8">Find The Best Suitable <span class="position-relative"><span class="svg-icon" id="slider-2" data-svg-icon="<?php echo e(asset('images/theme/icons/title_shape.svg')); ?>"></span>Courses</span> From Here</h2>
                            <ul class="list-wrap" data-animation-in="slideInLeft" data-delay-in=".4" data-duration-in="0.8">
                                <li><i class="fas fa-check-circle"></i>You can access 7,900+ different courses</li>
                                <li><i class="fas fa-check-circle"></i>Lifetime Access For All</li>
                            </ul>
                            <div class="tg-button-wrap" data-animation-in="slideInLeft" data-delay-in=".5" data-duration-in="0.8">
                                <a href="<?php echo e(route('courses')); ?>" class="btn tg-svg"><span class="text">Explore Courses</span> <span class="svg-icon" id="slider-btn01-2" data-svg-icon="<?php echo e(asset('images/theme/icons/btn-arrow.svg')); ?>"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <img decoding="async" src="<?php echo e(asset('uploads/2023/07/categories_shape02.png')); ?>" alt="shape" width="108" class="top-shape" data-animation-in="slideInDown" data-delay-in=".6" data-duration-in="0.8">
            <img decoding="async" src="<?php echo e(asset('uploads/2023/07/slider_shape.png')); ?>" alt="shape" class="bottom-shape" data-animation-in="slideInLeft" data-delay-in=".6" data-duration-in="0.8">
        </div>
    </div>
</section>
<!-- slider-area-end -->

<!-- quick-action-area -->
<section class="quick-action-area pt-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <?php if (isset($component)) { $__componentOriginalec95a5dbef57ac865f1ce016f21f4129 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalec95a5dbef57ac865f1ce016f21f4129 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.hero-card','data' => ['title' => 'Expert ICT Solutions Across East Africa','buttonText' => 'Get Started','link' => ''.e(route('contact')).'','image' => 'images/pc.png']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('hero-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Expert ICT Solutions Across East Africa','buttonText' => 'Get Started','link' => ''.e(route('contact')).'','image' => 'images/pc.png']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalec95a5dbef57ac865f1ce016f21f4129)): ?>
<?php $attributes = $__attributesOriginalec95a5dbef57ac865f1ce016f21f4129; ?>
<?php unset($__attributesOriginalec95a5dbef57ac865f1ce016f21f4129); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalec95a5dbef57ac865f1ce016f21f4129)): ?>
<?php $component = $__componentOriginalec95a5dbef57ac865f1ce016f21f4129; ?>
<?php unset($__componentOriginalec95a5dbef57ac865f1ce016f21f4129); ?>
<?php endif; ?>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="quick__action-item" style="background-image:url(<?php echo e(asset('uploads/2023/07/quick_action02.jpg')); ?>)">
                    <div class="quick__action-content">
                        <h4 class="title">Transform Your Business with Digital Innovation</h4>
                        <div class="tg-button-wrap">
                            <a href="<?php echo e(route('blog')); ?>" class="btn white-btn tg-svg"><span class="text">Explore Services</span> <span class="svg-icon" id="reg-btn-2" data-svg-icon="<?php echo e(asset('images/theme/icons/btn-arrow.svg')); ?>"></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- quick-action-area-end -->

<!-- services-area -->
<section class="courses-area section-py-120">
    <div class="container">
        <div class="row align-items-center mb-4">
            <div class="col-lg-6">
                <div class="section__title text-left">
                    <span class="sub-title">Professional ICT Solutions</span>
                    <h2 class="title tg-svg">Our <span class="position-relative"><span class="svg-icon" id="svg-courses" data-svg-icon="<?php echo e(asset('images/theme/icons/title_shape.svg')); ?>"></span>Services</span></h2>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="tg-button-wrap mt-4 mt-lg-0 justify-content-center justify-content-lg-end">
                    <a href="<?php echo e(route('blog')); ?>" class="btn btn-border tg-svg"><span class="text">View All Services</span> <span class="svg-icon" id="svg-all-courses" data-svg-icon="<?php echo e(asset('images/theme/icons/btn-arrow.svg')); ?>"></span></a>
                </div>
            </div>
        </div>
        
        <div class="row courses-slider-active">
            <?php $__currentLoopData = $courses ?? []; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col">
                <div class="courses__item-two shine__animate-item">
                    <div class="courses__item-two-thumb">
                        <a href="<?php echo e($course['url'] ?? '#'); ?>" class="shine__animate-link">
                            <img src="<?php echo e($course['image'] ?? asset('uploads/2019/05/courses01.jpg')); ?>" alt="<?php echo e($course['title'] ?? 'Course'); ?>" />
                        </a>
                        <div class="author">
                            <a href="#">
                                <img alt='Author' src='<?php echo e(asset('uploads/2023/07/author_img.png')); ?>' class='avatar avatar-32 photo' height='32' width='32' />
                            </a>
                        </div>
                    </div>
                    <div class="courses__item-two-content">
                        <div class="courses__item-categories">
                            <a href="#"><?php echo e($course['category'] ?? 'Business'); ?></a>
                        </div>
                        <h5 class="title"><a href="<?php echo e($course['url'] ?? '#'); ?>"><?php echo e($course['title'] ?? 'Course Title'); ?></a></h5>
                        <ul class="courses__item-meta list-wrap">
                            <li><i class="flaticon-file"></i> <?php echo e($course['lessons'] ?? '14'); ?></li>
                            <li><i class="flaticon-timer"></i> <?php echo e($course['duration'] ?? '12h 30m'); ?></li>
                            <li><i class="flaticon-user-1"></i> <?php echo e($course['students'] ?? '50'); ?></li>
                        </ul>
                        <div class="courses__item-bottom">
                            <div class="course__price">
                                <h3 class="price"><?php echo e($course['price'] ?? 'Free'); ?></h3>
                            </div>
                            <div class="courses__item-rating">
                                <i class="fas fa-star"></i>
                                <span class="rating-count">(<?php echo e($course['rating'] ?? '4.5'); ?>)</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            
            <?php if(empty($courses)): ?>
            <!-- Static service items -->
            <div class="col">
                <div class="courses__item-two shine__animate-item">
                    <div class="courses__item-two-thumb">
                        <a href="<?php echo e(route('service.show', 'ict-training')); ?>" class="shine__animate-link">
                            <img src="<?php echo e(asset('uploads/2023/06/ict.jpg')); ?>" alt="ICT Training" />
                        </a>
                    </div>
                    <div class="courses__item-two-content">
                        <div class="courses__item-categories"><a href="#">Training</a></div>
                        <h5 class="title"><a href="<?php echo e(route('service.show', 'ict-training')); ?>">ICT Training & Capacity Building</a></h5>
                        <p class="text-muted small">Professional development programs, certifications & skills training for organizations.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="courses__item-two shine__animate-item">
                    <div class="courses__item-two-thumb">
                        <a href="<?php echo e(route('service.show', 'software-development')); ?>" class="shine__animate-link">
                            <img src="<?php echo e(asset('uploads/2023/06/software development.jpg')); ?>" alt="Software Development" />
                        </a>
                    </div>
                    <div class="courses__item-two-content">
                        <div class="courses__item-categories"><a href="#">Development</a></div>
                        <h5 class="title"><a href="<?php echo e(route('service.show', 'software-development')); ?>">Software Development</a></h5>
                        <p class="text-muted small">Custom software, web applications, mobile apps & enterprise solutions.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="courses__item-two shine__animate-item">
                    <div class="courses__item-two-thumb">
                        <a href="<?php echo e(route('service.show', 'it-infrastructure')); ?>" class="shine__animate-link">
                            <img src="<?php echo e(asset('uploads/2023/06/IT training.jpg')); ?>" alt="IT Infrastructure" />
                        </a>
                    </div>
                    <div class="courses__item-two-content">
                        <div class="courses__item-categories"><a href="#">Infrastructure</a></div>
                        <h5 class="title"><a href="<?php echo e(route('service.show', 'it-infrastructure')); ?>">IT Infrastructure Solutions</a></h5>
                        <p class="text-muted small">Network design, server setup, cloud migration & system integration.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="courses__item-two shine__animate-item">
                    <div class="courses__item-two-thumb">
                        <a href="<?php echo e(route('service.show', 'cyber-security')); ?>" class="shine__animate-link">
                            <img src="<?php echo e(asset('uploads/2023/06/cyber.jpg')); ?>" alt="Cyber Security" />
                        </a>
                    </div>
                    <div class="courses__item-two-content">
                        <div class="courses__item-categories"><a href="#">Security</a></div>
                        <h5 class="title"><a href="<?php echo e(route('service.show', 'cyber-security')); ?>">Cyber Security Services</a></h5>
                        <p class="text-muted small">Security assessments, network protection & compliance solutions.</p>
                    </div>
                </div>
            </div>
            <?php endif; ?>
        </div>
    </div>
</section>
<!-- courses-area-end -->

<!-- fact-area -->
<section class="fact-area section-py-120" style="background-color: #f7f7f7;">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-lg-8 text-center">
                <div class="section__title">
                    <span class="sub-title">Our Impact</span>
                    <h2 class="title tg-svg">Driving <span class="position-relative"><span class="svg-icon" id="svg-skills" data-svg-icon="<?php echo e(asset('images/theme/icons/title_shape.svg')); ?>"></span>Digital</span> Transformation Across Africa</h2>
                </div>
            </div>
        </div>
        
        <div class="row justify-content-center">
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="fact__item-two text-center">
                    <div class="fact__icon-two">
                        <img decoding="async" src="<?php echo e(asset('images/icons/icon-1.png')); ?>" alt="Clients Icon">
                    </div>
                    <div class="fact__content-two">
                        <h3 class="count"><span class="odometer" data-count="500">0</span>+</h3>
                        <p>Satisfied Clients</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="fact__item-two text-center">
                    <div class="fact__icon-two">
                        <img decoding="async" src="<?php echo e(asset('images/icons/icon-4.png')); ?>" alt="Projects Icon">
                    </div>
                    <div class="fact__content-two">
                        <h3 class="count"><span class="odometer" data-count="1200">0</span>+</h3>
                        <p>Projects Completed</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="fact__item-two text-center">
                    <div class="fact__icon-two">
                        <img decoding="async" src="<?php echo e(asset('images/icons/icon-1.png')); ?>" alt="Professionals Icon">
                    </div>
                    <div class="fact__content-two">
                        <h3 class="count"><span class="odometer" data-count="50">0</span>+</h3>
                        <p>Expert Professionals</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="fact__item-two text-center">
                    <div class="fact__icon-two">
                        <img decoding="async" src="<?php echo e(asset('images/icons/icon-4.png')); ?>" alt="Experience Icon">
                    </div>
                    <div class="fact__content-two">
                        <h3 class="count"><span class="odometer" data-count="15">0</span>+</h3>
                        <p>Years of Experience</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- fact-area-end -->

<!-- products-area -->
<section class="categories-area section-py-120">
    <div class="container">
        <div class="row align-items-center mb-4">
            <div class="col-lg-6">
                <div class="section__title text-left">
                    <span class="sub-title">Our Innovative Solutions</span>
                    <h2 class="title tg-svg">Explore Our <span class="position-relative"><span class="svg-icon" id="svg-categories" data-svg-icon="<?php echo e(asset('images/theme/icons/title_shape.svg')); ?>"></span>Products</span></h2>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="tg-button-wrap mt-4 mt-lg-0 justify-content-center justify-content-lg-end">
                    <a href="#" class="btn btn-border tg-svg"><span class="text">All Products</span> <span class="svg-icon" id="svg-all-cat" data-svg-icon="<?php echo e(asset('images/theme/icons/btn-arrow.svg')); ?>"></span></a>
                </div>
            </div>
        </div>
        
        <div class="products-slider-active">
            <div class="categories__item-three">
                <a href="#">
                    <div class="thumb">
                        <img decoding="async" src="<?php echo e(asset('images/mgeni.jpg')); ?>" alt="Mgeni App">
                    </div>
                    <div class="info">
                        <div class="list"><span class="courses">Event Management</span></div>
                        <div class="list"><span class="name">Mgeni App</span></div>
                    </div>
                </a>
            </div>
            <div class="categories__item-three">
                <a href="#">
                    <div class="thumb">
                        <img decoding="async" src="<?php echo e(asset('images/easysign.jpg')); ?>" alt="Easy Sign App">
                    </div>
                    <div class="info">
                        <div class="list"><span class="courses">Digital Signature</span></div>
                        <div class="list"><span class="name">Easy Sign App</span></div>
                    </div>
                </a>
            </div>
            <div class="categories__item-three">
                <a href="#">
                    <div class="thumb">
                        <img decoding="async" src="<?php echo e(asset('images/workflow1.webp')); ?>" alt="Workflow">
                    </div>
                    <div class="info">
                        <div class="list"><span class="courses">Process Automation</span></div>
                        <div class="list"><span class="name">Workflow</span></div>
                    </div>
                </a>
            </div>
            <div class="categories__item-three">
                <a href="#">
                    <div class="thumb">
                        <img decoding="async" src="<?php echo e(asset('images/mgeni.jpg')); ?>" alt="Mgeni App">
                    </div>
                    <div class="info">
                        <div class="list"><span class="courses">Event Management</span></div>
                        <div class="list"><span class="name">Mgeni App</span></div>
                    </div>
                </a>
            </div>
            <div class="categories__item-three">
                <a href="#">
                    <div class="thumb">
                        <img decoding="async" src="<?php echo e(asset('images/easysign.jpg')); ?>" alt="Easy Sign App">
                    </div>
                    <div class="info">
                        <div class="list"><span class="courses">Digital Signature</span></div>
                        <div class="list"><span class="name">Easy Sign App</span></div>
                    </div>
                </a>
            </div>
            <div class="categories__item-three">
                <a href="#">
                    <div class="thumb">
                        <img decoding="async" src="<?php echo e(asset('images/workflow1.webp')); ?>" alt="Workflow">
                    </div>
                    <div class="info">
                        <div class="list"><span class="courses">Process Automation</span></div>
                        <div class="list"><span class="name">Workflow</span></div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>
<!-- products-area-end -->

<!-- cta-area -->
<section class="cta-area-two position-relative">
    <div class="cta__bg" style="background-image:url(<?php echo e(asset('uploads/2023/07/cta_bg.jpg')); ?>)"></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-8 col-lg-10">
                <div class="cta__content">
                    <p>TRANSFORM YOUR BUSINESS TODAY</p>
                    <h2 class="title">Expert ICT Solutions Across</h2>
                    <h5 class="sub-title">East Africa</h5>
                    <div class="tg-button-wrap justify-content-center">
                        <a href="<?php echo e(route('contact')); ?>" class="btn tg-svg"><span class="text">Get Started</span> <span class="svg-icon" id="cta-btn" data-svg-icon="<?php echo e(asset('images/theme/icons/btn-arrow.svg')); ?>"></span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="cta__shapes">
        <img src="<?php echo e(asset('uploads/2023/07/cta_shape001.svg')); ?>" alt="img" class="position-absolute" data-aos="fade-down-right" data-aos-delay="300">
        <img src="<?php echo e(asset('uploads/2023/07/cta_shape002.png')); ?>" alt="img" class="position-absolute">
        <img src="<?php echo e(asset('uploads/2023/07/cta_shape003.svg')); ?>" alt="img" class="position-absolute" data-aos="fade-up-left" data-aos-delay="300">
    </div>
</section>
<!-- cta-area-end -->

<!-- testimonial-area -->
<div class="testimonial-area-wrapper">
    <div class="container">
        <!-- Section Title -->
        <div class="row justify-content-center mb-5">
            <div class="col-lg-5 text-center">
                <div class="section__title">
                    <span class="sub-title">Our Testimonials</span>
                    <h2 class="title tg-svg">What's Our <span class="position-relative"><span class="svg-icon" id="svg-testi" data-svg-icon="<?php echo e(asset('images/theme/icons/title_shape.svg')); ?>"></span>Students</span> Think</h2>
                </div>
            </div>
        </div>
        
        <!-- Three Column Layout -->
        <div class="row">
            <!-- Left Column - Decorative Images -->
            <div class="col-lg-1 d-none d-lg-block">
                <div class="testimonial-decorative-left">
                    <img src="<?php echo e(asset('uploads/2023/07/testi01.png')); ?>" alt="testimonial" class="testi-deco-img-1" width="100" height="100">
                    <img src="<?php echo e(asset('uploads/2023/07/testi02.png')); ?>" alt="testimonial" class="testi-deco-img-2" width="100" height="100">
                    <img src="<?php echo e(asset('uploads/2023/07/testi03.png')); ?>" alt="testimonial" class="testi-deco-img-3" width="100" height="100">
                </div>
            </div>
            
            <!-- Middle Column - Testimonial Slider -->
            <div class="col-lg-10 col-md-12">
                <div class="testimonial-active">
                    <div class="testimonial__item">
                        <div class="testimonial__quote">
                            <img src="<?php echo e(asset('images/theme/icons/quote02.png')); ?>" alt="quote">
                        </div>
                        <div class="testimonial__rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p>ICT Africa transformed our entire IT infrastructure. Their professional team delivered beyond our expectations, implementing a robust system that has significantly improved our operational efficiency. Highly recommended!</p>
                        <div class="testimonial__avatar">
                            <h4 class="name">Sarah Kamau</h4>
                            <span class="designation">CEO, TechVision Kenya</span>
                        </div>
                    </div>
                    <div class="testimonial__item">
                        <div class="testimonial__quote">
                            <img src="<?php echo e(asset('images/theme/icons/quote02.png')); ?>" alt="quote">
                        </div>
                        <div class="testimonial__rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p>The software development services provided by ICT Africa have been exceptional. They understood our business needs perfectly and delivered a custom solution that streamlined our processes. Their ongoing support is outstanding.</p>
                        <div class="testimonial__avatar">
                            <h4 class="name">Michael Odhiambo</h4>
                            <span class="designation">IT Director, African Finance Corp</span>
                        </div>
                    </div>
                    <div class="testimonial__item">
                        <div class="testimonial__quote">
                            <img src="<?php echo e(asset('images/theme/icons/quote02.png')); ?>" alt="quote">
                        </div>
                        <div class="testimonial__rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p>Working with ICT Africa on our digital transformation journey has been a game-changer. Their expertise in cybersecurity and cloud solutions has positioned us as a leader in our industry. True professionals!</p>
                        <div class="testimonial__avatar">
                            <h4 class="name">Amina Hassan</h4>
                            <span class="designation">Operations Manager, East Africa Logistics</span>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Right Column - Decorative Images -->
            <div class="col-lg-1 d-none d-lg-block">
                <div class="testimonial-decorative-right">
                    <img src="<?php echo e(asset('uploads/2023/07/testi04.png')); ?>" alt="testimonial" class="testi-deco-img-4" width="100" height="100">
                    <img src="<?php echo e(asset('uploads/2023/07/testi05.png')); ?>" alt="testimonial" class="testi-deco-img-5" width="100" height="100">
                    <img src="<?php echo e(asset('uploads/2023/07/testi06.png')); ?>" alt="testimonial" class="testi-deco-img-6" width="100" height="100">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- testimonial-area-end -->

<!-- brand-area -->
<section class="brand-area section-py-120">
    <div class="container">
        <div class="row brand-slider-active">
            <div class="col-12">
                <div class="brand__item">
                    <a href="#"><img src="<?php echo e(asset('uploads/2023/07/brand01.png')); ?>" alt="Brand"></a>
                </div>
            </div>
            <div class="col-12">
                <div class="brand__item">
                    <a href="#"><img src="<?php echo e(asset('uploads/2023/07/brand02.png')); ?>" alt="Brand"></a>
                </div>
            </div>
            <div class="col-12">
                <div class="brand__item">
                    <a href="#"><img src="<?php echo e(asset('uploads/2023/07/brand03.png')); ?>" alt="Brand"></a>
                </div>
            </div>
            <div class="col-12">
                <div class="brand__item">
                    <a href="#"><img src="<?php echo e(asset('uploads/2023/07/brand04.png')); ?>" alt="Brand"></a>
                </div>
            </div>
            <div class="col-12">
                <div class="brand__item">
                    <a href="#"><img src="<?php echo e(asset('uploads/2023/07/brand05.png')); ?>" alt="Brand"></a>
                </div>
            </div>
            <div class="col-12">
                <div class="brand__item">
                    <a href="#"><img src="<?php echo e(asset('uploads/2023/07/brand06.png')); ?>" alt="Brand"></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- brand-area-end -->

<!-- cta-area-three -->
<section class="cta-area-three">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="cta__wrapper" style="background-image:url(<?php echo e(asset('uploads/2023/07/cta_bg.png')); ?>)">
                    <div class="section__title white-title">
                        <h2 class="title tg-svg">Join us & <span class="position-relative"><span class="svg-icon" id="svg-cta-title" data-svg-icon="<?php echo e(asset('images/theme/icons/title_shape.svg')); ?>"></span>Spread</span> Experiences</h2>
                    </div>
                    <div class="cta__desc">
                        <p>Partner with ICT Africa to deliver innovative technology solutions and transform your digital presence across the continent.</p>
                    </div>
                    <div class="tg-button-wrap justify-content-center justify-content-md-end">
                        <a href="<?php echo e(route('contact')); ?>" class="btn white-btn tg-svg"><span class="text">Become a Partner</span> <span class="svg-icon" id="cta-btn-partner" data-svg-icon="<?php echo e(asset('images/theme/icons/btn-arrow.svg')); ?>"></span></a>
                    </div>
                    <img decoding="async" class="object" src="<?php echo e(asset('uploads/2023/07/cta_shape01-1.svg')); ?>" style="left: 25px; top: -35px;" alt="shape" data-aos="fade-down" data-aos-delay="400">
                    <img decoding="async" class="object" src="<?php echo e(asset('uploads/2025/03/cta_shape02-new.svg')); ?>" style="right: -20px; bottom: -80px;" alt="shape" data-aos="fade-up" data-aos-delay="400">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- cta-area-three-end -->

<!-- contact-section -->
<?php if (isset($component)) { $__componentOriginal647b175ed9e08e7e2da03809063e0558 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal647b175ed9e08e7e2da03809063e0558 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.contact-section','data' => ['showImage' => true]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('contact-section'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['showImage' => true]); ?>
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

<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
<script>
jQuery(document).ready(function(){
    // Slider initialization
    jQuery('.slider__active_two').slick({
        dots: false,
        infinite: true,
        speed: 1000,
        autoplay: true,
        rtl: false,
        autoplaySpeed: 5000,
        arrows: false,
        slidesToShow: 1,
        slidesToScroll: 1,
        fade: true,
    }).slickAnimation();
    
    // Courses slider
    jQuery('.courses-slider-active').slick({
        dots: false,
        infinite: true,
        speed: 600,
        autoplay: false,
        arrows: true,
        rtl: false,
        slidesToShow: 4,
        slidesToScroll: 1,
        prevArrow: '<button type="button" class="slick-prev"><i class="fas fa-arrow-left"></i></button>',
        nextArrow: '<button type="button" class="slick-next"><i class="fas fa-arrow-right"></i></button>',
        responsive: [
            {
                breakpoint: 1200,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    infinite: true,
                }
            },
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 767,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    arrows: false,
                }
            },
        ]
    });
    
    // Testimonial slider
    jQuery('.testimonial-active').slick({
        dots: false,
        infinite: true,
        speed: 600,
        autoplay: true,
        autoplaySpeed: 3000,
        arrows: true,
        rtl: false,
        slidesToShow: 1,
        slidesToScroll: 1,
        pauseOnHover: true,
        prevArrow: '<button type="button" class="slick-prev"><i class="flaticon-chevron"></i></button>',
        nextArrow: '<button type="button" class="slick-next"><i class="flaticon-chevron"></i></button>',
        responsive: [
            {
                breakpoint: 767,
                settings: {
                    arrows: false,
                }
            },
        ]
    });
    
    // Products slider - continuous auto-scroll
    jQuery('.products-slider-active').slick({
        dots: false,
        infinite: true,
        speed: 3000,
        autoplay: true,
        autoplaySpeed: 0,
        cssEase: 'linear',
        arrows: false,
        rtl: false,
        slidesToShow: 4,
        slidesToScroll: 1,
        pauseOnHover: true,
        responsive: [
            {
                breakpoint: 1200,
                settings: {
                    slidesToShow: 3,
                }
            },
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 2,
                }
            },
            {
                breakpoint: 767,
                settings: {
                    slidesToShow: 1,
                }
            },
        ]
    });
    
    // Brand slider - continuous auto-scroll
    jQuery('.brand-slider-active').slick({
        dots: false,
        infinite: true,
        speed: 3000,
        autoplay: true,
        autoplaySpeed: 0,
        cssEase: 'linear',
        arrows: false,
        rtl: false,
        slidesToShow: 6,
        slidesToScroll: 1,
        pauseOnHover: true,
        responsive: [
            {
                breakpoint: 1200,
                settings: {
                    slidesToShow: 6,
                }
            },
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 4,
                }
            },
            {
                breakpoint: 767,
                settings: {
                    slidesToShow: 3,
                }
            },
            {
                breakpoint: 575,
                settings: {
                    slidesToShow: 2,
                }
            },
        ]
    });
    
    // Odometer counter
    jQuery('.odometer').appear(function() {
        var odo = jQuery(".odometer");
        odo.each(function() {
            var countNumber = jQuery(this).attr("data-count");
            jQuery(this).html(countNumber);
        });
    });
});
</script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\ICT11\ICT1\eduvalt-laravel\resources\views/pages/home.blade.php ENDPATH**/ ?>