<!-- contact-area -->
<section class="contact-area section-py-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                @if(isset($showImage) && $showImage)
                <!-- Image display for homepage -->
                <div class="contact-image-wrap">
                    <img src="{{ asset('images/black man headpone.png') }}" alt="Customer Support" class="img-fluid rounded">
                </div>
                @else
                <!-- Contact info display for contact page -->
                <div class="contact-info-wrap">
                    <h2 class="title">Keep In Touch With Us</h2>
                    <p>We're here to help transform your digital vision into reality. Reach out to us for innovative ICT solutions, training programs, or partnership opportunities across East Africa.</p>
                    <ul class="list-wrap">
                        <li>
                            <div class="icon">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div class="content">
                                <p>8th & 9th Floor, The Odyssey Building <br> 84 Muthithi Road, Westlands, Nairobi</p>
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <i class="fas fa-phone-alt"></i>
                            </div>
                            <div class="content">
                                <p>+254 (0)715 995 266 / 775 995 266 <br> +254 (0)736 995 266</p>
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div class="content">
                                <p>icta.automation@ict-a.com</p>
                            </div>
                        </li>
                    </ul>
                </div>
                @endif
            </div>
            <div class="col-lg-7">
                <div class="contact-form-wrap">
                    <h2 class="title">Get in Touch</h2>
                    
                    @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                    @endif
                    
                    @if($errors->any())
                    <div class="alert alert-danger">
                        <ul class="mb-0">
                            @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    
                    <form action="{{ route('contact.submit') }}" method="POST" class="contact-form">
                        @csrf
                        <div class="cta-form">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-grp">
                                        <input type="text" name="name" class="form-control" placeholder="Name" value="{{ old('name') }}" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-grp">
                                        <input type="email" name="email" class="form-control" placeholder="Email*" value="{{ old('email') }}" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-grp">
                                        <input type="text" name="phone" class="form-control" placeholder="Phone" value="{{ old('phone') }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-grp">
                                        <input type="text" name="subject" class="form-control" placeholder="Subject*" value="{{ old('subject') }}" required>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-grp">
                                        <textarea name="message" class="form-control" rows="4" placeholder="Your Message*" required>{{ old('message') }}</textarea>
                                    </div>
                                    <button type="submit" class="btn submit-btn">Send Message</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- contact-area-end -->

<style>
/* Contact info icons styling */
.contact-info-wrap .icon i {
    font-size: 24px;
    color: #2467ec;
    display: inline-block;
}

/* Contact image styling */
.contact-image-wrap {
    position: relative;
    height: 100%;
    display: flex;
    align-items: center;
}

.contact-image-wrap img {
    width: 100%;
    height: auto;
    object-fit: cover;
    border-radius: 15px;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
}

@media (max-width: 991.98px) {
    .contact-image-wrap {
        margin-bottom: 30px;
    }
}
</style>
