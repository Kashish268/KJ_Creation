<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carousel</title>
    <link rel="stylesheet" href="user_.css">

    <!-- Swiper.js CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
</head>
<body>
    <?php include 'user_navbar.php'; ?>

    <!-- Carousel Section -->
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <!-- Slides -->
            <div class="swiper-slide">
                <div class="image-overlay">
                    <img src="../img/corosole1.jpg" alt="Slide 1">
                </div>
                <div class="caption">Welcome to Our Website!</div>
            </div>
            <div class="swiper-slide">
                <div class="image-overlay">
                    <img src="../img/corosole2.jpg" alt="Slide 2">
                </div>
                <div class="caption">Explore Our Products</div>
            </div>
            <div class="swiper-slide">
                <div class="image-overlay">
                    <img src="../img/corosole3.jpg" alt="Slide 3">
                </div>
                <div class="caption">Contact Us Anytime</div>
            </div>
        </div>
        <!-- Pagination -->
        <div class="swiper-pagination"></div>
    </div>

    <!-- Swiper.js Script -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
        const swiper = new Swiper('.swiper-container', {
            loop: true,
            autoplay: {
                delay: 3500,
                disableOnInteraction: false,
            },
            effect: 'fade',
            fadeEffect: {
                crossFade: true,
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
        });
    </script>
</body>
</html>
