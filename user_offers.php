<?php
include 'database/config.php';

// Fetch the latest offer from the database
$sql = "SELECT * FROM offers ORDER BY id DESC LIMIT 1"; 
$result = mysqli_query($conn, $sql);
$offer = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>KJ CREATION</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/kj_1.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <!-- <link href="users/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet"> -->

  <!-- Libraries CSS Files -->
  <link href="users/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="users/lib/animate/animate.min.css" rel="stylesheet">
  <link href="users/lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="users/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="users/lib/lightbox/css/lightbox.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="users/css/user2.css" rel="stylesheet">
<style>
    .offer-details, .support-details {
    min-height: 450px; /* Adjust as needed */
    display: flex;
    flex-direction: column;
    justify-content: center;
    }

      /* Right Column (24-Hour Support) */
    .offer-support-section {
        display: flex;
        flex-wrap: wrap;
        margin: 0;
    }

    .offer-details, .support-details {
        flex: 1;
        padding: 30px;
        margin: 0;
    }

    .offer-details {
        background:white;     
        text-align: center;
        box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.1);
    }

    .offer-details h4, .offer-details p {
        font-weight: 700;
    }

    .offer-details img {
        width: 100%;
        
    }

    /* .offer-details img:hover {
        transform: scale(1.05);
    } */
    .support-details {
        background-color: rgb(45, 58, 48);
        /* border-left: 3px dashed rgb(244, 107, 44); */
        color: white;   
        box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.3);
        text-align: center;
    }

    .support-details h4, .support-details h2, .support-details p {
        color: rgb(244, 107, 44);
    }

    .support-details h2 {
        font-weight: 900;
    }

    .support-details p {
        font-weight: 500;
    }
    
</style>
</head>
<body  onload="myFunction()">

<?php include 'user_nav.php'; ?>



  <section id="offers" class="py-5" style="background-color:#f7f7f7;">
    <div class="container">
      <!-- <header class="text-center mb-4"> -->
      <header class="section-header">
        <h3 class="section-title" style="color:black;">Exclusive Offers</h3>

        <h5 style="color:black; text-align:center;">Grab the best deals and enjoy top-tier support, available 24/7 for your convenience.</h5>
      </header>
      <div class="offer-support-section">
        <div class="offer-details">
          <?php if ($offer): ?>
            <h4>🔥 <?= htmlspecialchars($offer['title']); ?> - <span style="color: red;"><?= htmlspecialchars($offer['offer_percentage']); ?> OFF</span></h4>
            <p><strong>Offer Code:</strong> <?= htmlspecialchars($offer['offer_code']); ?></p>
            <p><?= htmlspecialchars($offer['description']); ?></p>
            <img src="uploaded_images/<?= htmlspecialchars($offer['image']); ?>" alt="Offer Image">
          <?php else: ?>
            <h4>No active offers available.</h4>
          <?php endif; ?>
        </div>

        <div class="support-details p-4  shadow text-center">
    <!-- <h4>💡 Why Choose Us?</h4> -->
    <br>
    <div class="row my-3">
        <div class="col-6">
            <h2 style="color: rgb(244, 107, 44);"><span data-toggle="counter-up">200</span>+</h2>
            <p style="color:rgb(244, 107, 44);;"><b>Total Products</b></p>
        </div>
        <div class="col-6">
            <h2 style="color: rgb(244, 107, 44);"><span data-toggle="counter-up">10,000</span>+</h2>
            <p style="color:rgb(244, 107, 44);;"><b>Satisfied Customers</b></p>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <h2 style="color: rgb(244, 107, 44);"><span data-toggle="counter-up">24</span></h2>
            <p style="color:rgb(244, 107, 44);;"><b>Hours of Support</b></p>
        </div>
    </div>
<br><br>
    <!-- Unique Offer Quotes Section -->
    <p style="font-size: 24px; font-weight: bold; background: -webkit-linear-gradient(45deg,rgb(255, 254, 254),rgb(233, 233, 233)); -webkit-background-clip: text; color: transparent; text-align: center; line-height: 1;">
<!-- <span style="font-size: 48px; font-weight: bold; color: white;">&#8220;</span>  -->
Unbeatable offers, unmatched support<br><br>
<span style="display: block; font-size: 24px;">—because you deserve both!
    <!-- <span style="font-size: 48px; font-weight: bold; color: white;">&#8221;</span> -->
</span>
</p>

    <p class="mt-3" style="color:rgba(239, 238, 238, 0.9);">We ensure top-notch service and <b>quick resolutions</b> for all your concerns!</p>
</div>


      </div>
    </div>
  </section>

  <section id="testimonials" class="section-bg wow fadeInUp">
      <div class="container">

        <header class="section-header">
          <h3 class="section-title" style="color:black;">Testimonials</h3>
        </header>

        <div class="owl-carousel testimonials-carousel">

<div class="testimonial-item">
    <img src="img/testimonial-1.jpg" class="testimonial-img" alt="">
    <h3>Ananya Sharma</h3>
    <h4>Handicraft Enthusiast</h4>
    <p>
        <img src="img/quote-sign-left.png" class="quote-sign-left" alt="">
        The handcrafted items from KJ Creation are truly beautiful! The attention to detail is amazing, and each piece feels unique. I purchased a decorative vase, and it's now the centerpiece of my home.
        <img src="img/quote-sign-right.png" class="quote-sign-right" alt="">
    </p>
</div>

<div class="testimonial-item">
    <img src="img/testimonial-2.jpg" class="testimonial-img" alt="">
    <h3>Riya Verma</h3>
    <h4>Fashion Blogger</h4>
    <p>
        <img src="img/quote-sign-left.png" class="quote-sign-left" alt="">
        Absolutely in love with the handmade purses! The craftsmanship is top-notch, and the designs are both stylish and durable. I've received so many compliments on my purchase.
        <img src="img/quote-sign-right.png" class="quote-sign-right" alt="">
    </p>
</div>

<div class="testimonial-item">
    <img src="img/testimonial-3.jpg" class="testimonial-img" alt="">
    <h3>Neha Patel</h3>
    <h4>Home Decor Lover</h4>
    <p>
        <img src="img/quote-sign-left.png" class="quote-sign-left" alt="">
        I ordered some handcrafted wall hangings, and they exceeded my expectations. The quality, the colors, and the intricate work make them stand out. Definitely recommend KJ Creation!
        <img src="img/quote-sign-right.png" class="quote-sign-right" alt="">
    </p>
</div>

<div class="testimonial-item">
    <img src="img/testimonial-4.jpg" class="testimonial-img" alt="">
    <h3>Arjun Mehta</h3>
    <h4>Regular Customer</h4>
    <p>
        <img src="img/quote-sign-left.png" class="quote-sign-left" alt="">
        Excellent customer service! I had a minor issue with my order, but the team at KJ Creation was very responsive and resolved it quickly. Great products and even better service!
        <img src="img/quote-sign-right.png" class="quote-sign-right" alt="">
    </p>
</div>

<div class="testimonial-item">
    <img src="img/testimonial-5.jpg" class="testimonial-img" alt="">
    <h3>Priya Kapoor</h3>
    <h4>Gift Shopper</h4>
    <p>
        <img src="img/quote-sign-left.png" class="quote-sign-left" alt="">
        KJ Creation's handicrafts make perfect gifts! I bought a few purses and jewelry boxes for friends, and they loved them. The packaging was also beautiful.
        <img src="img/quote-sign-right.png" class="quote-sign-right" alt="">
    </p>
</div>

</div>

    </section>

        </body>

        <?php include 'footer.php'; ?>
  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <!-- Uncomment below i you want to use a preloader -->
  <!-- <div id="preloader"></div> -->

  <!-- JavaScript Libraries -->
   <!-- Bootstrap JS (Make sure it's included) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

  <script src="users/lib/jquery/jquery.min.js"></script>
  <script src="users/lib/jquery/jquery-migrate.min.js"></script>
  <script src="users/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="users/lib/easing/easing.min.js"></script>
  <script src="users/lib/superfish/hoverIntent.js"></script>
  <script src="users/lib/superfish/superfish.min.js"></script>
  <script src="users/lib/wow/wow.min.js"></script>
  <script src="users/lib/waypoints/waypoints.min.js"></script>
  <script src="users/lib/counterup/counterup.min.js"></script>
  <script src="users/lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="users/lib/isotope/isotope.pkgd.min.js"></script>
  <script src="users/lib/lightbox/js/lightbox.min.js"></script>
  <script src="users/lib/touchSwipe/jquery.touchSwipe.min.js"></script>
  <!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> -->
  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script> -->
  <!-- Contact Form JavaScript File -->
  <!-- <script src="users/contactform/contactform.js"></script> -->

  <!-- Template Main Javascript File -->
  <script src="users/js/main.js"></script>
</html>