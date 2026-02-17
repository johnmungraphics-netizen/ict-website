<div class="hero-card-wrapper">
    <div class="hero-card">
        <div class="hero-card-content">
            <h2 class="hero-card-title"><?php echo e($title); ?></h2>
            <a href="<?php echo e($link); ?>" class="hero-card-btn"><?php echo e($buttonText); ?></a>
        </div>
        <div class="hero-card-image">
            <div class="sun-burst"></div>
            <img src="<?php echo e(asset($image)); ?>" alt="Person with PC" class="person-image">
        </div>
    </div>
</div>

<style>
.hero-card-wrapper {
    padding: 0;
}

.hero-card {
    position: relative;
    background: linear-gradient(135deg, #5B21B6 0%, #7C3AED 50%, #8B5CF6 100%);
    border-radius: 24px;
    overflow: hidden;
    min-height: 320px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 40px 50px;
    box-shadow: 0 10px 40px rgba(91, 33, 182, 0.3);
}

.hero-card-content {
    position: relative;
    z-index: 3;
    max-width: 45%;
    flex-shrink: 0;
}

.hero-card-title {
    color: #ffffff;
    font-size: 32px;
    font-weight: 700;
    line-height: 1.3;
    margin-bottom: 30px;
}

.hero-card-btn {
    display: inline-block;
    background-color: #ffffff;
    color: #5B21B6;
    padding: 14px 32px;
    border-radius: 8px;
    font-weight: 600;
    font-size: 14px;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    transition: all 0.3s ease;
    text-decoration: none;
}

.hero-card-btn:hover {
    background-color: #f0f0f0;
    transform: translateY(-2px);
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
    color: #5B21B6;
}

.hero-card-image {
    position: relative;
    z-index: 2;
    max-width: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
}

.sun-burst {
    position: absolute;
    width: 280px;
    height: 280px;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    z-index: 1;
}

.sun-burst::before {
    content: '';
    position: absolute;
    width: 100%;
    height: 100%;
    background: radial-gradient(circle, rgba(234, 179, 8, 0.4) 0%, rgba(234, 179, 8, 0) 70%);
    border-radius: 50%;
}

.sun-burst::after {
    content: '';
    position: absolute;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    background-image: 
        linear-gradient(0deg, transparent 48%, #EAB308 48%, #EAB308 52%, transparent 52%),
        linear-gradient(30deg, transparent 48%, #EAB308 48%, #EAB308 52%, transparent 52%),
        linear-gradient(60deg, transparent 48%, #EAB308 48%, #EAB308 52%, transparent 52%),
        linear-gradient(90deg, transparent 48%, #EAB308 48%, #EAB308 52%, transparent 52%),
        linear-gradient(120deg, transparent 48%, #EAB308 48%, #EAB308 52%, transparent 52%),
        linear-gradient(150deg, transparent 48%, #EAB308 48%, #EAB308 52%, transparent 52%);
    opacity: 0.7;
}

.person-image {
    position: relative;
    z-index: 2;
    max-width: 100%;
    height: auto;
    max-height: 320px;
    object-fit: contain;
}

/* Decorative wave at bottom left */
.hero-card::before {
    content: '';
    position: absolute;
    bottom: 0;
    left: 0;
    width: 200px;
    height: 100px;
    background: rgba(255, 255, 255, 0.1);
    border-radius: 0 100px 0 0;
}

@media (max-width: 991.98px) {
    .hero-card {
        flex-direction: column;
        padding: 40px 30px;
        min-height: auto;
    }
    
    .hero-card-content {
        max-width: 100%;
        text-align: center;
        margin-bottom: 30px;
    }
    
    .hero-card-title {
        font-size: 26px;
        margin-bottom: 20px;
    }
    
    .hero-card-image {
        max-width: 80%;
    }
    
    .sun-burst {
        width: 200px;
        height: 200px;
    }
    
    .person-image {
        max-height: 250px;
    }
}

@media (max-width: 767.98px) {
    .hero-card {
        padding: 30px 20px;
    }
    
    .hero-card-title {
        font-size: 22px;
    }
    
    .hero-card-btn {
        padding: 12px 28px;
        font-size: 13px;
    }
    
    .hero-card-image {
        max-width: 100%;
    }
    
    .person-image {
        max-height: 200px;
    }
}
</style>
<?php /**PATH C:\ICT11\ICT1\eduvalt-laravel\resources\views/components/hero-card.blade.php ENDPATH**/ ?>