

<?php $__env->startSection('title', 'Courses - Eduvalt'); ?>

<?php $__env->startSection('content'); ?>
<!-- breadcrumb-area -->
<section class="breadcrumb-area breadcrumb-bg" data-background="<?php echo e(asset('images/theme/bg/breadcrumb_bg.jpg')); ?>">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-content">
                    <h3 class="title">All Courses</h3>
                    <nav aria-label="breadcrumb" class="breadcrumb">
                        <span><a href="<?php echo e(route('home')); ?>">Home</a></span>
                        <span class="breadcrumb-separator"><i class="fas fa-angle-right"></i></span>
                        <span class="current-item">Courses</span>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb-area-end -->

<!-- courses-area -->
<section class="courses-area section-py-120">
    <div class="container">
        <div class="row mb-4">
            <div class="col-lg-8">
                <div class="courses-filter">
                    <form action="<?php echo e(route('courses')); ?>" method="GET" class="d-flex gap-3">
                        <input type="text" name="s" class="form-control" placeholder="Search courses..." value="<?php echo e(request('s')); ?>">
                        <select name="category" class="form-select" style="width: auto;">
                            <option value="">All Categories</option>
                            <option value="business" <?php echo e(request('category') == 'business' ? 'selected' : ''); ?>>Business</option>
                            <option value="design" <?php echo e(request('category') == 'design' ? 'selected' : ''); ?>>Design</option>
                            <option value="development" <?php echo e(request('category') == 'development' ? 'selected' : ''); ?>>Development</option>
                            <option value="marketing" <?php echo e(request('category') == 'marketing' ? 'selected' : ''); ?>>Marketing</option>
                            <option value="photography" <?php echo e(request('category') == 'photography' ? 'selected' : ''); ?>>Photography</option>
                        </select>
                        <button type="submit" class="btn">Filter</button>
                    </form>
                </div>
            </div>
            <div class="col-lg-4 text-end">
                <span class="courses-result">Showing <?php echo e(count($courses ?? []) ?: '12'); ?> courses</span>
            </div>
        </div>
        
        <div class="row">
            <?php $__empty_1 = true; $__currentLoopData = $courses ?? []; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="courses__item-two shine__animate-item mb-4">
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
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <!-- Static course items if no data passed -->
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="courses__item-two shine__animate-item mb-4">
                    <div class="courses__item-two-thumb">
                        <a href="#" class="shine__animate-link">
                            <img src="<?php echo e(asset('uploads/2019/05/courses01.jpg')); ?>" alt="Course" />
                        </a>
                        <div class="author">
                            <a href="#"><img alt='Author' src='<?php echo e(asset('uploads/2023/07/author_img.png')); ?>' class='avatar avatar-32 photo' height='32' width='32' /></a>
                        </div>
                    </div>
                    <div class="courses__item-two-content">
                        <div class="courses__item-categories"><a href="#">Marketing</a></div>
                        <h5 class="title"><a href="#">Bigener Adobe Illustrator for Graphic Design</a></h5>
                        <ul class="courses__item-meta list-wrap">
                            <li><i class="flaticon-file"></i> 6</li>
                            <li><i class="flaticon-timer"></i> 12h 30m</li>
                            <li><i class="flaticon-user-1"></i> 285</li>
                        </ul>
                        <div class="courses__item-bottom">
                            <div class="course__price"><h3 class="price">$199.00</h3></div>
                            <div class="courses__item-rating"><i class="fas fa-star"></i><span class="rating-count">(4.35)</span></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="courses__item-two shine__animate-item mb-4">
                    <div class="courses__item-two-thumb">
                        <a href="#" class="shine__animate-link">
                            <img src="<?php echo e(asset('uploads/2019/05/courses03.jpg')); ?>" alt="Course" />
                        </a>
                        <div class="author">
                            <a href="#"><img alt='Author' src='<?php echo e(asset('uploads/2023/07/author_img.png')); ?>' class='avatar avatar-32 photo' height='32' width='32' /></a>
                        </div>
                    </div>
                    <div class="courses__item-two-content">
                        <div class="courses__item-categories"><a href="#">Development</a></div>
                        <h5 class="title"><a href="#">Web Development Fully Complete Guideline</a></h5>
                        <ul class="courses__item-meta list-wrap">
                            <li><i class="flaticon-file"></i> 14</li>
                            <li><i class="flaticon-timer"></i> 18h 20m</li>
                            <li><i class="flaticon-user-1"></i> 47</li>
                        </ul>
                        <div class="courses__item-bottom">
                            <div class="course__price"><h3 class="price">$90.00</h3></div>
                            <div class="courses__item-rating"><i class="fas fa-star"></i><span class="rating-count">(4.33)</span></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="courses__item-two shine__animate-item mb-4">
                    <div class="courses__item-two-thumb">
                        <a href="#" class="shine__animate-link">
                            <img src="<?php echo e(asset('uploads/2019/05/courses05.jpg')); ?>" alt="Course" />
                        </a>
                        <div class="author">
                            <a href="#"><img alt='Author' src='<?php echo e(asset('uploads/2023/07/author_img.png')); ?>' class='avatar avatar-32 photo' height='32' width='32' /></a>
                        </div>
                    </div>
                    <div class="courses__item-two-content">
                        <div class="courses__item-categories"><a href="#">Photography</a></div>
                        <h5 class="title"><a href="#">Photography training for the Artist in you</a></h5>
                        <ul class="courses__item-meta list-wrap">
                            <li><i class="flaticon-file"></i> 14</li>
                            <li><i class="flaticon-timer"></i> 13h 20m</li>
                            <li><i class="flaticon-user-1"></i> 27</li>
                        </ul>
                        <div class="courses__item-bottom">
                            <div class="course__price"><h3 class="price">$75.00</h3></div>
                            <div class="courses__item-rating"><i class="fas fa-star"></i><span class="rating-count">(4.33)</span></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="courses__item-two shine__animate-item mb-4">
                    <div class="courses__item-two-thumb">
                        <a href="#" class="shine__animate-link">
                            <img src="<?php echo e(asset('uploads/2019/05/courses06.jpg')); ?>" alt="Course" />
                        </a>
                        <div class="author">
                            <a href="#"><img alt='Author' src='<?php echo e(asset('uploads/2023/07/author_img.png')); ?>' class='avatar avatar-32 photo' height='32' width='32' /></a>
                        </div>
                    </div>
                    <div class="courses__item-two-content">
                        <div class="courses__item-categories"><a href="#">Business</a></div>
                        <h5 class="title"><a href="#">The Complete Guide to the Global Markets</a></h5>
                        <ul class="courses__item-meta list-wrap">
                            <li><i class="flaticon-file"></i> 16</li>
                            <li><i class="flaticon-timer"></i> 15h 20m</li>
                            <li><i class="flaticon-user-1"></i> 3</li>
                        </ul>
                        <div class="courses__item-bottom">
                            <div class="course__price"><h3 class="price">$82.00</h3></div>
                            <div class="courses__item-rating"><i class="fas fa-star"></i><span class="rating-count">(5.00)</span></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="courses__item-two shine__animate-item mb-4">
                    <div class="courses__item-two-thumb">
                        <a href="#" class="shine__animate-link">
                            <img src="<?php echo e(asset('uploads/2019/05/courses08.jpg')); ?>" alt="Course" />
                        </a>
                        <div class="author">
                            <a href="#"><img alt='Author' src='<?php echo e(asset('uploads/2023/07/author_img.png')); ?>' class='avatar avatar-32 photo' height='32' width='32' /></a>
                        </div>
                    </div>
                    <div class="courses__item-two-content">
                        <div class="courses__item-categories"><a href="#">Sales</a></div>
                        <h5 class="title"><a href="#">Sales Training Practical Sales Techniques</a></h5>
                        <ul class="courses__item-meta list-wrap">
                            <li><i class="flaticon-file"></i> 14</li>
                            <li><i class="flaticon-timer"></i> 10h 30m</li>
                            <li><i class="flaticon-user-1"></i> 47</li>
                        </ul>
                        <div class="courses__item-bottom">
                            <div class="course__price"><h3 class="price">Free</h3></div>
                            <div class="courses__item-rating"><i class="fas fa-star"></i><span class="rating-count">(4.60)</span></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="courses__item-two shine__animate-item mb-4">
                    <div class="courses__item-two-thumb">
                        <a href="#" class="shine__animate-link">
                            <img src="<?php echo e(asset('uploads/2019/05/courses10.jpg')); ?>" alt="Course" />
                        </a>
                        <div class="author">
                            <a href="#"><img alt='Author' src='<?php echo e(asset('uploads/2023/07/author_img.png')); ?>' class='avatar avatar-32 photo' height='32' width='32' /></a>
                        </div>
                    </div>
                    <div class="courses__item-two-content">
                        <div class="courses__item-categories"><a href="#">Business</a></div>
                        <h5 class="title"><a href="#">Complete Guidelines advanced fundamentals</a></h5>
                        <ul class="courses__item-meta list-wrap">
                            <li><i class="flaticon-file"></i> 14</li>
                            <li><i class="flaticon-timer"></i> 12h 0m</li>
                            <li><i class="flaticon-user-1"></i> 45</li>
                        </ul>
                        <div class="courses__item-bottom">
                            <div class="course__price"><h3 class="price">Free</h3></div>
                            <div class="courses__item-rating"><i class="fas fa-star"></i><span class="rating-count">(4.33)</span></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="courses__item-two shine__animate-item mb-4">
                    <div class="courses__item-two-thumb">
                        <a href="#" class="shine__animate-link">
                            <img src="<?php echo e(asset('uploads/2019/05/courses11.jpg')); ?>" alt="Course" />
                        </a>
                        <div class="author">
                            <a href="#"><img alt='Author' src='<?php echo e(asset('uploads/2023/07/author_img.png')); ?>' class='avatar avatar-32 photo' height='32' width='32' /></a>
                        </div>
                    </div>
                    <div class="courses__item-two-content">
                        <div class="courses__item-categories"><a href="#">Finance</a></div>
                        <h5 class="title"><a href="#">Complete Financial Analyst Course</a></h5>
                        <ul class="courses__item-meta list-wrap">
                            <li><i class="flaticon-file"></i> 15</li>
                            <li><i class="flaticon-timer"></i> 17h 20m</li>
                            <li><i class="flaticon-user-1"></i> 51</li>
                        </ul>
                        <div class="courses__item-bottom">
                            <div class="course__price"><h3 class="price">Free</h3></div>
                            <div class="courses__item-rating"><i class="fas fa-star"></i><span class="rating-count">(4.25)</span></div>
                        </div>
                    </div>
                </div>
            </div>
            <?php endif; ?>
        </div>
        
        <!-- Pagination -->
        <nav class="pagination__wrap mt-5">
            <ul class="pagination justify-content-center">
                <li class="page-item"><span class="page-numbers current">1</span></li>
                <li class="page-item"><a class="page-numbers" href="#">2</a></li>
                <li class="page-item"><a class="page-numbers" href="#">3</a></li>
                <li class="page-item"><a class="next page-numbers" href="#"><i class="fas fa-angle-double-right"></i></a></li>
            </ul>
        </nav>
    </div>
</section>
<!-- courses-area-end -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\ICT11\ICT1\eduvalt-laravel\resources\views/pages/courses.blade.php ENDPATH**/ ?>