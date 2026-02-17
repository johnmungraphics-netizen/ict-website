@extends('layouts.app')

@section('title', 'Courses - Eduvalt')

@section('content')
<!-- breadcrumb-area -->
<section class="breadcrumb-area breadcrumb-bg" data-background="{{ asset('images/theme/bg/breadcrumb_bg.jpg') }}">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-content">
                    <h3 class="title">All Courses</h3>
                    <nav aria-label="breadcrumb" class="breadcrumb">
                        <span><a href="{{ route('home') }}">Home</a></span>
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
                    <form action="{{ route('courses') }}" method="GET" class="d-flex gap-3">
                        <input type="text" name="s" class="form-control" placeholder="Search courses..." value="{{ request('s') }}">
                        <select name="category" class="form-select" style="width: auto;">
                            <option value="">All Categories</option>
                            <option value="business" {{ request('category') == 'business' ? 'selected' : '' }}>Business</option>
                            <option value="design" {{ request('category') == 'design' ? 'selected' : '' }}>Design</option>
                            <option value="development" {{ request('category') == 'development' ? 'selected' : '' }}>Development</option>
                            <option value="marketing" {{ request('category') == 'marketing' ? 'selected' : '' }}>Marketing</option>
                            <option value="photography" {{ request('category') == 'photography' ? 'selected' : '' }}>Photography</option>
                        </select>
                        <button type="submit" class="btn">Filter</button>
                    </form>
                </div>
            </div>
            <div class="col-lg-4 text-end">
                <span class="courses-result">Showing {{ count($courses ?? []) ?: '12' }} courses</span>
            </div>
        </div>
        
        <div class="row">
            @forelse($courses ?? [] as $course)
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="courses__item-two shine__animate-item mb-4">
                    <div class="courses__item-two-thumb">
                        <a href="{{ $course['url'] ?? '#' }}" class="shine__animate-link">
                            <img src="{{ $course['image'] ?? asset('uploads/2019/05/courses01.jpg') }}" alt="{{ $course['title'] ?? 'Course' }}" />
                        </a>
                        <div class="author">
                            <a href="#">
                                <img alt='Author' src='{{ asset('uploads/2023/07/author_img.png') }}' class='avatar avatar-32 photo' height='32' width='32' />
                            </a>
                        </div>
                    </div>
                    <div class="courses__item-two-content">
                        <div class="courses__item-categories">
                            <a href="#">{{ $course['category'] ?? 'Business' }}</a>
                        </div>
                        <h5 class="title"><a href="{{ $course['url'] ?? '#' }}">{{ $course['title'] ?? 'Course Title' }}</a></h5>
                        <ul class="courses__item-meta list-wrap">
                            <li><i class="flaticon-file"></i> {{ $course['lessons'] ?? '14' }}</li>
                            <li><i class="flaticon-timer"></i> {{ $course['duration'] ?? '12h 30m' }}</li>
                            <li><i class="flaticon-user-1"></i> {{ $course['students'] ?? '50' }}</li>
                        </ul>
                        <div class="courses__item-bottom">
                            <div class="course__price">
                                <h3 class="price">{{ $course['price'] ?? 'Free' }}</h3>
                            </div>
                            <div class="courses__item-rating">
                                <i class="fas fa-star"></i>
                                <span class="rating-count">({{ $course['rating'] ?? '4.5' }})</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @empty
            <!-- Static course items if no data passed -->
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="courses__item-two shine__animate-item mb-4">
                    <div class="courses__item-two-thumb">
                        <a href="#" class="shine__animate-link">
                            <img src="{{ asset('uploads/2019/05/courses01.jpg') }}" alt="Course" />
                        </a>
                        <div class="author">
                            <a href="#"><img alt='Author' src='{{ asset('uploads/2023/07/author_img.png') }}' class='avatar avatar-32 photo' height='32' width='32' /></a>
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
                            <img src="{{ asset('uploads/2019/05/courses03.jpg') }}" alt="Course" />
                        </a>
                        <div class="author">
                            <a href="#"><img alt='Author' src='{{ asset('uploads/2023/07/author_img.png') }}' class='avatar avatar-32 photo' height='32' width='32' /></a>
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
                            <img src="{{ asset('uploads/2019/05/courses05.jpg') }}" alt="Course" />
                        </a>
                        <div class="author">
                            <a href="#"><img alt='Author' src='{{ asset('uploads/2023/07/author_img.png') }}' class='avatar avatar-32 photo' height='32' width='32' /></a>
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
                            <img src="{{ asset('uploads/2019/05/courses06.jpg') }}" alt="Course" />
                        </a>
                        <div class="author">
                            <a href="#"><img alt='Author' src='{{ asset('uploads/2023/07/author_img.png') }}' class='avatar avatar-32 photo' height='32' width='32' /></a>
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
                            <img src="{{ asset('uploads/2019/05/courses08.jpg') }}" alt="Course" />
                        </a>
                        <div class="author">
                            <a href="#"><img alt='Author' src='{{ asset('uploads/2023/07/author_img.png') }}' class='avatar avatar-32 photo' height='32' width='32' /></a>
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
                            <img src="{{ asset('uploads/2019/05/courses10.jpg') }}" alt="Course" />
                        </a>
                        <div class="author">
                            <a href="#"><img alt='Author' src='{{ asset('uploads/2023/07/author_img.png') }}' class='avatar avatar-32 photo' height='32' width='32' /></a>
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
                            <img src="{{ asset('uploads/2019/05/courses11.jpg') }}" alt="Course" />
                        </a>
                        <div class="author">
                            <a href="#"><img alt='Author' src='{{ asset('uploads/2023/07/author_img.png') }}' class='avatar avatar-32 photo' height='32' width='32' /></a>
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
            @endforelse
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
@endsection
