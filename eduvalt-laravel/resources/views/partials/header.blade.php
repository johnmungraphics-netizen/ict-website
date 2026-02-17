<!-- header-area -->
<div id="header-fixed-height" class=""></div>
<header class="tg-header__style-three">
    <div class="tg-header__top">
        <div class="container custom-container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <ul class="tg-header__top-info list-wrap">
                        <li><i class="flaticon-pin"></i>
                            <span>463 7th Ave, NY 10018, USA</span>
                        </li>
                        <li><i class="flaticon-email"></i>
                            <a href="mailto:info@gmail.com">info@gmail.com</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <ul class="tg-header__top-social list-wrap">
                        <li>Follow Us On :</li>
                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-whatsapp"></i></a></li>
                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                        <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div id="sticky-header" class="tg-header__area">
        <div class="container custom-container">
            <div class="row">
                <div class="col-12">
                    <div class="mobile-nav-toggler"><i class="tg-flaticon-menu-1"></i></div>
                    <div class="tgmenu__wrap">
                        <nav class="tgmenu__nav">
                            <div class="logo">
                                <a class="main-logo" href="{{ route('home') }}">
                                    <img src="{{ asset('images/theme/logo/logo.png') }}" style="max-width: 150px" alt="Logo" />
                                </a>
                            </div>

                            <div class="tgmenu__categories d-none d-md-block">
                                <div class="dropdown">
                                    <button class="dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                        <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M12 12H6.85714V6.85714H12V12ZM5.14286 12H0V6.85714H5.14286V12ZM12 5.14286H6.85714V0H12V5.14286ZM5.14286 5.14286H0V0H5.14286V5.14286Z" fill="currentcolor" />
                                        </svg>
                                        Categories
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item"><a href="{{ route('courses') }}" class="nav-links">Business</a></li>
                                        <li class="nav-item"><a href="{{ route('courses') }}" class="nav-links">Design</a></li>
                                        <li class="nav-item"><a href="{{ route('courses') }}" class="nav-links">Development</a></li>
                                        <li class="nav-item"><a href="{{ route('courses') }}" class="nav-links">JavaScript</a></li>
                                        <li class="nav-item"><a href="{{ route('courses') }}" class="nav-links">Heath &amp; Fitness</a></li>
                                        <li class="nav-item"><a href="{{ route('courses') }}" class="nav-links">Marketing</a></li>
                                        <li class="nav-item"><a href="{{ route('courses') }}" class="nav-links">Photography</a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="tgmenu__navbar-wrap tgmenu__main-menu d-none d-xl-flex menu-position-left">
                                <ul class="navigation">
                                    <li class="menu-item {{ request()->routeIs('home') ? 'active' : '' }}">
                                        <a href="{{ route('home') }}" class="nav-links">Home</a>
                                    </li>
                                    <li class="menu-item has-dropdown {{ request()->routeIs('courses*') ? 'active' : '' }}">
                                        <a href="{{ route('courses') }}" class="nav-links">Courses</a>
                                        <ul class="sub-menu">
                                            <li><a href="{{ route('courses') }}" class="dropdown-items">All Courses</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item has-dropdown {{ request()->routeIs('about') || request()->routeIs('contact') ? 'active' : '' }}">
                                        <a href="#" class="nav-links">Pages</a>
                                        <ul class="sub-menu">
                                            <li><a href="{{ route('about') }}" class="dropdown-items">About Us</a></li>
                                            <li><a href="{{ route('contact') }}" class="dropdown-items">Contact</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item {{ request()->routeIs('blog*') ? 'active' : '' }}">
                                        <a href="{{ route('blog') }}" class="nav-links">Services</a>
                                    </li>
                                </ul>
                            </div>

                            <div class="tgmenu__search-bar">
                                <form action="{{ route('courses') }}" method="get">
                                    <input type="text" value="" name="s" class="search-course-input" placeholder="Search For Course . . ." />
                                    <button type="submit"><i class="flaticon-searching"></i></button>
                                </form>
                            </div>

                            <div class="tgmenu__action">
                                <ul class="list-wrap">
                                    <li class="mini-cart-icon">
                                        <a href="#" class="cart-count">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M18 6C18 4.4087 17.3679 2.88258 16.2426 1.75736C15.1174 0.632141 13.5913 0 12 0C10.4087 0 8.88258 0.632141 7.75736 1.75736C6.63214 2.88258 6 4.4087 6 6H0V21C0 21.7956 0.31607 22.5587 0.87868 23.1213C1.44129 23.6839 2.20435 24 3 24H21C21.7956 24 22.5587 23.6839 23.1213 23.1213C23.6839 22.5587 24 21.7956 24 21V6H18ZM12 2C13.0609 2 14.0783 2.42143 14.8284 3.17157C15.5786 3.92172 16 4.93913 16 6H8C8 4.93913 8.42143 3.92172 9.17157 3.17157C9.92172 2.42143 10.9391 2 12 2ZM22 21C22 21.2652 21.8946 21.5196 21.7071 21.7071C21.5196 21.8946 21.2652 22 21 22H3C2.73478 22 2.48043 21.8946 2.29289 21.7071C2.10536 21.5196 2 21.2652 2 21V8H6V10H8V8H16V10H18V8H22V21Z" fill="#5A7093" />
                                            </svg>
                                            <span class="mini-cart-count">0</span>
                                        </a>
                                    </li>
                                    <li class="header-btn">
                                        <a href="#" class="btn">Sign Up</a>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>

                    <!-- Mobile Menu  -->
                    <div class="tgmobile__menu">
                        <nav class="tgmobile__menu-box">
                            <div class="close-btn"><i class="tg-flaticon-close-1"></i></div>
                            <div class="nav-logo">
                                <a class="main-logo" href="{{ route('home') }}">
                                    <img src="{{ asset('images/theme/logo/logo.png') }}" height="auto" width="150px" alt="Logo" />
                                </a>
                            </div>

                            <div class="tgmobile__search">
                                <form method="get" action="{{ route('courses') }}">
                                    <input type="text" name="s" value="" placeholder="Search here...">
                                    <button type="submit"><i class="fas fa-search"></i></button>
                                </form>
                            </div>

                            <div class="tgmobile__menu-outer">
                                <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                            </div>

                            <div class="tgmenu__action">
                                <ul class="list-wrap">
                                    <li class="header-btn login-btn">
                                        <a href="#" class="btn">Sign Up</a>
                                    </li>
                                    <li class="header-btn">
                                        <a href="#" class="btn">Try For Free</a>
                                    </li>
                                </ul>
                            </div>

                            <div class="social-links">
                                <ul class="clearfix">
                                    <li class="facebook"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li class="twitter"><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li class="instagram"><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    <li class="linkedin"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                    <li class="telegram"><a href="#"><i class="fab fa-telegram-plane"></i></a></li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                    <div class="tgmobile__menu-backdrop"></div>
                    <!-- End Mobile Menu -->
                </div>
            </div>
        </div>
    </div>
</header>
<!-- header-area-end -->
