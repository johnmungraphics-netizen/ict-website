<!-- header-area -->
<div id="header-fixed-height" class=""></div>
<header class="tg-header__style-three">
    <div class="tg-header__top">
        <div class="container custom-container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <ul class="tg-header__top-info list-wrap">
                        <li><img src="{{ asset('images/location.webp') }}" alt="Location" style="width: 16px; height: 16px; margin-right: 5px;">
                            <span>The Odyssey Building, 84 Muthithi Road, Westlands, Nairobi</span>
                        </li>
                        <li><img src="{{ asset('images/email.png') }}" alt="Email" style="width: 16px; height: 16px; margin-right: 5px;">
                            <a href="mailto:info@gmail.com">info@ict-a.com</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <ul class="tg-header__top-social list-wrap">
                        <li>Your Trusted ICT Solutions Partner</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div id="sticky-header" class="tg-header__area">
        <div class="container custom-container">
            <div class="row">
                <div class="col-12">
                    <div class="tgmenu__wrap">
                        <nav class="tgmenu__nav">
                            <div class="logo">
                                <a class="main-logo" href="{{ route('home') }}">
                                    <img src="{{ asset('images/theme/logo/logo.png') }}" style="max-width: 150px" alt="Logo" />
                                </a>
                            </div>

                            <div class="tgmenu__categories d-none d-lg-block">
                                <div class="dropdown">
                                    <button class="dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                        <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M12 12H6.85714V6.85714H12V12ZM5.14286 12H0V6.85714H5.14286V12ZM12 5.14286H6.85714V0H12V5.14286ZM5.14286 5.14286H0V0H5.14286V5.14286Z" fill="currentcolor" />
                                        </svg>
                                        Categories
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item"><a href="{{ route('service.show', 'ict-audits') }}" class="nav-links">ICT Audits</a></li>
                                        <li class="nav-item"><a href="{{ route('service.show', 'outsourced-ict-support') }}" class="nav-links">ICT Support</a></li>
                                        <li class="nav-item"><a href="{{ route('service.show', 'network-infrastructure') }}" class="nav-links">Network</a></li>
                                        <li class="nav-item"><a href="{{ route('service.show', 'cloud-services') }}" class="nav-links">Cloud Services</a></li>
                                        <li class="nav-item"><a href="{{ route('service.show', 'datacenter-solutions') }}" class="nav-links">Datacenter</a></li>
                                        <li class="nav-item"><a href="{{ route('service.show', 'security-systems') }}" class="nav-links">Security</a></li>
                                        <li class="nav-item"><a href="{{ route('service.show', 'bulk-sms') }}" class="nav-links">Bulk SMS</a></li>
                                        <li class="nav-item"><a href="{{ route('service.show', 'software-solutions') }}" class="nav-links">Software</a></li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Mobile & Desktop Navigation - Always Visible -->
                            <div class="tgmenu__navbar-wrap tgmenu__main-menu">
                                <ul class="navigation">
                                    <li class="menu-item {{ request()->routeIs('home') ? 'active' : '' }}">
                                        <a href="{{ route('home') }}" class="nav-links">Home</a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="{{ route('home') }}#about" class="nav-links">About</a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="{{ route('home') }}#services" class="nav-links">Services</a>
                                    </li>
                                    <li class="menu-item d-lg-none">
                                        <a href="{{ route('home') }}#contact" class="nav-links">Contact</a>
                                    </li>
                                </ul>
                            </div>

                            <div class="tgmenu__search-bar d-none d-lg-block">
                                <div class="service-search-wrapper">
                                    <input type="text" id="serviceSearchInput" class="service-search-input" placeholder="Search Services" autocomplete="off">
                                    <i class="fas fa-search search-icon"></i>
                                    <ul class="service-search-dropdown" id="serviceSearchDropdown">
                                        <li class="service-item" data-name="ICT Audits & IT Lifecycle Management">
                                            <a href="{{ route('service.show', 'ict-audits') }}">ICT Audits & IT Lifecycle Management</a>
                                        </li>
                                        <li class="service-item" data-name="Outsourced ICT User Support">
                                            <a href="{{ route('service.show', 'outsourced-ict-support') }}">Outsourced ICT User Support</a>
                                        </li>
                                        <li class="service-item" data-name="Network Infrastructure">
                                            <a href="{{ route('service.show', 'network-infrastructure') }}">Network Infrastructure</a>
                                        </li>
                                        <li class="service-item" data-name="Cloud Services">
                                            <a href="{{ route('service.show', 'cloud-services') }}">Cloud Services</a>
                                        </li>
                                        <li class="service-item" data-name="Datacenter Solutions">
                                            <a href="{{ route('service.show', 'datacenter-solutions') }}">Datacenter Solutions</a>
                                        </li>
                                        <li class="service-item" data-name="Security Systems">
                                            <a href="{{ route('service.show', 'security-systems') }}">Security Systems</a>
                                        </li>
                                        <li class="service-item" data-name="Bulk SMS & ERP Integration">
                                            <a href="{{ route('service.show', 'bulk-sms') }}">Bulk SMS &amp; ERP Integration</a>
                                        </li>
                                        <li class="service-item" data-name="Software Solutions">
                                            <a href="{{ route('service.show', 'software-solutions') }}">Software Solutions</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="tgmenu__action d-none d-lg-block">
                                <ul class="list-wrap">
                                    <li class="header-btn">
                                        <a href="{{ route('home') }}#contact" class="btn">Contact Us</a>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- header-area-end -->
