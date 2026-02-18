<!-- contact-area -->
<section class="contact-area section-py-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <?php if(isset($showImage) && $showImage): ?>
                <!-- Image display for homepage -->
                <div class="contact-image-wrap">
                    <img src="<?php echo e(asset('images/black man headpone.png')); ?>" alt="Customer Support" class="img-fluid rounded">
                </div>
                <?php else: ?>
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
                <?php endif; ?>
            </div>
            <div class="col-lg-7">
                <?php if(isset($showImage) && $showImage): ?>
                <!-- Contact information display for homepage -->
                <div class="contact-info-wrap">
                    <h2 class="title">Get In Touch With Us</h2>
                    <p class="mb-4">We're here to help transform your digital vision into reality. Reach out to us for innovative ICT solutions, training programs, or partnership opportunities across East Africa.</p>
                    
                    <div class="contact-info-list">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="contact-info-item">
                                    <h5>Our Location</h5>
                                    <p>8th & 9th Floor, The Odyssey Building <br> 84 Muthithi Road, Westlands, Nairobi, Kenya</p>
                                </div>
                                
                                <div class="contact-info-item">
                                    <h5>Phone Numbers</h5>
                                    <p>
                                        <a href="tel:+254715995266">+254 (0)715 995 266</a> / 
                                        <a href="tel:+254775995266">775 995 266</a><br>
                                        <a href="tel:+254736995266">+254 (0)736 995 266</a>
                                    </p>
                                </div>
                            </div>
                            
                            <div class="col-md-6">
                                <div class="contact-info-item">
                                    <h5>Email Address</h5>
                                    <p><a href="mailto:icta.automation@ict-a.com">icta.automation@ict-a.com</a><br>
                                    <a href="mailto:info@ict-a.com">info@ict-a.com</a></p>
                                </div>
                                
                                <div class="contact-info-item">
                                    <h5>Working Hours</h5>
                                    <p>Monday - Friday: 8:00 AM - 5:00 PM<br>Saturday - Sunday: Closed</p>
                                </div>
                            </div>
                        </div>
                        
                
                    </div>
                </div>
                <?php else: ?>
                <!-- Contact form display for contact page -->
                <div class="contact-form-wrap">
                    <h2 class="title">Get in Touch</h2>
                    
                    <?php if(session('success')): ?>
                    <div class="alert alert-success">
                        <?php echo e(session('success')); ?>

                    </div>
                    <?php endif; ?>
                    
                    <?php if($errors->any()): ?>
                    <div class="alert alert-danger">
                        <ul class="mb-0">
                            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li><?php echo e($error); ?></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                    <?php endif; ?>
                    
                    <form action="<?php echo e(route('contact.submit')); ?>" method="POST" class="contact-form">
                        <?php echo csrf_field(); ?>
                        <div class="cta-form">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-grp">
                                        <input type="text" name="name" class="form-control" placeholder="Name" value="<?php echo e(old('name')); ?>" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-grp">
                                        <input type="email" name="email" class="form-control" placeholder="Email*" value="<?php echo e(old('email')); ?>" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-grp">
                                        <input type="text" name="phone" class="form-control" placeholder="Phone" value="<?php echo e(old('phone')); ?>">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-grp">
                                        <input type="text" name="subject" class="form-control" placeholder="Subject*" value="<?php echo e(old('subject')); ?>" required>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-grp">
                                        <textarea name="message" class="form-control" rows="4" placeholder="Your Message*" required><?php echo e(old('message')); ?></textarea>
                                    </div>
                                    <button type="submit" class="btn submit-btn">Send Message</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <?php endif; ?>
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

/* Contact info item styling for homepage - Two column layout without icons */
.contact-info-item {
    margin-bottom: 25px;
    padding: 20px;
    background: #f8f9fa;
    border-radius: 10px;
    transition: all 0.3s ease;
    border-left: 4px solid #2467ec;
}

.contact-info-item:hover {
    background: #fff;
    box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
    transform: translateX(5px);
}

.contact-info-item h5 {
    font-size: 18px;
    font-weight: 600;
    color: #1a1a1a;
    margin-bottom: 10px;
}

.contact-info-item p {
    margin-bottom: 0;
    color: #666;
    line-height: 1.8;
    font-size: 15px;
}

.contact-info-item a {
    color: #2467ec;
    text-decoration: none;
    transition: color 0.3s ease;
}

.contact-info-item a:hover {
    color: #1a4fb8;
    text-decoration: underline;
}

/* Social links styling */
.social-links .social-icon {
    width: 40px;
    height: 40px;
    background: #2467ec;
    border-radius: 50%;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    color: #ffffff;
    font-size: 16px;
    text-decoration: none;
    transition: all 0.3s ease;
}

.social-links .social-icon:hover {
    background: #1a4fb8;
    transform: translateY(-3px);
    box-shadow: 0 5px 15px rgba(36, 103, 236, 0.3);
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
    
    .contact-info-item {
        padding: 15px;
    }
}

@media (max-width: 767.98px) {
    .contact-info-list .row > .col-md-6 {
        margin-bottom: 0;
    }
}
</style>
<?php /**PATH C:\ICT11\ICT1\ICT WEBSITE\eduvalt-laravel\resources\views/components/contact-section.blade.php ENDPATH**/ ?>