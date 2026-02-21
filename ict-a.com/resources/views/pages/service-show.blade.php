@extends('layouts.app')

@section('title', $service['title'] . ' - ICT Africa')

@push('styles')
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

/* Mobile Navigation Styling - Always visible and responsive */
@media (max-width: 1199.98px) {
    /* Make navigation visible on all screens */
    .tgmenu__navbar-wrap.tgmenu__main-menu {
        display: flex !important;
        flex: 1;
        justify-content: center;
        margin: 0 10px;
    }
    
    .tgmenu__navbar-wrap .navigation {
        display: flex !important;
        flex-direction: row;
        gap: 5px;
        margin: 0;
        padding: 0;
        list-style: none;
    }
    
    .tgmenu__navbar-wrap .navigation .menu-item {
        margin: 0 !important;
    }
    
    .tgmenu__navbar-wrap .navigation .menu-item .nav-links {
        font-size: 13px !important;
        padding: 8px 12px !important;
        white-space: nowrap;
        display: block;
        color: #333;
        font-weight: 500;
        transition: all 0.3s ease;
    }
    
    .tgmenu__navbar-wrap .navigation .menu-item .nav-links:hover,
    .tgmenu__navbar-wrap .navigation .menu-item.active .nav-links {
        color: #2467ec !important;
    }
    
    /* Adjust logo size on mobile */
    .logo .main-logo img {
        max-width: 100px !important;
    }
    
    /* Compact header on mobile */
    .tgmenu__nav {
        display: flex !important;
        align-items: center !important;
        justify-content: space-between !important;
        flex-wrap: nowrap !important;
        gap: 8px !important;
    }
}

@media (max-width: 767.98px) {
    /* Even more compact on small mobile */
    .tgmenu__navbar-wrap .navigation {
        gap: 2px;
    }
    
    .tgmenu__navbar-wrap .navigation .menu-item .nav-links {
        font-size: 11px !important;
        padding: 6px 8px !important;
    }
    
    .logo .main-logo img {
        max-width: 80px !important;
    }
    
    /* Hide top info bar on very small screens */
    .tg-header__top {
        display: none !important;
    }
}

@media (max-width: 575.98px) {
    .tgmenu__navbar-wrap .navigation .menu-item .nav-links {
        font-size: 10px !important;
        padding: 5px 6px !important;
    }
    
    .logo .main-logo img {
        max-width: 70px !important;
    }
}
</style>
@endpush

@section('content')
<!-- breadcrumb-area -->
<section class="breadcrumb-area breadcrumb-bg details-breadcrumb" data-background="{{ asset('images/theme/bg/breadcrumb_bg.jpg') }}">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-content">
                    <h3 class="title">{{ $service['title'] }}</h3>
                    <nav aria-label="breadcrumb" class="breadcrumb">
                        <span><a href="{{ route('home') }}">Home</a></span>
                        <span class="breadcrumb-separator"> / </span>
                        <span><a href="{{ route('blog') }}">Services</a></span>
                        <span class="breadcrumb-separator"> / </span>
                        <span><a href="#">{{ $service['category'] }}</a></span>
                        <span class="breadcrumb-separator"> / </span>
                        <span class="current-item">{{ $service['title'] }}</span>
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
                            <img src="{{ asset($service['image']) }}" class="img-responsive wp-post-image" alt="{{ $service['title'] }}" loading="lazy">
                        </div>
                        
                        <div class="blog__standard-content blog-details-content">
                            <!-- blog meta -->
                            <ul class="list-wrap blog__post-meta d-flex flex-wrap align-items-center p-0">
                                <li><a href="#">ICT Africa</a></li>
                                <li>Professional Service</li>
                                <li><a href="#respond">Contact Us</a></li>
                            </ul>
                            
                            <div class="post-text">
                                <p>{{ $service['description'] }}</p>
                                
                                <blockquote>
                                    <p>"{{ $service['quote'] }}"</p>
                                </blockquote>
                                
                                <h4 class="inner-title">What We Offer</h4>
                                <p>{{ $service['offer_intro'] }}</p>
                                
                                <div class="event-details-list">
                                    <ul class="list-wrap">
                                        @foreach($service['features'] as $feature)
                                        <li>{{ $feature }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                                
                                <p>{{ $service['conclusion'] }}</p>
                            </div>
                            
                            <div class="blog-details-bottom">
                                <div class="row">
                                    <div class="col-md-7">
                                        <div class="tg-post-tag">
                                            <h5 class="tag-title">Tags :</h5>
                                            <ul class="list-wrap p-0 mb-0">
                                                @foreach($service['tags'] as $tag)
                                                <li><a href="#" rel="tag">{{ $tag }}</a></li>
                                                @endforeach
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
                                            <a href="mailto:info@ict-a.com?subject=Inquiry about {{ urlencode($service['title']) }}" class="btn" style="background: #2467ec; color: white; padding: 12px 24px; border-radius: 5px; text-decoration: none; display: inline-block;">Send Email</a>
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
                            <form action="{{ route('blog') }}" method="get">
                                <input type="text" value="{{ request('s') }}" name="s" placeholder="Search services...">
                                <button type="submit"><i class="flaticon-magnifying-glass"></i></button>
                            </form>
                        </div>
                    </div>
                    
                    <!-- Services Categories Widget -->
                    <div class="blog-widget widget widget_categories">
                        <h3 class="widget-title">Our Services</h3>
                        <ul>
                            @foreach($allServices as $s)
                            <li class="cat-item {{ $s['slug'] == $service['slug'] ? 'active' : '' }}">
                                <a href="{{ route('service.show', $s['slug']) }}">{{ $s['title'] }}</a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    
                    <!-- Featured Services Widget -->
                    <div class="blog-widget widget">
                        <h3 class="widget-title">Featured Solutions</h3>
                        <div class="sidebar-rc-post">
                            @foreach(array_slice($allServices, 0, 3) as $featured)
                            <div class="rc-post-item">
                                <div class="rc-post-thumb">
                                    <a href="{{ route('service.show', $featured['slug']) }}">
                                        <img src="{{ asset($featured['thumb']) }}" alt="{{ $featured['title'] }}" loading="lazy">
                                    </a>
                                </div>
                                <div class="rc-post-content">
                                    <h4 class="title"><a href="{{ route('service.show', $featured['slug']) }}">{{ Str::limit($featured['title'], 30) }}</a></h4>
                                    <span class="date"><i class="flaticon-calendar-date"></i>Available Now</span>
                                </div>
                            </div>
                            @endforeach
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
@endsection
