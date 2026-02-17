@extends('layouts.app')

@section('title', 'Contact - Eduvalt')

@push('styles')
<style>
/* Contact info icons styling */
.contact-info-wrap .icon i {
    font-size: 24px;
    color: #2467ec;
    display: inline-block;
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
                    <h3 class="title">Contact</h3>
                    <nav aria-label="breadcrumb" class="breadcrumb">
                        <span><a href="{{ route('home') }}">Home</a></span>
                        <span class="breadcrumb-separator"><i class="fas fa-angle-right"></i></span>
                        <span class="current-item">Contact</span>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb-area-end -->

<!-- contact-section -->
<x-contact-section />
<!-- contact-section-end -->

<!-- map-area -->
<section class="map-area">
    <div class="contact-map">
        <iframe 
            src="https://maps.google.com/maps?q=The+Odyssey+Building,+Muthithi+Road,+Westlands,+Nairobi,+Kenya&amp;t=m&amp;z=15&amp;output=embed&amp;iwloc=near"
            title="ICT Africa - The Odyssey Building, Westlands, Nairobi"
            aria-label="ICT Africa - The Odyssey Building, Westlands, Nairobi"
            style="width: 100%; height: 450px; border: 0;"
            loading="lazy"
        ></iframe>
    </div>
</section>
<!-- map-area-end -->
@endsection
