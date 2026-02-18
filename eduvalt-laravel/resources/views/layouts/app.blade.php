<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <title>@yield('title', 'ICT-A')</title>
    
    <!-- Favicon -->
    <link rel="icon" href="{{ asset('images/theme/logo/logo.png') }}" sizes="32x32" />
    <link rel="apple-touch-icon" href="{{ asset('images/theme/logo/logo.png') }}" />
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Hind:wght@400,500,600,700|Lexend+Deca:wght@400,500,600,700,800&display=swap" rel="stylesheet">
    
    <!-- FontAwesome CDN (Replaces broken local fonts) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <!-- CSS Files (Removed broken: fontawesome-all.min4d80.css, flaticon-eduvalt4d80.css, default-icons4d80.css, tg-cursor4d80.css, flaticon4d80.css) -->
    <link rel="stylesheet" href="{{ asset('css/theme/bootstrap.min4d80.css') }}">
    <link rel="stylesheet" href="{{ asset('css/theme/animate.min4d80.css') }}">
    <link rel="stylesheet" href="{{ asset('css/theme/odometer4d80.css') }}">
    <link rel="stylesheet" href="{{ asset('css/theme/aos4d80.css') }}">
    <link rel="stylesheet" href="{{ asset('css/theme/spacing4d80.css') }}">
    <link rel="stylesheet" href="{{ asset('css/theme/eduvalt-core4d80.css') }}">
    <link rel="stylesheet" href="{{ asset('css/theme/eduvalt-unit4d80.css') }}">
    <link rel="stylesheet" href="{{ asset('css/theme/eduvalt-woo4d80.css') }}">
    <link rel="stylesheet" href="{{ asset('css/theme/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/theme/eduvalt-custom4d80.css') }}">
    <link rel="stylesheet" href="{{ asset('css/plugins/eduvalt-frontend4d80.css') }}">
    <link rel="stylesheet" href="{{ asset('css/plugins/slick4d80.css') }}">
    
    <!-- Custom CSS Variables -->
    <style>
        html:root { --tg-theme-primary: #1363DF; --unit-primary-color: #1363DF; }
        html:root { --tg-theme-secondary: #082A5E; --unit-secondary-color: #082A5E; }
        html:root { --tg-common-color-yellow: #FAB123; }
        html:root { --tg-common-color-gray: #E7EFFC; }
        img.wp-smiley, img.emoji { display: inline !important; border: none !important; box-shadow: none !important; height: 1em !important; width: 1em !important; margin: 0 0.07em !important; vertical-align: -0.1em !important; background: none !important; padding: 0 !important; }
        
        /* Optimized Preloader - Simple and Fast */
        #preloader {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: #fff;
            z-index: 9999;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: opacity 0.3s ease, visibility 0.3s ease;
        }
        
        #preloader.hide {
            opacity: 0;
            visibility: hidden;
        }
        
        /* Simple spinning circle loader */
        .loader {
            width: 48px;
            height: 48px;
            border: 4px solid #f3f3f3;
            border-top: 4px solid var(--tg-theme-primary);
            border-radius: 50%;
            animation: spin 0.8s linear infinite;
        }
        
        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
        
        /* Lazy Loading Image Transitions */
        img[loading="lazy"] {
            opacity: 0;
            transition: opacity 0.3s ease-in-out;
        }
        
        img[loading="lazy"].loaded,
        img[loading="lazy"]:not([loading]) {
            opacity: 1;
        }
        
        /* Background image lazy loading */
        [data-background] {
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            transition: opacity 0.5s ease-in-out;
        }
        
        [data-background]:not(.bg-loaded) {
            opacity: 0.7;
        }
        
        [data-background].bg-loaded {
            opacity: 1;
        }
        
        /* CTA background lazy loading */
        .cta__bg {
            background-size: cover;
            background-position: center;
            transition: opacity 0.5s ease-in-out;
        }
        
        .cta__bg:not(.bg-loaded) {
            opacity: 0.8;
        }
        
        .cta__bg.bg-loaded {
            opacity: 1;
        }
        
        /* Prevent layout shift for images */
        img[loading="lazy"] {
            min-height: 1px; /* Prevents collapse */
        }
        
        /* Service Search Bar Styles */
        .service-search-wrapper {
            position: relative;
            width: 100%;
        }
        
        .service-search-input {
            width: 100%;
            padding: 10px 40px 10px 15px;
            border: 1px solid #e0e0e0;
            border-radius: 5px;
            font-size: 14px;
            outline: none;
            transition: all 0.3s ease;
            background: #f5f5f5;
        }
        
        .service-search-input:focus {
            border-color: #1363DF;
            background: #fff;
            box-shadow: 0 2px 8px rgba(19, 99, 223, 0.1);
        }
        
        .service-search-wrapper .search-icon {
            position: absolute;
            right: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: #666;
            pointer-events: none;
            font-size: 14px;
        }
        
        .service-search-dropdown {
            position: absolute;
            top: calc(100% + 5px);
            left: 0;
            width: 100%;
            background: #fff;
            border: 1px solid #e0e0e0;
            border-radius: 5px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
            max-height: 400px;
            overflow-y: auto;
            z-index: 1000;
            display: none;
            list-style: none;
            padding: 0;
            margin: 0;
        }
        
        .service-search-dropdown.show {
            display: block;
        }
        
        .service-search-dropdown .service-item {
            padding: 0;
            margin: 0;
            border-bottom: 1px solid #f0f0f0;
        }
        
        .service-search-dropdown .service-item:last-child {
            border-bottom: none;
        }
        
        .service-search-dropdown .service-item.hidden {
            display: none;
        }
        
        .service-search-dropdown .service-item a {
            display: block;
            padding: 12px 15px;
            color: #333;
            text-decoration: none;
            transition: all 0.2s ease;
            font-size: 14px;
        }
        
        .service-search-dropdown .service-item a:hover {
            background: #f5f5f5;
            color: #1363DF;
            padding-left: 20px;
        }
        
        /* Mobile Search Styles */
        .mobile-search .service-search-dropdown {
            max-height: 300px;
        }
        
        @media (max-width: 767px) {
            .service-search-input {
                font-size: 13px;
                padding: 8px 35px 8px 12px;
            }
            
            .service-search-dropdown .service-item a {
                font-size: 13px;
                padding: 10px 12px;
            }
        }
    </style>
    
    @stack('styles')
</head>

<body class="wp-singular page-template theme-eduvalt no-sidebar">
    <!-- Performance Logging & Fast Preloader -->
    <script>
        // Performance logging - Track everything
        const perfStart = performance.now();
        
        // Log when HTML parsing starts
        window.addEventListener('DOMContentLoaded', function() {
            // Service Search Functionality
            function initServiceSearch(inputId, dropdownId) {
                const searchInput = document.getElementById(inputId);
                const dropdown = document.getElementById(dropdownId);
                
                if (!searchInput || !dropdown) return;
                
                const serviceItems = dropdown.querySelectorAll('.service-item');
                
                // Show dropdown on focus/click
                searchInput.addEventListener('focus', function() {
                    dropdown.classList.add('show');
                    // Show all items when focusing
                    serviceItems.forEach(item => item.classList.remove('hidden'));
                });
                
                searchInput.addEventListener('click', function() {
                    dropdown.classList.add('show');
                    // Show all items when clicking
                    serviceItems.forEach(item => item.classList.remove('hidden'));
                });
                
                // Real-time filtering
                searchInput.addEventListener('input', function() {
                    const searchTerm = this.value.toLowerCase().trim();
                    let hasVisibleItems = false;
                    
                    serviceItems.forEach(item => {
                        const serviceName = item.getAttribute('data-name').toLowerCase();
                        
                        if (searchTerm === '' || serviceName.includes(searchTerm)) {
                            item.classList.remove('hidden');
                            hasVisibleItems = true;
                        } else {
                            item.classList.add('hidden');
                        }
                    });
                    
                    // Show dropdown if there's text or it's focused
                    if (document.activeElement === searchInput) {
                        dropdown.classList.add('show');
                    }
                });
                
                // Close dropdown when clicking outside
                document.addEventListener('click', function(e) {
                    if (!searchInput.contains(e.target) && !dropdown.contains(e.target)) {
                        dropdown.classList.remove('show');
                    }
                });
                
                // Prevent dropdown from closing when clicking inside it
                dropdown.addEventListener('click', function(e) {
                    e.stopPropagation();
                });
            }
            
            // Initialize both desktop and mobile search
            initServiceSearch('serviceSearchInput', 'serviceSearchDropdown');
            initServiceSearch('mobileServiceSearchInput', 'mobileServiceSearchDropdown');
        });
        performance.mark('html-start');
        
        // Hide preloader as soon as DOM is ready (don't wait for all images/resources)
        document.addEventListener('DOMContentLoaded', function() {
            const domReadyTime = performance.now();
            performance.mark('dom-ready');
            
            const preloader = document.getElementById('preloader');
            if (preloader) {
                // Add hide class for smooth transition
                preloader.classList.add('hide');
                
                // Remove from DOM after transition
                setTimeout(function() {
                    preloader.style.display = 'none';
                }, 300);
            }
            
            const cssLinks = document.querySelectorAll('link[rel="stylesheet"]');
            
            const scripts = document.querySelectorAll('script[src]');
            
            const images = document.querySelectorAll('img');
        });
        
        // Fallback: If DOMContentLoaded already fired
        if (document.readyState === 'interactive' || document.readyState === 'complete') {
            const preloader = document.getElementById('preloader');
            if (preloader) {
                preloader.classList.add('hide');
                setTimeout(function() {
                    preloader.style.display = 'none';
                }, 300);
            }
        }
        
        // Track when all resources finish loading
        window.addEventListener('load', function() {
            const loadTime = performance.now();
            performance.mark('full-load');
            
            // Detailed performance metrics
            const perfData = performance.timing;
            const navStart = perfData.navigationStart;
        });
    </script>
    
    <!-- Preloader - Optimized for faster hiding -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- Preloader-end -->

    <!-- Scroll-top -->
    <button class="scroll__top scroll-to-target" data-target="html">
        <i class="tg-flaticon-arrowhead-up"></i>
    </button>
    <!-- Scroll-top-end-->

    <!-- Header -->
    @include('partials.header')
    
    <!-- Main Area -->
    <main class="main-area fix">
        @yield('content')
    </main>
    <!-- main-area-end -->

    <!-- Footer -->
    @include('partials.footer')

    <!-- JavaScript Files (Removed broken: tg-cursor.min4d80.js, vivus.min4d80.js) -->
    <script src="{{ asset('js/vendor/jquery.minf43b.js') }}"></script>
    <script src="{{ asset('js/vendor/jquery-migrate.min5589.js') }}"></script>
    <script src="{{ asset('js/theme/bootstrap.min4d80.js') }}"></script>
    <script src="{{ asset('js/vendor/imagesloaded.minbb93.js') }}"></script>
    <script src="{{ asset('js/vendor/slick.min5fa1.js') }}"></script>
    <script src="{{ asset('js/theme/isotope.pkgd.min4d80.js') }}"></script>
    <script src="{{ asset('js/theme/jquery.odometer.min4d80.js') }}"></script>
    <script src="{{ asset('js/theme/jquery.appear4d80.js') }}"></script>
    <script src="{{ asset('js/theme/tween-max.min4d80.js') }}"></script>
    <script src="{{ asset('js/theme/slick-animation.min4d80.js') }}"></script>
    <!-- <script src="{{ asset('js/theme/tg-cursor.min4d80.js') }}"></script> REMOVED: Broken library causing errors -->
    <!-- <script src="{{ asset('js/theme/vivus.min4d80.js') }}"></script> REMOVED: Causing 15+ SVG errors -->
    <script src="{{ asset('js/theme/wow.min4d80.js') }}"></script>
    <script src="{{ asset('js/theme/aos4d80.js') }}"></script>
    
    <!-- Add Magnific Popup CDN (fixes magnificPopup error) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js" integrity="sha512-IsNh5E3eYy3tr/JiX2Yx4vsCujtkhwl7SLqgnwLNgf04Hrt9BT9SXlLlZlWx+OK4ndzAoALhsMNcCmkggjZB1w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" integrity="sha512-+EoPw+Fiwh6eSeRK7zwIKG2MA8i3rV/DGa3tdttQGgWyatG/SkncT53KHQaS5Jh9MNOT3dmFL0FjTY08And/Cw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <script src="{{ asset('js/theme/main4d80.js') }}"></script>
    
    <!-- Lazy Loading for Background Images -->
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        // Add loaded class to lazy images when they finish loading
        const lazyImages = document.querySelectorAll('img[loading="lazy"]');
        lazyImages.forEach(function(img) {
            img.addEventListener('load', function() {
                img.classList.add('loaded');
            });
            // If image is already cached and loaded
            if (img.complete) {
                img.classList.add('loaded');
            }
        });
        
        // Lazy load background images for hero sliders and CTA areas
        const lazyBackgrounds = document.querySelectorAll('[data-background]');
        
        if ('IntersectionObserver' in window) {
            const bgObserver = new IntersectionObserver(function(entries, observer) {
                entries.forEach(function(entry) {
                    if (entry.isIntersecting) {
                        const element = entry.target;
                        const bgImage = element.getAttribute('data-background');
                        element.style.backgroundImage = 'url(' + bgImage + ')';
                        element.classList.add('bg-loaded');
                        observer.unobserve(element);
                    }
                });
            }, {
                rootMargin: '50px'
            });
            
            lazyBackgrounds.forEach(function(bg) {
                bgObserver.observe(bg);
            });
        } else {
            // Fallback for older browsers
            lazyBackgrounds.forEach(function(bg) {
                const bgImage = bg.getAttribute('data-background');
                bg.style.backgroundImage = 'url(' + bgImage + ')';
                bg.classList.add('bg-loaded');
            });
        }
        
        // Lazy load CTA background image
        const ctaBg = document.querySelector('.cta__bg');
        if (ctaBg && 'IntersectionObserver' in window) {
            const ctaObserver = new IntersectionObserver(function(entries, observer) {
                entries.forEach(function(entry) {
                    if (entry.isIntersecting) {
                        const element = entry.target;
                        const bgStyle = element.style.backgroundImage;
                        if (!bgStyle || bgStyle === 'none') {
                            const bgUrl = element.getAttribute('data-background') || element.style.backgroundImage;
                            if (bgUrl) {
                                element.style.backgroundImage = bgUrl;
                            }
                        }
                        element.classList.add('bg-loaded');
                        observer.unobserve(element);
                    }
                });
            }, {
                rootMargin: '100px'
            });
            
            ctaObserver.observe(ctaBg);
        }
    });
    </script>
    
    @stack('scripts')
</body>
</html>
