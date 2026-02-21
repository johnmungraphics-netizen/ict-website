@extends('layouts.app')

@section('title', 'ICT-A')

@push('styles')
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

/* Section Sub-titles - Enhanced visibility */
.section__title .sub-title {
    font-size: 16px;
    font-weight: 600;
    letter-spacing: 0.5px;
    margin-bottom: 15px;
    display: inline-block;
}

/* Completely remove scroll-to-top button on all screen sizes */
.scroll__top,
.scroll-to-target {
    display: none !important;
    visibility: hidden !important;
    opacity: 0 !important;
    pointer-events: none !important;
}

/* Remove mobile hamburger menu button completely */
.mobile-nav-toggler {
    display: none !important;
}

/* Hide old mobile menu and backdrop */
.tgmobile__menu,
.tgmobile__menu-backdrop {
    display: none !important;
}

/* Mobile Navigation Styling - Always visible */
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

/* Button styling - Reduced size for better visual hierarchy */
.btn {
    font-size: 14px !important;
    padding: 8px 20px !important;
    max-width: 150px !important;
    width: auto !important;
    display: inline-block !important;
}

.btn .text {
    font-size: 14px !important;
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

/* CTA Area Decorative Shapes - Red Theme Matching Logo */
.cta-shape-decoration {
    position: absolute;
    border-radius: 50%;
    opacity: 0.15;
    pointer-events: none;
    z-index: 1;
}

/* Ensure CTA content appears above decorative shapes */
.cta__content,
.cta__wrapper .section__title,
.cta__wrapper .cta__desc,
.cta__wrapper .tg-button-wrap {
    position: relative;
    z-index: 10;
}

.cta-shape-1 {
    width: 180px;
    height: 180px;
    background: linear-gradient(135deg, #E53935 0%, #C62828 100%);
    top: -60px;
    left: 30px;
    animation: float-shape-1 6s ease-in-out infinite;
}

.cta-shape-2 {
    width: 120px;
    height: 120px;
    background: radial-gradient(circle, #DC3545 0%, #B71C1C 100%);
    bottom: -40px;
    right: 40px;
    animation: float-shape-2 8s ease-in-out infinite;
}

.cta-shape-3 {
    width: 90px;
    height: 90px;
    background: linear-gradient(45deg, #E53935 0%, #FF5252 100%);
    top: 50%;
    right: 15%;
    transform: translateY(-50%);
    animation: pulse-shape 4s ease-in-out infinite;
}

@keyframes float-shape-1 {
    0%, 100% {
        transform: translate(0, 0) rotate(0deg);
    }
    25% {
        transform: translate(10px, -15px) rotate(5deg);
    }
    50% {
        transform: translate(-5px, -10px) rotate(-3deg);
    }
    75% {
        transform: translate(15px, -20px) rotate(7deg);
    }
}

@keyframes float-shape-2 {
    0%, 100% {
        transform: translate(0, 0) rotate(0deg);
    }
    33% {
        transform: translate(-15px, 10px) rotate(-5deg);
    }
    66% {
        transform: translate(10px, -5px) rotate(8deg);
    }
}

@keyframes pulse-shape {
    0%, 100% {
        transform: scale(1);
        opacity: 0.15;
    }
    50% {
        transform: scale(1.1);
        opacity: 0.25;
    }
}

@keyframes morph-shape {
    0%, 100% {
        border-radius: 30% 70% 70% 30% / 30% 30% 70% 70%;
        transform: rotate(0deg);
    }
    25% {
        border-radius: 58% 42% 75% 25% / 76% 46% 54% 24%;
    }
    50% {
        border-radius: 50% 50% 33% 67% / 55% 27% 73% 45%;
        transform: rotate(45deg);
    }
    75% {
        border-radius: 33% 67% 58% 42% / 63% 68% 32% 37%;
    }
}

@keyframes rotate-morph {
    0% {
        border-radius: 63% 37% 54% 46% / 55% 48% 52% 45%;
        transform: rotate(0deg);
    }
    50% {
        border-radius: 40% 60% 70% 30% / 40% 40% 60% 50%;
        transform: rotate(180deg);
    }
    100% {
        border-radius: 63% 37% 54% 46% / 55% 48% 52% 45%;
        transform: rotate(360deg);
    }
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
    background-image: url('{{ asset('uploads/2023/07/area_bg.jpg') }}');
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

/* Services scroll controls */
.services-scroll-controls {
    display: flex;
    align-items: center;
    gap: 15px;
    justify-content: flex-end;
}

.scroll-btn {
    background: #2467ec;
    border: none;
    width: 45px;
    height: 45px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #ffffff;
    font-size: 16px;
    cursor: pointer;
    transition: all 0.3s ease;
    box-shadow: 0 2px 8px rgba(36, 103, 236, 0.2);
}

.scroll-btn:hover {
    background: #1a4fb8;
    transform: translateY(-2px);
    box-shadow: 0 4px 12px rgba(36, 103, 236, 0.3);
}

.scroll-btn:active {
    transform: translateY(0);
}

@media (max-width: 767.98px) {
    .services-scroll-controls {
        justify-content: center;
        margin-top: 20px;
    }
}

/* Smooth scrolling for services carousel */
.courses-slider-active {
    padding: 0 10px;
}

.courses-slider-active .slick-slide {
    margin: 0 10px;
    transition: all 0.3s ease;
}

.courses-slider-active .slick-track {
    display: flex;
    align-items: stretch;
}

/* Brand slider styling */
.brand-area {
    padding: 60px 0;
    min-height: 200px;
}

.brand-slider-active {
    width: 100%;
    visibility: visible !important;
    opacity: 1 !important;
}

.brand-slider-active .slick-slide {
    margin: 0 20px;
    transition: all 0.3s ease;
}

.brand__item {
    display: flex !important;
    align-items: center;
    justify-content: center;
    padding: 15px;
    min-height: 100px;
}

.brand__item img {
    max-width: 100%;
    height: auto;
    max-height: 80px;
    object-fit: contain;
    filter: grayscale(100%);
    opacity: 0.7;
    transition: all 0.3s ease;
}

.brand__item:hover img {
    filter: grayscale(0%);
    opacity: 1;
}

/* Mobile responsive for brand section */
@media (max-width: 767.98px) {
    .brand-area {
        padding: 40px 0 !important;
        min-height: 180px !important;
        display: block !important;
        visibility: visible !important;
    }
    
    .brand__item {
        min-height: 80px;
        padding: 10px;
    }
    
    .brand__item img {
        max-height: 60px;
    }
}

@media (max-width: 575.98px) {
    .brand-area {
        padding: 30px 0 !important;
        min-height: 150px !important;
    }
    
    .brand__item {
        min-height: 70px;
    }
    
    .brand__item img {
        max-height: 50px;
    }
}

/* Service cards uniform height */
.courses-slider-active .slick-track {
    display: flex !important;
    align-items: stretch;
}

.courses-slider-active .slick-slide {
    height: auto;
    display: flex;
}

.courses-slider-active .slick-slide > div {
    display: flex;
    width: 100%;
}

.courses-slider-active .col {
    display: flex;
    width: 100%;
}

.courses-slider-active .courses__item-two {
    display: flex;
    flex-direction: column;
    height: 100%;
    width: 100%;
}

.courses-slider-active .courses__item-two-thumb {
    flex-shrink: 0;
}

.courses-slider-active .courses__item-two-content {
    display: flex;
    flex-direction: column;
    flex-grow: 1;
}

.courses-slider-active .courses__item-two-content .title {
    min-height: 3em;
    display: flex;
    align-items: flex-start;
}

.courses-slider-active .courses__item-two-content p {
    flex-grow: 1;
}

/* ================================================
   MOBILE RESPONSIVE STYLES - DO NOT ALTER DESKTOP
   ================================================ */

/* Hero/Slider Section - Mobile Responsive */
@media (max-width: 991.98px) {
    .slider__item {
        min-height: 500px !important;
        padding: 80px 0 !important;
    }
    
    .slider__content .sub-title {
        font-size: 14px !important;
        margin-bottom: 15px !important;
    }
    
    .slider__content .title {
        font-size: 32px !important;
        line-height: 1.2 !important;
        margin-bottom: 20px !important;
    }
    
    .slider__content ul.list-wrap {
        margin-bottom: 25px !important;
    }
    
    .slider__content ul.list-wrap li {
        font-size: 14px !important;
        margin-bottom: 10px !important;
    }
    
    .slider__item .top-shape,
    .slider__item .bottom-shape {
        display: none !important;
    }
}

@media (max-width: 767.98px) {
    .slider__item {
        min-height: 450px !important;
        padding: 60px 0 !important;
    }
    
    .slider__content .sub-title {
        font-size: 12px !important;
        margin-bottom: 12px !important;
    }
    
    .slider__content .title {
        font-size: 26px !important;
        line-height: 1.3 !important;
        margin-bottom: 15px !important;
    }
    
    .slider__content ul.list-wrap li {
        font-size: 13px !important;
        margin-bottom: 8px !important;
    }
    
    .slider__content .btn {
        padding: 12px 25px !important;
        font-size: 14px !important;
    }
    
    /* Improve gradient overlay for mobile */
    .slider__item::before {
        width: 100% !important;
        background: linear-gradient(to bottom,
            rgba(255, 255, 255, 0.95) 0%,
            rgba(255, 255, 255, 0.9) 40%,
            rgba(255, 255, 255, 0.7) 70%,
            rgba(255, 255, 255, 0.3) 100%) !important;
    }
}

@media (max-width: 575.98px) {
    .slider__item {
        min-height: 400px !important;
        padding: 40px 0 !important;
    }
    
    .slider__content .sub-title {
        font-size: 11px !important;
    }
    
    .slider__content .title {
        font-size: 22px !important;
        margin-bottom: 12px !important;
    }
    
    .slider__content ul.list-wrap li {
        font-size: 12px !important;
    }
}

/* Testimonial Cards - Enhanced Mobile Responsive */
@media (max-width: 991.98px) {
    .testimonial__item {
        margin: 40px 50px !important;
        padding: 30px 40px 50px !important;
        border-radius: 30px !important;
    }
    
    .testimonial__item p {
        font-size: 15px !important;
        margin: 0 15px !important;
        line-height: 1.6 !important;
    }
    
    .testimonial__avatar .name {
        font-size: 18px !important;
    }
    
    .testimonial-area-wrapper {
        padding: 80px 0 90px !important;
    }
}

@media (max-width: 767.98px) {
    .testimonial__item {
        margin: 20px 15px !important;
        padding: 25px 20px 35px !important;
        border-radius: 20px !important;
        box-shadow: 0px 8px 25px rgba(0, 0, 0, 0.08) !important;
    }
    
    .testimonial__item p {
        font-size: 14px !important;
        margin: 0 10px !important;
        line-height: 1.7 !important;
    }
    
    .testimonial__quote img {
        max-width: 35px !important;
    }
    
    .testimonial__rating {
        font-size: 14px !important;
        margin: 0 0 12px !important;
    }
    
    .testimonial__avatar .name {
        font-size: 16px !important;
        margin: 0 0 5px !important;
    }
    
    .testimonial__avatar .designation {
        font-size: 13px !important;
    }
    
    .testimonial-area-wrapper {
        padding: 60px 0 70px !important;
    }
    
    .testimonial-area-wrapper .section__title .sub-title {
        font-size: 18px !important;
        font-weight: 600 !important;
    }
    
    .testimonial-area-wrapper .section__title .title {
        font-size: 26px !important;
    }
}

@media (max-width: 575.98px) {
    .testimonial__item {
        margin: 15px 10px !important;
        padding: 20px 15px 30px !important;
    }
    
    .testimonial__item p {
        font-size: 13px !important;
        margin: 0 5px !important;
    }
    
    .testimonial__quote {
        margin: 0 0 15px !important;
    }
    
    .testimonial__quote img {
        max-width: 30px !important;
    }
    
    .testimonial__avatar .name {
        font-size: 15px !important;
    }
    
    .testimonial__avatar .designation {
        font-size: 12px !important;
    }
    
    .testimonial-area-wrapper .section__title .title {
        font-size: 22px !important;
    }
}

/* Header - Mobile Responsive Enhancements */

/* Mobile Navigation Toggler - Hamburger Menu Icon */
.mobile-nav-toggler {
    display: none;
    position: relative;
    width: 40px;
    height: 40px;
    background: #2467ec;
    border-radius: 5px;
    cursor: pointer;
    align-items: center;
    justify-content: center;
    z-index: 999;
    transition: all 0.3s ease;
}

.mobile-nav-toggler:hover {
    background: #1a4fb8;
}

.mobile-nav-toggler i {
    font-size: 20px;
    color: #ffffff;
}

@media (max-width: 1199.98px) {
    .mobile-nav-toggler {
        display: flex !important;
    }
    
    /* Hide desktop navigation on mobile */
    .tgmenu__navbar-wrap {
        display: none !important;
    }
}

@media (max-width: 991.98px) {
    .mobile-nav-toggler {
        width: 38px;
        height: 38px;
    }
    
    .mobile-nav-toggler i {
        font-size: 18px;
    }
    
    .tg-header__top-info span,
    .tg-header__top-info a {
        font-size: 12px !important;
    }
    
    .tg-header__top-social {
        font-size: 12px !important;
    }
    
    /* Adjust header layout for mobile */
    .tgmenu__wrap {
        display: flex !important;
        justify-content: space-between !important;
        align-items: center !important;
    }
    
    /* Hide search bar and contact button on small tablets, show in mobile menu */
    .tgmenu__search-bar,
    .tgmenu__action {
        display: none !important;
    }
}

@media (max-width: 767.98px) {
    .mobile-nav-toggler {
        width: 36px;
        height: 36px;
    }
    
    .mobile-nav-toggler i {
        font-size: 16px;
    }
    
    .tg-header__top {
        padding: 8px 0 !important;
    }
    
    .tg-header__top-info li {
        margin-right: 10px !important;
    }
    
    .tg-header__top-info span,
    .tg-header__top-info a {
        font-size: 11px !important;
    }
    
    .tg-header__top-info img {
        width: 12px !important;
        height: 12px !important;
    }
    
    /* Logo sizing for mobile */
    .logo img {
        max-width: 120px !important;
    }
}

@media (max-width: 575.98px) {
    .mobile-nav-toggler {
        width: 34px;
        height: 34px;
    }
    
    .mobile-nav-toggler i {
        font-size: 15px;
    }
    
    .tg-header__top-info span {
        display: inline-block !important;
        max-width: 180px !important;
        overflow: hidden !important;
        text-overflow: ellipsis !important;
        white-space: nowrap !important;
    }
    
    /* Logo sizing for small mobile */
    .logo img {
        max-width: 100px !important;
    }
}

/* Mobile Menu Styles */
.tgmobile__menu {
    position: fixed;
    top: 0;
    right: -100%;
    width: 300px;
    height: 100%;
    background: #ffffff;
    z-index: 9999;
    transition: all 0.4s ease-in-out;
    overflow-y: auto;
}

.tgmobile__menu.mobile-menu-visible {
    right: 0;
}

.tgmobile__menu-backdrop {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.5);
    z-index: 9998;
    opacity: 0;
    visibility: hidden;
    transition: all 0.4s ease-in-out;
}

.tgmobile__menu-backdrop.mobile-menu-visible {
    opacity: 1;
    visibility: visible;
}

.tgmobile__menu-box {
    padding: 20px;
}

.tgmobile__menu .close-btn {
    position: absolute;
    top: 15px;
    right: 15px;
    width: 35px;
    height: 35px;
    background: #f5f5f5;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    transition: all 0.3s ease;
}

.tgmobile__menu .close-btn:hover {
    background: #2467ec;
    color: #ffffff;
}

.tgmobile__menu .close-btn i {
    font-size: 16px;
}

.tgmobile__menu .nav-logo {
    margin-bottom: 20px;
    padding-bottom: 15px;
    border-bottom: 1px solid #e8e8e8;
}

.tgmobile__search {
    margin-bottom: 20px;
}

.tgmobile__menu-outer ul {
    list-style: none;
    padding: 0;
    margin: 0;
}

.tgmobile__menu-outer ul li {
    margin-bottom: 10px;
}

.tgmobile__menu-outer ul li a {
    display: block;
    padding: 12px 15px;
    color: #333;
    font-weight: 500;
    border-radius: 5px;
    transition: all 0.3s ease;
    text-decoration: none;
}

.tgmobile__menu-outer ul li a:hover {
    background: #f5f5f5;
    color: #2467ec;
    padding-left: 20px;
}

.tgmobile__menu .tgmenu__action {
    margin-top: 20px;
    padding-top: 20px;
    border-top: 1px solid #e8e8e8;
}

.tgmobile__menu .tgmenu__action .list-wrap {
    list-style: none;
    padding: 0;
    margin: 0;
}

.tgmobile__menu .tgmenu__action .list-wrap li {
    margin-bottom: 10px;
}

.tgmobile__menu .social-links {
    margin-top: 20px;
    padding-top: 20px;
    border-top: 1px solid #e8e8e8;
}

.tgmobile__menu .social-links ul {
    display: flex;
    gap: 10px;
    list-style: none;
    padding: 0;
    margin: 0;
}

.tgmobile__menu .social-links ul li a {
    width: 35px;
    height: 35px;
    display: flex;
    align-items: center;
    justify-content: center;
    background: #f5f5f5;
    border-radius: 50%;
    color: #333;
    transition: all 0.3s ease;
}

.tgmobile__menu .social-links ul li a:hover {
    background: #2467ec;
    color: #ffffff;
}

/* Section Titles - Mobile Responsive */
@media (max-width: 767.98px) {
    .section__title .title {
        font-size: 26px !important;
        line-height: 1.3 !important;
    }
    
    .section__title .sub-title {
        font-size: 18px !important;
        font-weight: 600 !important;
        margin-bottom: 12px !important;
    }
    
    /* Reduce button size on mobile for proper visual hierarchy */
    .btn {
        font-size: 13px !important;
        padding: 8px 18px !important;
        max-width: 140px !important;
    }
    
    .btn .text {
        font-size: 13px !important;
    }
}

@media (max-width: 575.98px) {
    .section__title .title {
        font-size: 22px !important;
    }
    
    .section__title .sub-title {
        font-size: 16px !important;
        font-weight: 600 !important;
        margin-bottom: 10px !important;
    }
    
    /* Reduce button size on mobile for proper visual hierarchy */
    .btn {
        font-size: 13px !important;
        padding: 6px 16px !important;
        max-width: 130px !important;
    }
    
    .btn .text {
        font-size: 13px !important;
    }
}

/* ================================================
   TABLET RESPONSIVE - iPad Mini & Similar Devices
   iPad Mini: 768px x 1024px (Portrait)
   ================================================ */

/* Mission, Vision & Values Section - Tablet Optimization */
@media (min-width: 768px) and (max-width: 991.98px) {
    /* Stack Mission/Vision/Values in single column for better readability on tablets */
    .features-area .row .col-lg-4 {
        flex: 0 0 100% !important;
        max-width: 100% !important;
    }
    
    .features__item {
        max-width: 600px !important;
        margin: 0 auto !important;
    }
    
    .features__item h4.title {
        font-size: 20px !important;
    }
    
    .features__item p,
    .features__item ul li {
        font-size: 15px !important;
        line-height: 1.6 !important;
    }
    
    .features__icon img {
        width: 70px !important;
        height: 70px !important;
    }
}

/* Alternative: 2-column layout for tablets in landscape or larger tablets */
@media (min-width: 900px) and (max-width: 991.98px) {
    .features-area .row .col-lg-4 {
        flex: 0 0 50% !important;
        max-width: 50% !important;
    }
    
    .features__item {
        max-width: 100% !important;
    }
}

/* Services Section - Tablet Responsive */
@media (min-width: 768px) and (max-width: 991.98px) {
    .courses-area {
        padding-top: 80px !important;
        padding-bottom: 40px !important;
    }
    
    /* Ensure proper spacing for service cards on tablets */
    .courses__item-two {
        margin-bottom: 20px !important;
    }
    
    .courses__item-two-content .title {
        font-size: 18px !important;
    }
    
    .courses__item-two-content p {
        font-size: 14px !important;
    }
}

/* Statistics/Facts Section - Tablet */
@media (min-width: 768px) and (max-width: 991.98px) {
    .fact__item-two .fact__content .title {
        font-size: 32px !important;
    }
    
    .fact__icon-two img {
        max-width: 50px !important;
    }
}

</style>
@endpush

@section('content')
<!-- slider-area -->
<section class="slider-area">
    <div class="slider__active_two">
        <!-- Slide 1 -->
        <div class="slider__item d-flex" style="background-image:url({{ asset('images/hero1.jpg') }})">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-8">
                        <div class="slider__content">
                            <span class="sub-title" data-animation-in="slideInLeft" data-delay-in=".2" data-duration-in="0.8">Professional ICT Solutions Provider</span>
                            <h2 class="title tg-svg" data-animation-in="slideInLeft" data-delay-in=".3" data-duration-in="0.8">Expert ICT Solutions <span class="position-relative"><span class="svg-icon" id="slider-0" data-svg-icon="{{ asset('images/theme/icons/title_shape.svg') }}"></span>Across</span> East Africa</h2>
                            <ul class="list-wrap" data-animation-in="slideInLeft" data-delay-in=".4" data-duration-in="0.8">
                                <li><i class="fas fa-check-circle"></i>Comprehensive IT Infrastructure & Support Services</li>
                                <li><i class="fas fa-check-circle"></i>Trusted by 500+ Organizations Across East Africa</li>
                            </ul>
                            <div class="tg-button-wrap" data-animation-in="slideInLeft" data-delay-in=".5" data-duration-in="0.8">
                                <a href="#services" class="btn tg-svg"><span class="text">Our Services</span> <span class="svg-icon" id="slider-btn01-0" data-svg-icon="{{ asset('images/theme/icons/btn-arrow.svg') }}"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <img decoding="async" src="{{ asset('uploads/2023/07/categories_shape02.png') }}" alt="shape" width="108" class="top-shape" data-animation-in="slideInDown" data-delay-in=".6" data-duration-in="0.8" loading="lazy">
            <img decoding="async" src="{{ asset('uploads/2023/07/slider_shape.png') }}" alt="shape" class="bottom-shape" data-animation-in="slideInLeft" data-delay-in=".6" data-duration-in="0.8" loading="lazy">
        </div>
        <!-- Slide 2 -->
        <div class="slider__item d-flex" style="background-image:url({{ asset('images/hero2.jpg') }})">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-8">
                        <div class="slider__content">
                            <span class="sub-title" data-animation-in="slideInLeft" data-delay-in=".2" data-duration-in="0.8">Transform Your Business with Technology</span>
                            <h2 class="title tg-svg" data-animation-in="slideInLeft" data-delay-in=".3" data-duration-in="0.8">Innovative IT Solutions <span class="position-relative"><span class="svg-icon" id="slider-1" data-svg-icon="{{ asset('images/theme/icons/title_shape.svg') }}"></span>For Your</span> Organization</h2>
                            <ul class="list-wrap" data-animation-in="slideInLeft" data-delay-in=".4" data-duration-in="0.8">
                                <li><i class="fas fa-check-circle"></i>Cloud Services, Security Systems & Network Infrastructure</li>
                                <li><i class="fas fa-check-circle"></i>24/7 Technical Support & Expert Consultancy</li>
                            </ul>
                            <div class="tg-button-wrap" data-animation-in="slideInLeft" data-delay-in=".5" data-duration-in="0.8">
                                <a href="#services" class="btn tg-svg"><span class="text">Our Services</span> <span class="svg-icon" id="slider-btn01-1" data-svg-icon="{{ asset('images/theme/icons/btn-arrow.svg') }}"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <img decoding="async" src="{{ asset('uploads/2023/07/categories_shape02.png') }}" alt="shape" width="108" class="top-shape" data-animation-in="slideInDown" data-delay-in=".6" data-duration-in="0.8">
            <img decoding="async" src="{{ asset('uploads/2023/07/slider_shape.png') }}" alt="shape" class="bottom-shape" data-animation-in="slideInLeft" data-delay-in=".6" data-duration-in="0.8">
        </div>
        <!-- Slide 3 -->
        <div class="slider__item d-flex" style="background-image:url({{ asset('images/hero3.jpg') }})">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-8">
                        <div class="slider__content">
                            <span class="sub-title" data-animation-in="slideInLeft" data-delay-in=".2" data-duration-in="0.8">Leading ICT Solutions Provider in East Africa</span>
                            <h2 class="title tg-svg" data-animation-in="slideInLeft" data-delay-in=".3" data-duration-in="0.8">Driving Digital <span class="position-relative"><span class="svg-icon" id="slider-2" data-svg-icon="{{ asset('images/theme/icons/title_shape.svg') }}"></span>Transformation</span> For Businesses</h2>
                            <ul class="list-wrap" data-animation-in="slideInLeft" data-delay-in=".4" data-duration-in="0.8">
                                <li><i class="fas fa-check-circle"></i>ICT Audits, Datacenter Solutions & Software Development</li>
                                <li><i class="fas fa-check-circle"></i>Partnering with Microsoft, VMware, Cisco & More</li>
                            </ul>
                            <div class="tg-button-wrap" data-animation-in="slideInLeft" data-delay-in=".5" data-duration-in="0.8">
                                <a href="#services" class="btn tg-svg"><span class="text">Our Services</span> <span class="svg-icon" id="slider-btn01-2" data-svg-icon="{{ asset('images/theme/icons/btn-arrow.svg') }}"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <img decoding="async" src="{{ asset('uploads/2023/07/categories_shape02.png') }}" alt="shape" width="108" class="top-shape" data-animation-in="slideInDown" data-delay-in=".6" data-duration-in="0.8">
            <img decoding="async" src="{{ asset('uploads/2023/07/slider_shape.png') }}" alt="shape" class="bottom-shape" data-animation-in="slideInLeft" data-delay-in=".6" data-duration-in="0.8">
        </div>
    </div>
</section>
<!-- slider-area-end -->

<!-- about-area -->
<section id="about" class="section-py-120">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7">
                <div class="about__title-wrap">
                    <div class="section__title">
                        <span class="sub-title">Who we are</span>
                        <h2 class="title tg-svg">Your Trusted <span class="position-relative"><span class="svg-icon" id="about-svg-1" data-svg-icon="{{ asset('images/theme/icons/title_shape.svg') }}"></span>Partner</span> In Technology Solutions</h2>
                    </div>
                    <p class="fw-medium">ICT Africa is a leading information and communication technology company dedicated to providing innovative solutions that drive digital transformation across Africa.</p>
                    <p>With years of experience and a team of highly skilled professionals, we specialize in delivering comprehensive ICT services including software development, IT infrastructure, cybersecurity, training, and consultancy. Our commitment to excellence and customer satisfaction has made us a trusted partner for businesses and organizations seeking to leverage technology for growth and efficiency.</p>
                    <div class="tg-button-wrap">
                        <a href="#services" class="btn tg-svg"><span class="text">Our Services</span> <span class="svg-icon" id="about-btn" data-svg-icon="{{ asset('images/theme/icons/btn-arrow.svg') }}"></span></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="about__image text-center">
                    <img decoding="async" src="{{ asset('uploads/2019/05/team.jpg') }}" alt="ICT Africa" style="max-width: 350px; width: 100%; height: auto; border-radius: 10px; box-shadow: 0 4px 15px rgba(0,0,0,0.1);" loading="lazy">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- about-area-end -->

<!-- services-area -->
<section id="services" class="courses-area" style="padding-top: 120px; padding-bottom: 60px;">
    <div class="container">
        <div class="row align-items-center mb-4">
            <div class="col-lg-6">
                <div class="section__title text-left">
                    <span class="sub-title">Professional ICT Solutions</span>
                    <h2 class="title tg-svg">Our <span class="position-relative"><span class="svg-icon" id="svg-courses" data-svg-icon="{{ asset('images/theme/icons/title_shape.svg') }}"></span>Services</span></h2>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="tg-button-wrap mt-4 mt-lg-0 justify-content-center justify-content-lg-end">
                    <div class="services-scroll-controls">
                        <button type="button" class="scroll-btn scroll-prev" onclick="scrollServices('prev')">
                            <i class="fas fa-chevron-left"></i>
                        </button>
                        
                        <button type="button" class="scroll-btn scroll-next" onclick="scrollServices('next')">
                            <i class="fas fa-chevron-right"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="row courses-slider-active" id="servicesSlider" style="overflow-x: hidden; scroll-behavior: smooth;">
            @foreach($courses ?? [] as $course)
            <div class="col">
                <div class="courses__item-two shine__animate-item">
                    <div class="courses__item-two-thumb">
                        <a href="{{ $course['url'] ?? '#' }}" class="shine__animate-link">
                            <img src="{{ $course['image'] ?? asset('uploads/2019/05/courses01.jpg') }}" alt="{{ $course['title'] ?? 'Course' }}" loading="lazy" />
                        </a>
                        <div class="author">
                            <a href="#">
                                <img alt='Author' src='{{ asset('uploads/2023/07/author_img.png') }}' class='avatar avatar-32 photo' height='32' width='32' loading="lazy" />
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
            @endforeach
            
            @if(empty($courses))
            <!-- ========================================
                 SERVICE 1: ICT AUDITS & IT LIFECYCLE MANAGEMENT
                 Route: ict-audits
                 Image: uploads/2023/06/ict.jpg
                 Category: IT Audit
            ========================================= -->
            <div class="col">
                <div class="courses__item-two shine__animate-item">
                    <div class="courses__item-two-thumb">
                        <a href="{{ route('service.show', 'ict-audits') }}" class="shine__animate-link">
                            <img src="{{ asset('uploads/2023/06/ict.jpg') }}" alt="ICT audits and IT lifecycle management" />
                        </a>
                    </div>
                    <div class="courses__item-two-content">
                        <div class="courses__item-categories"><a href="#">IT Audit</a></div>
                        <h5 class="title"><a href="{{ route('service.show', 'ict-audits') }}">ICT audits and IT lifecycle management</a></h5>
                        <p class="text-muted small">IT audit services examining and evaluating organization's information technology infrastructure, policies and operations.</p>
                    </div>
                </div>
            </div>

            <!-- ========================================
                 SERVICE 2: OUTSOURCED ICT USER SUPPORT
                 Route: outsourced-ict-support
                 Image: uploads/2023/06/IT training.jpg
                 Category: Support
            ========================================= -->
            <div class="col">
                <div class="courses__item-two shine__animate-item">
                    <div class="courses__item-two-thumb">
                        <a href="{{ route('service.show', 'outsourced-ict-support') }}" class="shine__animate-link">
                            <img src="{{ asset('uploads/2023/06/IT training.jpg') }}" alt="Outsourced ICT user support" />
                        </a>
                    </div>
                    <div class="courses__item-two-content">
                        <div class="courses__item-categories"><a href="#">Support</a></div>
                        <h5 class="title"><a href="{{ route('service.show', 'outsourced-ict-support') }}">Outsourced ICT user support</a></h5>
                        <p class="text-muted small">Flexible first and second lines of IT helpdesk response whether on-premise or remotely based on ITIL framework.</p>
                    </div>
                </div>
            </div>

            <!-- ========================================
                 SERVICE 3: NETWORK INFRASTRUCTURE
                 Route: network-infrastructure
                 Image: images/internet1.jpg
                 Category: Infrastructure
            ========================================= -->
            <div class="col">
                <div class="courses__item-two shine__animate-item">
                    <div class="courses__item-two-thumb">
                        <a href="{{ route('service.show', 'network-infrastructure') }}" class="shine__animate-link">
                            <img src="{{ asset('images/internet1.jpg') }}" alt="Network Infrastructure" />
                        </a>
                    </div>
                    <div class="courses__item-two-content">
                        <div class="courses__item-categories"><a href="#">Infrastructure</a></div>
                        <h5 class="title"><a href="{{ route('service.show', 'network-infrastructure') }}">Network Infrastructure</a></h5>
                        <p class="text-muted small">Complete networking solutions on structured cabling and corporate wireless systems providing comprehensive telecommunication infrastructure.</p>
                    </div>
                </div>
            </div>

            <!-- ========================================
                 SERVICE 4: CLOUD SERVICES
                 Route: cloud-services
                 Image: uploads/2023/06/software development.jpg
                 Category: Cloud
            ========================================= -->
            <div class="col">
                <div class="courses__item-two shine__animate-item">
                    <div class="courses__item-two-thumb">
                        <a href="{{ route('service.show', 'cloud-services') }}" class="shine__animate-link">
                            <img src="{{ asset('uploads/2023/06/software development.jpg') }}" alt="Cloud services" />
                        </a>
                    </div>
                    <div class="courses__item-two-content">
                        <div class="courses__item-categories"><a href="#">Cloud</a></div>
                        <h5 class="title"><a href="{{ route('service.show', 'cloud-services') }}">Cloud services for email, collaboration and file sharing</a></h5>
                        <p class="text-muted small">Cloud services for email & collaboration, application deployment, backup services and artificial intelligence across major cloud providers.</p>
                    </div>
                </div>
            </div>

            <!-- ========================================
                 SERVICE 5: DATACENTER SOLUTIONS
                 Route: datacenter-solutions
                 Image: uploads/2023/06/IT training.jpg
                 Category: Datacenter
            ========================================= -->
            <div class="col">
                <div class="courses__item-two shine__animate-item">
                    <div class="courses__item-two-thumb">
                        <a href="{{ route('service.show', 'datacenter-solutions') }}" class="shine__animate-link">
                            <img src="{{ asset('uploads/2023/06/IT training.jpg') }}" alt="Datacenter solutions" />
                        </a>
                    </div>
                    <div class="courses__item-two-content">
                        <div class="courses__item-categories"><a href="#">Datacenter</a></div>
                        <h5 class="title"><a href="{{ route('service.show', 'datacenter-solutions') }}">Datacenter solutions</a></h5>
                        <p class="text-muted small">Mission critical support for key installations covering virtualization, security and firewalls and enterprise backup.</p>
                    </div>
                </div>
            </div>

            <!-- ========================================
                 SERVICE 6: SECURITY SYSTEMS
                 Route: security-systems
                 Image: uploads/2023/06/cyber.jpg
                 Category: Security
            ========================================= -->
            <div class="col">
                <div class="courses__item-two shine__animate-item">
                    <div class="courses__item-two-thumb">
                        <a href="{{ route('service.show', 'security-systems') }}" class="shine__animate-link">
                            <img src="{{ asset('uploads/2023/06/cyber.jpg') }}" alt="SECURITY SYSTEMS" />
                        </a>
                    </div>
                    <div class="courses__item-two-content">
                        <div class="courses__item-categories"><a href="#">Security</a></div>
                        <h5 class="title"><a href="{{ route('service.show', 'security-systems') }}">SECURITY SYSTEMS</a></h5>
                        <p class="text-muted small">Big Brother service, Covid-19 safety checks, PPE Hakikisha, Resource optimization, Critical Assets KPI's, CCTV Audits, Crime prevention and investigation.</p>
                    </div>
                </div>
            </div>

            <!-- ========================================
                 SERVICE 7: BULK SMS & ERP INTEGRATION
                 Route: bulk-sms
                 Image: images/sms.jpg
                 Category: Messaging
            ========================================= -->
            <div class="col">
                <div class="courses__item-two shine__animate-item">
                    <div class="courses__item-two-thumb">
                        <a href="{{ route('service.show', 'bulk-sms') }}" class="shine__animate-link">
                            <img src="{{ asset('images/sms.jpg') }}" alt="Bulk SMS and Integration to ERP" />
                        </a>
                    </div>
                    <div class="courses__item-two-content">
                        <div class="courses__item-categories"><a href="#">Messaging</a></div>
                        <h5 class="title"><a href="{{ route('service.show', 'bulk-sms') }}">Bulk SMS and Integration to ERP</a></h5>
                        <p class="text-muted small">Automated messaging system delivering recorded voice or text messages to multiple phones automatically with ERP integration.</p>
                    </div>
                </div>
            </div>

            <!-- ========================================
                 SERVICE 8: SOFTWARE SOLUTIONS
                 Route: software-solutions
                 Image: uploads/2023/06/software development.jpg
                 Category: Software
            ========================================= -->
            <div class="col">
                <div class="courses__item-two shine__animate-item">
                    <div class="courses__item-two-thumb">
                        <a href="{{ route('service.show', 'software-solutions') }}" class="shine__animate-link">
                            <img src="{{ asset('uploads/2023/06/software development.jpg') }}" alt="Software solutions" />
                        </a>
                    </div>
                    <div class="courses__item-two-content">
                        <div class="courses__item-categories"><a href="#">Software</a></div>
                        <h5 class="title"><a href="{{ route('service.show', 'software-solutions') }}">Software solutions</a></h5>
                        <p class="text-muted small">Mgeni VMS (visitor management), Orodha (checklist automation), Easy Sign (employee attendance), Workflow (automated system flows).</p>
                    </div>
                </div>
            </div>
            @endif
        </div>
    </div>
</section>
<!-- courses-area-end -->

<!-- cta-area -->
<section class="cta-area-two position-relative">
    <div class="cta__bg" style="background-image:url({{ asset('uploads/2023/07/employees.jpg') }})"></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-8 col-lg-10">
                <div class="cta__content">
                    <p>TRANSFORM YOUR BUSINESS TODAY</p>
                    <h2 class="title">Expert ICT Solutions Across</h2>
                    <h5 class="sub-title">East Africa</h5>
                    <div class="tg-button-wrap justify-content-center">
                        <a href="{{ route('contact') }}" class="btn tg-svg"><span class="text">Get Started</span> <span class="svg-icon" id="cta-btn" data-svg-icon="{{ asset('images/theme/icons/btn-arrow.svg') }}"></span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- cta-area-end -->

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
                        <img src="{{ asset('images/mission.png') }}" alt="Mission" style="width: 80px; height: 80px; object-fit: contain;" loading="lazy">
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
                        <img src="{{ asset('images/vision.png') }}" alt="Vision" style="width: 80px; height: 80px; object-fit: contain;" loading="lazy">
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
                        <img src="{{ asset('images/values.png') }}" alt="Values" style="width: 80px; height: 80px; object-fit: contain;" loading="lazy">
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

<!-- cta-area-three -->
<section class="cta-area-three">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="cta__wrapper" style="background: linear-gradient(135deg, #2467ec 0%, #1a4fb8 100%); position: relative; overflow: hidden;">
                    <div class="section__title white-title">
                        <h2 class="title tg-svg">Transform Your <span class="position-relative"><span class="svg-icon" id="svg-cta-title" data-svg-icon="{{ asset('images/theme/icons/title_shape.svg') }}"></span>Business</span> With Technology</h2>
                    </div>
                    <div class="cta__desc">
                        <p>ICT Africa delivers cutting-edge technology solutions that empower businesses across the continent. Let's work together to drive your digital transformation and achieve sustainable growth.</p>
                    </div>
                    <div class="tg-button-wrap justify-content-center justify-content-md-end">
                        <a href="#contact" class="btn white-btn tg-svg"><span class="text">Get Started</span> <span class="svg-icon" id="cta-btn-partner" data-svg-icon="{{ asset('images/theme/icons/btn-arrow.svg') }}"></span></a>
                    </div>
                    <div class="cta-shape-decoration cta-shape-1" data-aos="fade-down" data-aos-delay="400"></div>
                    <div class="cta-shape-decoration cta-shape-2" data-aos="fade-up" data-aos-delay="500"></div>
                    <div class="cta-shape-decoration cta-shape-3"></div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- cta-area-three-end -->

<!-- contact-section -->
<section id="contact">
<x-contact-section :showImage="true" />
</section>
<!-- contact-section-end -->

@endsection

@push('scripts')
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
    
    // Courses slider with auto-scroll
    jQuery('.courses-slider-active').slick({
        dots: false,
        infinite: true,
        speed: 800,
        autoplay: true,
        autoplaySpeed: 3000,
        arrows: false,
        rtl: false,
        slidesToShow: 4,
        slidesToScroll: 1,
        pauseOnHover: true,
        cssEase: 'ease-in-out',
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
    
    // Custom scroll controls for services
    window.scrollServices = function(direction) {
        if (direction === 'next') {
            jQuery('.courses-slider-active').slick('slickNext');
        } else {
            jQuery('.courses-slider-active').slick('slickPrev');
        }
    };
    
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
        variableWidth: false,
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
                    speed: 2000,
                }
            },
            {
                breakpoint: 575,
                settings: {
                    slidesToShow: 2,
                    speed: 2000,
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
@endpush
