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
                    
                    <!-- Service 1: ICT audits and IT lifecycle management -->
                    <article class="blog__standard-post format-image">
                        <div class="blog__standard-thumb">
                            <a href="{{ route('service.show', 'ict-audits') }}">
                                <img src="{{ asset('uploads/2023/06/ict.jpg') }}" alt="ICT audits and IT lifecycle management">
                            </a>
                        </div>
                        <div class="blog__standard-content">
                            <a href="#" class="cat">IT Audit</a>
                            <h2 class="title"><a href="{{ route('service.show', 'ict-audits') }}">ICT audits and IT lifecycle management</a></h2>
                            <ul class="list-wrap blog__post-meta d-flex flex-wrap align-items-center p-0">
                                <li><i class="flaticon-account"></i><a href="#">ICT Africa</a></li>
                                <li><i class="flaticon-calendar-date"></i> Professional Service</li>
                            </ul>
                            <div class="post-text">
                                <p>We provide IT audit services for businesses benchmarking their existing IT investments against the industry best practice. Our approach seeks to enable organizations maximize efficiency in protecting investments made in infrastructure, applications and licensing.</p>
                            </div>
                            <div class="tg-button-wrap">
                                <a href="{{ route('service.show', 'ict-audits') }}" class="btn tg-svg"><span class="text">Continue Reading</span> <span class="svg-icon" id="blog-btn-1" data-svg-icon="{{ asset('images/theme/icons/btn-arrow.svg') }}"></span></a>
                            </div>
                        </div>
                    </article>
                    
                    <!-- Service 2: Outsourced ICT user support -->
                    <article class="blog__standard-post format-image">
                        <div class="blog__standard-thumb">
                            <a href="{{ route('service.show', 'outsourced-ict-support') }}">
                                <img src="{{ asset('uploads/2023/06/IT training.jpg') }}" alt="Outsourced ICT user support">
                            </a>
                        </div>
                        <div class="blog__standard-content">
                            <a href="#" class="cat">Support</a>
                            <h2 class="title"><a href="{{ route('service.show', 'outsourced-ict-support') }}">Outsourced ICT user support</a></h2>
                            <ul class="list-wrap blog__post-meta d-flex flex-wrap align-items-center p-0">
                                <li><i class="flaticon-account"></i><a href="#">ICT Africa</a></li>
                                <li><i class="flaticon-calendar-date"></i> Professional Service</li>
                            </ul>
                            <div class="post-text">
                                <p>ICT Africa offers outsourcing services based on the ITIL (Information Technology Infrastructure Library) framework of best practices. We offer flexible first and second lines of IT helpdesk response whether on-premise or remotely.</p>
                            </div>
                            <div class="tg-button-wrap">
                                <a href="{{ route('service.show', 'outsourced-ict-support') }}" class="btn tg-svg"><span class="text">Continue Reading</span> <span class="svg-icon" id="blog-btn-2" data-svg-icon="{{ asset('images/theme/icons/btn-arrow.svg') }}"></span></a>
                            </div>
                        </div>
                    </article>
                    
                    <!-- Service 3: Network Infrastructure -->
                    <article class="blog__standard-post format-image">
                        <div class="blog__standard-thumb">
                            <a href="{{ route('service.show', 'network-infrastructure') }}">
                                <img src="{{ asset('uploads/2023/06/IT training.jpg') }}" alt="Network Infrastructure">
                            </a>
                        </div>
                        <div class="blog__standard-content">
                            <a href="#" class="cat">Infrastructure</a>
                            <h2 class="title"><a href="{{ route('service.show', 'network-infrastructure') }}">Network Infrastructure</a></h2>
                            <ul class="list-wrap blog__post-meta d-flex flex-wrap align-items-center p-0">
                                <li><i class="flaticon-account"></i><a href="#">ICT Africa</a></li>
                                <li><i class="flaticon-calendar-date"></i> Professional Service</li>
                            </ul>
                            <div class="post-text">
                                <p>ICT Africa designs and implements complete networking solutions on structured cabling and corporate wireless systems which provides a comprehensive telecommunication infrastructure. This infrastructure serves a wide range of uses including telephony system with IPBX service, LAN infrastructure, video surveillance system, system of access control, security systems and many more.</p>
                            </div>
                            <div class="tg-button-wrap">
                                <a href="{{ route('service.show', 'network-infrastructure') }}" class="btn tg-svg"><span class="text">Continue Reading</span> <span class="svg-icon" id="blog-btn-3" data-svg-icon="{{ asset('images/theme/icons/btn-arrow.svg') }}"></span></a>
                            </div>
                        </div>
                    </article>
                    
                    <!-- Service 4: SECURITY SYSTEMS -->
                    <article class="blog__standard-post format-image">
                        <div class="blog__standard-thumb">
                            <a href="{{ route('service.show', 'security-systems') }}">
                                <img src="{{ asset('uploads/2023/06/cyber.jpg') }}" alt="SECURITY SYSTEMS">
                            </a>
                        </div>
                        <div class="blog__standard-content">
                            <a href="#" class="cat">Security</a>
                            <h2 class="title"><a href="{{ route('service.show', 'security-systems') }}">SECURITY SYSTEMS</a></h2>
                            <ul class="list-wrap blog__post-meta d-flex flex-wrap align-items-center p-0">
                                <li><i class="flaticon-account"></i><a href="#">ICT Africa</a></li>
                                <li><i class="flaticon-calendar-date"></i> Professional Service</li>
                            </ul>
                            <div class="post-text">
                                <p>Big Brother service, Covid-19 safety checks, PPE Hakikisha, Resource optimization, Critical Assets KPI's, CCTV Audits, Crime prevention and investigation with live feed and stored footage.</p>
                            </div>
                            <div class="tg-button-wrap">
                                <a href="{{ route('service.show', 'security-systems') }}" class="btn tg-svg"><span class="text">Continue Reading</span> <span class="svg-icon" id="blog-btn-4" data-svg-icon="{{ asset('images/theme/icons/btn-arrow.svg') }}"></span></a>
                            </div>
                        </div>
                    </article>
                    
                    <!-- Service 5: Cloud services for email, collaboration and file sharing -->
                    <article class="blog__standard-post format-image">
                        <div class="blog__standard-thumb">
                            <a href="{{ route('service.show', 'cloud-services') }}">
                                <img src="{{ asset('uploads/2023/06/software development.jpg') }}" alt="Cloud services">
                            </a>
                        </div>
                        <div class="blog__standard-content">
                            <a href="#" class="cat">Cloud</a>
                            <h2 class="title"><a href="{{ route('service.show', 'cloud-services') }}">Cloud services for email, collaboration and file sharing</a></h2>
                            <ul class="list-wrap blog__post-meta d-flex flex-wrap align-items-center p-0">
                                <li><i class="flaticon-account"></i><a href="#">ICT Africa</a></li>
                                <li><i class="flaticon-calendar-date"></i> Professional Service</li>
                            </ul>
                            <div class="post-text">
                                <p>We specialize in mobilizing cloud services for email & collaboration, application deployment, backup services and artificial intelligence across major cloud providers. This is a form of software that is offered as a service (SaaS) where the user gives up control to a third party to manage data offsite.</p>
                            </div>
                            <div class="tg-button-wrap">
                                <a href="{{ route('service.show', 'cloud-services') }}" class="btn tg-svg"><span class="text">Continue Reading</span> <span class="svg-icon" id="blog-btn-5" data-svg-icon="{{ asset('images/theme/icons/btn-arrow.svg') }}"></span></a>
                            </div>
                        </div>
                    </article>
                    
                    <!-- Service 6: Datacenter solutions -->
                    <article class="blog__standard-post format-image">
                        <div class="blog__standard-thumb">
                            <a href="{{ route('service.show', 'datacenter-solutions') }}">
                                <img src="{{ asset('uploads/2023/06/IT training.jpg') }}" alt="Datacenter solutions">
                            </a>
                        </div>
                        <div class="blog__standard-content">
                            <a href="#" class="cat">Datacenter</a>
                            <h2 class="title"><a href="{{ route('service.show', 'datacenter-solutions') }}">Datacenter solutions</a></h2>
                            <ul class="list-wrap blog__post-meta d-flex flex-wrap align-items-center p-0">
                                <li><i class="flaticon-account"></i><a href="#">ICT Africa</a></li>
                                <li><i class="flaticon-calendar-date"></i> Professional Service</li>
                            </ul>
                            <div class="post-text">
                                <p>We provide mission critical support for key installations in the organization covering virtualization, security and firewalls and enterprise backup. We partner with the leading vendors in this space example Microsoft, VMware, Cisco, Fortinet, Veeam, TrendMicro among others.</p>
                            </div>
                            <div class="tg-button-wrap">
                                <a href="{{ route('service.show', 'datacenter-solutions') }}" class="btn tg-svg"><span class="text">Continue Reading</span> <span class="svg-icon" id="blog-btn-6" data-svg-icon="{{ asset('images/theme/icons/btn-arrow.svg') }}"></span></a>
                            </div>
                        </div>
                    </article>
                    
                    <!-- Service 7: Bulk SMS and Integration to ERP -->
                    <article class="blog__standard-post format-image">
                        <div class="blog__standard-thumb">
                            <a href="{{ route('service.show', 'bulk-sms') }}">
                                <img src="{{ asset('uploads/2023/06/software development.jpg') }}" alt="Bulk SMS and Integration to ERP">
                            </a>
                        </div>
                        <div class="blog__standard-content">
                            <a href="#" class="cat">Messaging</a>
                            <h2 class="title"><a href="{{ route('service.show', 'bulk-sms') }}">Bulk SMS and Integration to ERP</a></h2>
                            <ul class="list-wrap blog__post-meta d-flex flex-wrap align-items-center p-0">
                                <li><i class="flaticon-account"></i><a href="#">ICT Africa</a></li>
                                <li><i class="flaticon-calendar-date"></i> Professional Service</li>
                            </ul>
                            <div class="post-text">
                                <p>Automated Messaging refers to a system that delivers a recorded voice message or text message to multiple phones automatically. This type of system eliminates the waste time manually calling or texting multiple phone numbers one at a time. Deliver timely notifications about pending appointments, arrivals, and more to keep your customers engaged.</p>
                            </div>
                            <div class="tg-button-wrap">
                                <a href="{{ route('service.show', 'bulk-sms') }}" class="btn tg-svg"><span class="text">Continue Reading</span> <span class="svg-icon" id="blog-btn-7" data-svg-icon="{{ asset('images/theme/icons/btn-arrow.svg') }}"></span></a>
                            </div>
                        </div>
                    </article>
                    
                    <!-- Service 8: Software solutions -->
                    <article class="blog__standard-post format-image">
                        <div class="blog__standard-thumb">
                            <a href="{{ route('service.show', 'software-solutions') }}">
                                <img src="{{ asset('uploads/2023/06/software development.jpg') }}" alt="Software solutions">
                            </a>
                        </div>
                        <div class="blog__standard-content">
                            <a href="#" class="cat">Software</a>
                            <h2 class="title"><a href="{{ route('service.show', 'software-solutions') }}">Software solutions</a></h2>
                            <ul class="list-wrap blog__post-meta d-flex flex-wrap align-items-center p-0">
                                <li><i class="flaticon-account"></i><a href="#">ICT Africa</a></li>
                                <li><i class="flaticon-calendar-date"></i> Professional Service</li>
                            </ul>
                            <div class="post-text">
                                <p>Mgeni VMS (visitor management system), Orodha (fully automated checklist solution), Easy Sign (innovative employee time attendance system), Workflow (create automated system flows for processes ensuring integrity, approval and efficiency).</p>
                            </div>
                            <div class="tg-button-wrap">
                                <a href="{{ route('service.show', 'software-solutions') }}" class="btn tg-svg"><span class="text">Continue Reading</span> <span class="svg-icon" id="blog-btn-8" data-svg-icon="{{ asset('images/theme/icons/btn-arrow.svg') }}"></span></a>
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
