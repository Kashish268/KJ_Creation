<?php
$current_page = basename($_SERVER['PHP_SELF']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>KJ</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <!-- Favicons -->
  <link href="users/img/kj_creation.png" rel="icon">
  <link href="users/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

  <!-- Bootstrap CSS -->
  <link href="users/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS -->
  <link href="users/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="users/lib/animate/animate.min.css" rel="stylesheet">
  <!-- <link href="users/lib/ionicons/css/ionicons.min.css" rel="stylesheet"> -->
  <link href="users/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="users/lib/lightbox/css/lightbox.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

  <!-- Main Stylesheet -->
  <link href="users/css/user2.css" rel="stylesheet">

  <style>

    /* Support Bar (Top Section) */
    .header-top {
      background-color: #333;
      color: #fff;
      font-size: 14px;
      padding: 8px 0;
    }
    .header-top .container {
      display: flex;
      justify-content: space-between;
      align-items: center;
    }
    .top-right a {
      color: #fff;
      margin-left: 10px;
      text-decoration: none;
    }
    .top-right a:hover {
      color: #f46b2c;
    }

    /* Logo and Ad Banner */
    .header-middle {
      background-color: #f2f2f2;
      padding: 20px 0;
      text-align: center;
    }
    .logo-section img {
      max-height: 50px;
      width: auto;
    }

    .logo-section {
    position: relative;
    display: inline-block;
    
}
    
    .ad-banner img {
      max-width: 100%;
      height: auto;
    }

    /* Navbar */
    .header-bottom {
      background-color: rgba(0, 0, 0, 0.9);
      position: relative;
      width: 100%;
      transition: all 0.3s ease-in-out;
    }

    /* Navbar Styling */
    .nav-menu {
      margin: 0;
      padding-top: 8px;
      padding-bottom: 8px;
      list-style: none;
      display: flex;
      /* align-items: center;
    justify-content: center; Centers items */
    flex-wrap: wrap;
    }
    .nav-menu li {
      margin-left: 10px;
    }
    .nav-menu li a {
      color: #fff;
      text-decoration: none;
      font-family: "Montserrat", sans-serif;
      font-weight: 700;
      font-size: 13px;
      text-transform: uppercase;
      padding: 10px;
      transition: color 0.3s ease;
      letter-spacing: 1px;
    }
    .nav-menu li a:hover,
    .nav-menu > .menu-active > a {
      color: rgb(244, 107, 44);
    }

    /* Marquee Section */
    .marquee-container {
      width: 100%;
      background-color: #222;
      color: #fff;
      padding: 10px 0;
      text-align: center;
      font-size: 14px;
      font-weight: bold;
     letter-spacing: 1px;
     font-style: italic;
    }

    /* Sticky Navbar Effect */
    .sticky {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      z-index: 9999; /* Ensure the navbar stays on top */
    }
    .header-wrapper {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      z-index: 1000; /* Ensures it stays above regular content */
      background: #fff; /* Add background color to prevent transparency */
}
.instagram {
    position: relative;
    display: inline-block;
    text-decoration: none;
    color: #000;
}

.hover-text {
    visibility: hidden;
    background-color: #000;
    color: #fff;
    text-align: center;
    padding: 5px;
    border-radius: 5px;
    
    position: absolute;
    top: 100%; /* Adjusted to appear below */
    left: 50%;
    transform: translateX(-50%);
    white-space: nowrap;
    margin-top: 5px; /* Adds space between the icon and text */
    
    opacity: 0;
    transition: opacity 0.3s;
}

.instagram:hover .hover-text,
.linkedin:hover .hover-text {
    visibility: visible;
    opacity: 1;
}


    
  </style>
</head>
<body>
<button type="button" id="mobile-nav-toggle">
        <i class="fa fa-bars"></i>
      </button>
  <main id="main">
<div class="header-wrapper">
  <!-- Support Section (Top Bar) -->
  <div class="header-top">
    <div class="container">
      
      <div class="top-left">
      <span id="current-date"></span>
      <script>
    // Get current date
    const today = new Date();
    const options = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' };
    const formattedDate = today.toLocaleDateString('en-US', options);

    // Display the date
    document.getElementById('current-date').textContent = formattedDate;
</script>
      </div>
      <div class="top-right">
      <div class="social-links">
              <!-- <a href="#" class="twitter"><i class="fa fa-twitter"></i></a> -->
              <a href="https://www.facebook.com/profile.php?id=61564031892075" class="facebook" target="_blank" rel="noopener noreferrer"><i class="fab fa-facebook-f"></i></a>
              <a href="https://www.instagram.com/kjcreations4all?igsh=bHQzanh5NDQzZ2V2" class="instagram" target="_blank" rel="noopener noreferrer"><i class="fab fa-instagram"></i></a>
              <a href="" class="instagram" target="_blank" rel="noopener noreferrer"><i class="fab fa-whatsapp">
              <span class="hover-text">+91 96628 76676</span>
              </i></a>
             <a href="" class="linkedin" style="position:relative;">
    <i class="fa fa-envelope"></i>
    <span class="hover-text">kjcreation4all@gmail.com</span>
</a>
       </div>
      </div>
    </div>
  </div>

  <!-- Logo + Ad Banner -->
  <div class="header-middle">
    <div class="container">
    <!-- <button type="button" id="mobile-nav-toggle">
        <i class="fa fa-bars"></i>
      </button> -->
      <div class="logo-section">
      <img src="img/kj_1.png" alt="Side Logo" title="Side Logo" class="side-logo" style="margin-right:10px;"/>
        <img src="users/myimg/kj creations.png" alt="KJ Logo" title="KJ" />
      </div>
      <div class="ad-banner">
        <div class="base-line" style="padding-top:2px;">CORPORATE GIFT | TREDITIONAL | DEVOTIONAL</div>
      </div>
    </div>
  </div>

  <!-- Bottom Navbar -->
   
  <div class="header-bottom" id="navbar">
    <div class="container">
      
    <nav id="nav-menu-container">
    <ul class="nav-menu sf-js-enabled sf-arrows center" style="touch-action: pan-y;">
    <li class="<?= ($current_page == 'index.php') ? 'menu-active':''?>"><a href="index.php">Home</a></li>
          <li class="<?= ($current_page == 'about.php') ? 'menu-active':''?>"><a href="about.php">About Us</a></li>
          <li class="<?= ($current_page == 'user_products.php') ? 'menu-active':''?>"><a href="user_products.php">Products</a></li>
          <li class="<?= ($current_page == 'user_offers.php') ? 'menu-active':''?>"><a href="user_offers.php">Offers & Reviews</a></li>
          <li class="<?= ($current_page == 'contact.php') ? 'menu-active':''?>"><a href="contact.php">Contact</a></li>
          <li>
          <a href="login.php" class="btn btn-primary"
          style=" background: linear-gradient(90deg, #FF7F50, #FF4500); color: white; border:none ;  border-radius: 45px; padding-inline:20px;" target="_blank">Login</a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
      
    </div>
    
    <div class="marquee-container" id="marquee">
    <marquee behavior="scroll" direction="left" scrollamount="5">
      Welcome to KJ Website! Enjoy our products and services.
    </marquee>
  </div>
  </div>
</div>
</main>
  



</body>
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
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-migrate/3.3.2/jquery-migrate.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

<script src="users/lib/touchSwipe/jquery.touchSwipe.min.js"></script>
<script src="users/js/main.js" defer></script>

<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script> -->
<!-- Contact Form JavaScript File -->
<!-- <script src="users/contactform/contactform.js"></script> -->

<!-- Template Main Javascript File -->
</html>

