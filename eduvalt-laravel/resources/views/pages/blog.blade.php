@extends('layouts.app')

@section('title', 'Services - ICT Africa')

@section('content')
<!-- breadcrumb-area -->
<section class="breadcrumb-area breadcrumb-bg" data-background="{{ asset('images/theme/bg/breadcrumb_bg.jpg') }}">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-content">
                    <h3 class="title">Our Services</h3>
                    <nav aria-label="breadcrumb" class="breadcrumb">
                        <span><a href="{{ route('home') }}">Home</a></span>
                        <span class="breadcrumb-separator"><i class="fas fa-angle-right"></i></span>
                        <span class="current-item">Services</span>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb-area-end -->

<!-- services-area -->
<section class="blog-standard-area section-py-120">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="blog-item-wrap">
                    
                    <!-- Service 1: ICT Training -->
                    <article class="blog__standard-post format-image">
                        <div class="blog__standard-thumb">
                            <a href="{{ route('service.show', 'ict-training') }}">
                                <img src="{{ asset('uploads/2023/06/ict.jpg') }}" alt="ICT Training">
                            </a>
                        </div>
                        <div class="blog__standard-content">
                            <a href="#" class="cat">Training</a>
                            <h2 class="title"><a href="{{ route('service.show', 'ict-training') }}">ICT Training & Capacity Building</a></h2>
                            <ul class="list-wrap blog__post-meta d-flex flex-wrap align-items-center p-0">
                                <li><i class="flaticon-account"></i><a href="#">ICT Africa</a></li>
                                <li><i class="flaticon-calendar-date"></i> Professional Service</li>
                            </ul>
                            <div class="post-text">
                                <p>We offer comprehensive ICT training programs designed to empower organizations and individuals with essential digital skills. Our certified instructors deliver hands-on training in software applications, network administration, and emerging technologies.</p>
                            </div>
                            <div class="tg-button-wrap">
                                <a href="{{ route('service.show', 'ict-training') }}" class="btn tg-svg"><span class="text">Continue Reading</span> <span class="svg-icon" id="blog-btn-1" data-svg-icon="{{ asset('images/theme/icons/btn-arrow.svg') }}"></span></a>
                            </div>
                        </div>
                    </article>
                    
                    <!-- Service 2: Software Development -->
                    <article class="blog__standard-post format-image">
                        <div class="blog__standard-thumb">
                            <a href="{{ route('service.show', 'software-development') }}">
                                <img src="{{ asset('uploads/2023/06/software development.jpg') }}" alt="Software Development">
                            </a>
                        </div>
                        <div class="blog__standard-content">
                            <a href="#" class="cat">Development</a>
                            <h2 class="title"><a href="{{ route('service.show', 'software-development') }}">Software Development & Custom Solutions</a></h2>
                            <ul class="list-wrap blog__post-meta d-flex flex-wrap align-items-center p-0">
                                <li><i class="flaticon-account"></i><a href="#">ICT Africa</a></li>
                                <li><i class="flaticon-calendar-date"></i> Professional Service</li>
                            </ul>
                            <div class="post-text">
                                <p>Transform your business with our custom software development services. We build scalable web applications, mobile apps, enterprise systems, and API integrations tailored to your specific business requirements.</p>
                            </div>
                            <div class="tg-button-wrap">
                                <a href="{{ route('service.show', 'software-development') }}" class="btn tg-svg"><span class="text">Continue Reading</span> <span class="svg-icon" id="blog-btn-2" data-svg-icon="{{ asset('images/theme/icons/btn-arrow.svg') }}"></span></a>
                            </div>
                        </div>
                    </article>
                    
                    <!-- Service 3: IT Infrastructure -->
                    <article class="blog__standard-post format-image">
                        <div class="blog__standard-thumb">
                            <a href="{{ route('service.show', 'it-infrastructure') }}">
                                <img src="{{ asset('uploads/2023/06/IT training.jpg') }}" alt="IT Infrastructure">
                            </a>
                        </div>
                        <div class="blog__standard-content">
                            <a href="#" class="cat">Infrastructure</a>
                            <h2 class="title"><a href="{{ route('service.show', 'it-infrastructure') }}">IT Infrastructure Solutions</a></h2>
                            <ul class="list-wrap blog__post-meta d-flex flex-wrap align-items-center p-0">
                                <li><i class="flaticon-account"></i><a href="#">ICT Africa</a></li>
                                <li><i class="flaticon-calendar-date"></i> Professional Service</li>
                            </ul>
                            <div class="post-text">
                                <p>Build a robust IT foundation with our infrastructure services. We provide network design and implementation, server setup, cloud migration, system integration, and 24/7 technical support for seamless operations.</p>
                            </div>
                            <div class="tg-button-wrap">
                                <a href="{{ route('service.show', 'it-infrastructure') }}" class="btn tg-svg"><span class="text">Continue Reading</span> <span class="svg-icon" id="blog-btn-3" data-svg-icon="{{ asset('images/theme/icons/btn-arrow.svg') }}"></span></a>
                            </div>
                        </div>
                    </article>
                    
                    <!-- Service 4: Cyber Security -->
                    <article class="blog__standard-post format-image">
                        <div class="blog__standard-thumb">
                            <a href="{{ route('service.show', 'cyber-security') }}">
                                <img src="{{ asset('uploads/2023/06/cyber.jpg') }}" alt="Cyber Security">
                            </a>
                        </div>
                        <div class="blog__standard-content">
                            <a href="#" class="cat">Security</a>
                            <h2 class="title"><a href="{{ route('service.show', 'cyber-security') }}">Cyber Security Services</a></h2>
                            <ul class="list-wrap blog__post-meta d-flex flex-wrap align-items-center p-0">
                                <li><i class="flaticon-account"></i><a href="#">ICT Africa</a></li>
                                <li><i class="flaticon-calendar-date"></i> Professional Service</li>
                            </ul>
                            <div class="post-text">
                                <p>Protect your digital assets with our comprehensive cyber security solutions. We offer vulnerability assessments, penetration testing, security audits, incident response, and compliance consulting.</p>
                            </div>
                            <div class="tg-button-wrap">
                                <a href="{{ route('service.show', 'cyber-security') }}" class="btn tg-svg"><span class="text">Continue Reading</span> <span class="svg-icon" id="blog-btn-4" data-svg-icon="{{ asset('images/theme/icons/btn-arrow.svg') }}"></span></a>
                            </div>
                        </div>
                    </article>
                    
                    <!-- Service 5: IT Consultancy -->
                    <article class="blog__standard-post format-image">
                        <div class="blog__standard-thumb">
                            <a href="{{ route('service.show', 'it-consultancy') }}">
                                <img src="{{ asset('uploads/2023/06/consultation.jpg') }}" alt="IT Consultancy">
                            </a>
                        </div>
                        <div class="blog__standard-content">
                            <a href="#" class="cat">Consultancy</a>
                            <h2 class="title"><a href="{{ route('service.show', 'it-consultancy') }}">IT Consultancy & Advisory</a></h2>
                            <ul class="list-wrap blog__post-meta d-flex flex-wrap align-items-center p-0">
                                <li><i class="flaticon-account"></i><a href="#">ICT Africa</a></li>
                                <li><i class="flaticon-calendar-date"></i> Professional Service</li>
                            </ul>
                            <div class="post-text">
                                <p>Leverage our expertise to optimize your IT strategy. We provide technology roadmaps, digital transformation guidance, IT governance, project management, and strategic planning services.</p>
                            </div>
                            <div class="tg-button-wrap">
                                <a href="{{ route('service.show', 'it-consultancy') }}" class="btn tg-svg"><span class="text">Continue Reading</span> <span class="svg-icon" id="blog-btn-5" data-svg-icon="{{ asset('images/theme/icons/btn-arrow.svg') }}"></span></a>
                            </div>
                        </div>
                    </article>
                    
                    <!-- Service 6: Data Management -->
                    <article class="blog__standard-post format-image">
                        <div class="blog__standard-thumb">
                            <a href="{{ route('service.show', 'data-management') }}">
                                <img src="{{ asset('uploads/2023/06/data analysis.jpg') }}" alt="Data Management">
                            </a>
                        </div>
                        <div class="blog__standard-content">
                            <a href="#" class="cat">Data</a>
                            <h2 class="title"><a href="{{ route('service.show', 'data-management') }}">Data Management & Analytics</a></h2>
                            <ul class="list-wrap blog__post-meta d-flex flex-wrap align-items-center p-0">
                                <li><i class="flaticon-account"></i><a href="#">ICT Africa</a></li>
                                <li><i class="flaticon-calendar-date"></i> Professional Service</li>
                            </ul>
                            <div class="post-text">
                                <p>Unlock the power of your data with our management and analytics solutions. We offer database design, data warehousing, business intelligence, reporting dashboards, and data-driven insights.</p>
                            </div>
                            <div class="tg-button-wrap">
                                <a href="{{ route('service.show', 'data-management') }}" class="btn tg-svg"><span class="text">Continue Reading</span> <span class="svg-icon" id="blog-btn-6" data-svg-icon="{{ asset('images/theme/icons/btn-arrow.svg') }}"></span></a>
                            </div>
                        </div>
                    </article>
                    
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
                            <li class="cat-item"><a href="{{ route('service.show', 'ict-training') }}">ICT Training</a></li>
                            <li class="cat-item"><a href="{{ route('service.show', 'software-development') }}">Software Development</a></li>
                            <li class="cat-item"><a href="{{ route('service.show', 'it-infrastructure') }}">IT Infrastructure</a></li>
                            <li class="cat-item"><a href="{{ route('service.show', 'cyber-security') }}">Cyber Security</a></li>
                            <li class="cat-item"><a href="{{ route('service.show', 'it-consultancy') }}">IT Consultancy</a></li>
                            <li class="cat-item"><a href="{{ route('service.show', 'data-management') }}">Data Management</a></li>
                        </ul>
                    </div>
                    
                    <!-- Recent Services Widget -->
                    <div class="blog-widget widget">
                        <h3 class="widget-title">Featured Solutions</h3>
                        <div class="sidebar-rc-post">
                            <div class="rc-post-item">
                                <div class="rc-post-thumb">
                                    <a href="{{ route('service.show', 'ict-training') }}"><img src="{{ asset('uploads/2023/06/blog_standard01-150x150.jpg') }}" alt="Training"></a>
                                </div>
                                <div class="rc-post-content">
                                    <h4 class="title"><a href="{{ route('service.show', 'ict-training') }}">Corporate ICT Training Programs</a></h4>
                                    <span class="date"><i class="flaticon-calendar-date"></i>Available Now</span>
                                </div>
                            </div>
                            <div class="rc-post-item">
                                <div class="rc-post-thumb">
                                    <a href="{{ route('service.show', 'software-development') }}"><img src="{{ asset('uploads/2023/06/blog_standard02-150x150.jpg') }}" alt="Development"></a>
                                </div>
                                <div class="rc-post-content">
                                    <h4 class="title"><a href="{{ route('service.show', 'software-development') }}">Custom Web & Mobile Apps</a></h4>
                                    <span class="date"><i class="flaticon-calendar-date"></i>Available Now</span>
                                </div>
                            </div>
                            <div class="rc-post-item">
                                <div class="rc-post-thumb">
                                    <a href="{{ route('service.show', 'it-infrastructure') }}"><img src="{{ asset('uploads/2023/06/blog_standard03-150x150.jpg') }}" alt="Infrastructure"></a>
                                </div>
                                <div class="rc-post-content">
                                    <h4 class="title"><a href="{{ route('service.show', 'it-infrastructure') }}">Cloud Migration Services</a></h4>
                                    <span class="date"><i class="flaticon-calendar-date"></i>Available Now</span>
                                </div>
                            </div>
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
<!-- services-area-end -->
@endsection
