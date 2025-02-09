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
  <link href="users/lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="users/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="users/lib/lightbox/css/lightbox.min.css" rel="stylesheet">

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
      padding: 15px 0;
      text-align: center;
    }
    .logo-section img {
      max-height: 50px;
      width: auto;
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
      align-items: center;
      justify-content: center;
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
      /* position: relative; */
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
    
  </style>
</head>
<body>
  <main id="main">
<div class="header-wrapper">
  <!-- Support Section (Top Bar) -->
  <div class="header-top">
    <div class="container">
      
      <div class="top-left">
        <span>Tuesday, January 4, 2025</span>
      </div>
      <div class="top-right">
        <a href="#">Support</a>
        <span>|</span>
        <a href="#">Documentation</a>
        <span>|</span>
        <a href="#">Buy Now</a>
      </div>
    </div>
  </div>

  <!-- Logo + Ad Banner -->
  <div class="header-middle">
    <div class="container">
      <div class="logo-section">
        <img src="users/myimg/kj_1.png" alt="KJ Logo" title="KJ" />
      </div>
      <div class="ad-banner">
        <img src="https://via.placeholder.com/468x60?text=Ad+Banner" alt="Advertisement Banner">
      </div>
    </div>
  </div>

  <!-- Bottom Navbar -->
  <div class="header-bottom" id="navbar">
    <div class="container">
    <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class=""><a href="index.php">Home</a></li>
          <li><a href="about.php">About Us</a></li>
          <li><a href="user_products.php">Products</a></li>
          <li><a href="user_offers.php">Offers & Reviews</a></li>
          <li><a href="contact.php">Contact</a></li>
          <li><a href="login.php" class="btn btn-primary" style=" background: linear-gradient(90deg, #FF7F50, #FF4500); 
          /* Orange gradient */
  color: white; border:none ;  border-radius: 45px;
">Login</a></li>
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
  <!-- Marquee -->
 

  <!-- Sticky Navbar & Marquee Script -->
  <!-- <script>
    window.addEventListener("scroll", function () {
      let navbar = document.getElementById("navbar");

      if (window.scrollY > navbar.offsetTop) {
        navbar.classList.add("sticky");
      } else {
        navbar.classList.remove("sticky");
      }
    });
  </script> -->
<script src="js/main.js"></script>
</body>
</html>
