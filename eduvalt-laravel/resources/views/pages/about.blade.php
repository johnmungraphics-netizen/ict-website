@extends('layouts.app')

@section('title', 'About Us - ICT Africa')
@push('styles')
<style>
/* Statistics icons size */
.fact__icon-two img {
    max-width: 60px;
    height: auto;
}
</style>
@endpush
@section('content')
<!-- breadcrumb-area -->
<section class="breadcrumb-area breadcrumb-bg" data-background="{{ asset('images/theme/bg/breadcrumb_bg.jpg') }}">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-content">
                    <h3 class="title">About Us</h3>
                    <nav aria-label="breadcrumb" class="breadcrumb">
                        <span><a href="{{ route('home') }}">Home</a></span>
                        <span class="breadcrumb-separator"><i class="fas fa-angle-right"></i></span>
                        <span class="current-item">About Us</span>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb-area-end -->

<!-- about-area -->
<section class="section-py-120">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-5 col-lg-6">
                <div class="about__title-wrap">
                    <div class="section__title">
                        <span class="sub-title">Who we are</span>
                        <h2 class="title tg-svg">Your Trusted <span class="position-relative"><span class="svg-icon" id="about-svg-1" data-svg-icon="{{ asset('images/theme/icons/title_shape.svg') }}"></span>Partner</span> In Technology Solutions</h2>
                    </div>
                    <p class="fw-medium">ICT Africa is a leading information and communication technology company dedicated to providing innovative solutions that drive digital transformation across Africa.</p>
                    <p>With years of experience and a team of highly skilled professionals, we specialize in delivering comprehensive ICT services including software development, IT infrastructure, cybersecurity, training, and consultancy. Our commitment to excellence and customer satisfaction has made us a trusted partner for businesses and organizations seeking to leverage technology for growth and efficiency.</p>
                    <div class="tg-button-wrap">
                        <a href="{{ route('blog') }}" class="btn tg-svg"><span class="text">Our Services</span> <span class="svg-icon" id="about-btn" data-svg-icon="{{ asset('images/theme/icons/btn-arrow.svg') }}"></span></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-7 col-lg-6 col-md-11">
                <div class="about__images-wrap">
                    <div class="column">
                        <img decoding="async" src="{{ asset('uploads/2019/05/courses06.jpg') }}" alt="ICT Training">
                    </div>
                    <div class="column">
                        <img decoding="async" src="{{ asset('uploads/2019/05/courses03.jpg') }}" alt="Software Development">
                        <img decoding="async" src="{{ asset('uploads/2019/05/courses05.jpg') }}" alt="IT Infrastructure">
                    </div>
                    <div class="about__shapes">
                        <img decoding="async" src="{{ asset('uploads/2023/07/categories_shape02.png') }}" alt="img" class="about-shape-01" data-aos="fade-down-left">
                        <img decoding="async" src="{{ asset('uploads/2023/07/banner_shape02.png') }}" alt="img" class="about-shape-02" data-aos="fade-up-right">
                        <img decoding="async" src="{{ asset('uploads/2023/07/categories_shape01.png') }}" alt="img" class="about-shape-03 rotateme">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- about-area-end -->

<!-- mission-vision-values -->
<section class="features-area section-py-120" style="background-color: #f7f7f7;">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-lg-8 text-center">
                <div class="section__title">
                    <span class="sub-title">Our Foundation</span>
                    <h2 class="title tg-svg">Mission, Vision <span class="position-relative"><span class="svg-icon" id="svg-mvv" data-svg-icon="{{ asset('images/theme/icons/title_shape.svg') }}"></span>& Values</span></h2>
                </div>
            </div>
        </div>
        
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="features__item" style="background: #fff; padding: 30px; border-radius: 10px; height: 100%; box-shadow: 0 4px 15px rgba(0,0,0,0.08);">
                    <div class="features__icon" style="margin-bottom: 20px;">
                        <i class="fas fa-bullseye" style="font-size: 48px; color: #5751E1;"></i>
                    </div>
                    <div class="features__content">
                        <h4 class="title" style="margin-bottom: 15px; color: #161439;">Our Mission</h4>
                        <p>To empower businesses and individuals across Africa with cutting-edge technology solutions that enhance productivity, foster innovation, and drive sustainable growth. We are committed to delivering exceptional ICT services that transform challenges into opportunities.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="features__item" style="background: #fff; padding: 30px; border-radius: 10px; height: 100%; box-shadow: 0 4px 15px rgba(0,0,0,0.08);">
                    <div class="features__icon" style="margin-bottom: 20px;">
                        <i class="fas fa-eye" style="font-size: 48px; color: #5751E1;"></i>
                    </div>
                    <div class="features__content">
                        <h4 class="title" style="margin-bottom: 15px; color: #161439;">Our Vision</h4>
                        <p>To be the leading ICT solutions provider in Africa, recognized for our innovation, reliability, and commitment to excellence. We envision a digitally empowered Africa where technology bridges gaps, creates opportunities, and transforms lives.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="features__item" style="background: #fff; padding: 30px; border-radius: 10px; height: 100%; box-shadow: 0 4px 15px rgba(0,0,0,0.08);">
                    <div class="features__icon" style="margin-bottom: 20px;">
                        <i class="fas fa-heart" style="font-size: 48px; color: #5751E1;"></i>
                    </div>
                    <div class="features__content">
                        <h4 class="title" style="margin-bottom: 15px; color: #161439;">Our Values</h4>
                        <ul style="list-style: none; padding: 0; margin: 0;">
                            <li style="margin-bottom: 8px;"><i class="fas fa-check-circle" style="color: #5751E1; margin-right: 8px;"></i>Integrity & Transparency</li>
                            <li style="margin-bottom: 8px;"><i class="fas fa-check-circle" style="color: #5751E1; margin-right: 8px;"></i>Innovation & Excellence</li>
                            <li style="margin-bottom: 8px;"><i class="fas fa-check-circle" style="color: #5751E1; margin-right: 8px;"></i>Customer Focus</li>
                            <li style="margin-bottom: 8px;"><i class="fas fa-check-circle" style="color: #5751E1; margin-right: 8px;"></i>Collaboration & Teamwork</li>
                            <li><i class="fas fa-check-circle" style="color: #5751E1; margin-right: 8px;"></i>Continuous Learning</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- mission-vision-values-end -->

<!-- how-we-work -->
<section class="how-we-work section-py-120">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-lg-8 text-center">
                <div class="section__title">
                    <span class="sub-title">Our Process</span>
                    <h2 class="title tg-svg">How We <span class="position-relative"><span class="svg-icon" id="svg-hww" data-svg-icon="{{ asset('images/theme/icons/title_shape.svg') }}"></span>Work</span></h2>
                    <p>We follow a structured approach to ensure every project delivers exceptional results</p>
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="work-step text-center" style="padding: 30px 20px;">
                    <div class="step-number" style="width: 80px; height: 80px; background: #5751E1; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 20px; color: #fff; font-size: 32px; font-weight: 700;">1</div>
                    <h4 style="margin-bottom: 15px; color: #161439;">Discovery & Consultation</h4>
                    <p>We begin by understanding your business needs, challenges, and objectives through in-depth consultations and analysis.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="work-step text-center" style="padding: 30px 20px;">
                    <div class="step-number" style="width: 80px; height: 80px; background: #5751E1; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 20px; color: #fff; font-size: 32px; font-weight: 700;">2</div>
                    <h4 style="margin-bottom: 15px; color: #161439;">Planning & Strategy</h4>
                    <p>Our experts develop a comprehensive plan and strategy tailored to your specific requirements and budget.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="work-step text-center" style="padding: 30px 20px;">
                    <div class="step-number" style="width: 80px; height: 80px; background: #5751E1; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 20px; color: #fff; font-size: 32px; font-weight: 700;">3</div>
                    <h4 style="margin-bottom: 15px; color: #161439;">Implementation</h4>
                    <p>We execute the plan with precision, using industry best practices and cutting-edge technologies.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="work-step text-center" style="padding: 30px 20px;">
                    <div class="step-number" style="width: 80px; height: 80px; background: #5751E1; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 20px; color: #fff; font-size: 32px; font-weight: 700;">4</div>
                    <h4 style="margin-bottom: 15px; color: #161439;">Support & Optimization</h4>
                    <p>We provide ongoing support, maintenance, and optimization to ensure long-term success and maximum ROI.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- how-we-work-end -->

<!-- fact-area -->
<section class="fact-area section-py-120" style="background-color: #f7f7f7;">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-lg-6 text-center">
                <div class="section__title">
                    <span class="sub-title">Our Impact</span>
                    <h2 class="title tg-svg">Driving <span class="position-relative"><span class="svg-icon" id="svg-skills-about" data-svg-icon="{{ asset('images/theme/icons/title_shape.svg') }}"></span>Digital</span> Transformation Across Africa</h2>
                </div>
            </div>
        </div>
        
        <div class="row justify-content-center">
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="fact__item-two text-center">
                    <div class="fact__icon-two">
                        <img decoding="async" src="{{ asset('images/icons/icon-1.png') }}" alt="Clients Icon">
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
                        <img decoding="async" src="{{ asset('images/icons/icon-4.png') }}" alt="Projects Icon">
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
                        <img decoding="async" src="{{ asset('images/icons/icon-1.png') }}" alt="Professionals Icon">
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
                        <img decoding="async" src="{{ asset('images/icons/icon-4.png') }}" alt="Experience Icon">
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

<!-- cta-area -->
<section class="cta-area-two position-relative">
    <div class="cta__bg" style="background-image:url({{ asset('uploads/2023/07/banner_bg.jpg') }})"></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-8 col-lg-10">
                <div class="cta__content">
                    <p>READY TO TRANSFORM YOUR BUSINESS?</p>
                    <h2 class="title">Let's Build Something Great Together</h2>
                    <h5 class="sub-title">Partner with ICT Africa for Your Digital Success</h5>
                    <div class="tg-button-wrap justify-content-center">
                        <a href="{{ route('contact') }}" class="btn tg-svg"><span class="text">Get Started Today</span> <span class="svg-icon" id="cta-btn-about" data-svg-icon="{{ asset('images/theme/icons/btn-arrow.svg') }}"></span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="cta__shapes">
        <img src="{{ asset('uploads/2023/07/cta_shape001.svg') }}" alt="img" class="position-absolute" data-aos="fade-down-right" data-aos-delay="300">
        <img src="{{ asset('uploads/2023/07/cta_shape002.png') }}" alt="img" class="position-absolute">
        <img src="{{ asset('uploads/2023/07/cta_shape003.svg') }}" alt="img" class="position-absolute" data-aos="fade-up-left" data-aos-delay="300">
    </div>
</section>
<!-- cta-area-end -->
@endsection

@push('scripts')
<script>
jQuery(document).ready(function($) {
    // Odometer counter
    $('.odometer').appear(function() {
        var odo = $(".odometer");
        odo.each(function() {
            var countNumber = $(this).attr("data-count");
            $(this).html(countNumber);
        });
    });
});
</script>
@endpush
