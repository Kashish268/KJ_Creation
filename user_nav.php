<?php
$current_page = basename($_SERVER['PHP_SELF']);

// Fetch headlines
$headlines = [];
$sql = "SELECT text_value, color_code FROM headlines";
$result = $conn->query($sql);
if ($result && $result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $headlines[] = [
            'text' => $row['text_value'],
            'color' => $row['color_code']
        ];
    }
} else {
    $headlines[] = [
        'text' => 'Welcome to KJ Creations! Corporate Gifts | Traditional | Devotional | Best Quality | Fast Delivery | Contact: +91 98986 98228',
        'color' => '#FFFFFF'
    ];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>KJ Creations</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <!-- Favicons -->
  <link href="users/img/kj_creation.png" rel="icon">
  <link href="users/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700&display=swap" rel="stylesheet">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">

  <style>
    body {
      font-family: "Open Sans", sans-serif;
      margin: 0;
      padding-top: 200px;
    }

    .fixed-navbar {
      position: fixed;
      top: 0;
      width: 100%;
      z-index: 9999;
      background: #fff;
      border-top: 5px solid #092e20;
      box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
    }

    .logo-section {
      display: flex;
      flex-direction: row;
    }

    .logo-left {
      background-color: #092e20;
      width: 20%;
    }

    .logo-right {
      background: #ffffff;
      width: 80%;
      padding: 10px 0;
      text-align: center;
    }

    .logo-text {
      font-size: 13px;
      font-weight: 600;
      color: #092e20;
      text-transform: uppercase;
      letter-spacing: 0.5px;
      margin-bottom: 5px;
    }

    .brand-logo {
      max-height: 60px;
      width: auto;
    }

    @media (max-width: 576px) {
      .brand-logo {
        max-height: 40px;
      }
    }

    .navbar-custom {
      background: #ffffff;
    }

    .navbar-custom .nav-link {
      color: #092e20 !important;
      text-transform: uppercase;
      margin-right: 20px;
      font-weight: 600;
      transition: color 0.3s;
    }

    .navbar-custom .nav-link.active,
    .navbar-custom .nav-link:hover {
      color: #f46b2c !important;
    }

    .contact-info-bar {
      background-color: #092e20;
      color: white;
    }

    .contact-info-bar i,
    .contact-info-bar span,
    .contact-info-bar a {
      color: white;
    }

    .marquee-row {
      background: #092e20;
    }

    .marquee-row marquee {
      color: #f46b2c;
      font-weight: 600;
      padding: 4px 0;
      letter-spacing: 1px;
    }

    .navbar-toggler:focus {
      box-shadow: none;
      outline: none;
    }

    .navbar-brand-mobile {
      display: none;
    }

    @media (max-width: 576px) {
      .navbar-brand-mobile {
        display: flex !important;
        align-items: center;
      }

      .logo-section {
        display: none !important; /* completely hide green logo section on mobile */
      }
    }
  </style>
</head>

<body>
  <div class="fixed-navbar">
    <div class="container-fluid px-0">
      <div class="row gx-0">

        <!-- Logo section (desktop only) -->
        <div class="col-lg-3 logo-section d-none d-lg-flex">
          <div class="logo-left"></div>
          <div class="logo-right">
            <a href="#" class="navbar-brand w-100 m-0 p-0 d-flex align-items-center justify-content-center">
              <img src="img/kj_final.png" alt="KJ CREATIONS" class="brand-logo">
            </a>
            <div class="logo-text">CORPORATE GIFT | TREDITIONAL | DEVOTIONAL</div>
          </div>
        </div>

        <!-- Contact Info + Navbar + Marquee -->
        <div class="col-lg-9 px-0">
          <!-- Contact Info -->
          <div class="row gx-0 d-none d-lg-flex align-items-center contact-info-bar">
            <div class="col-lg-7 px-5 text-start">
              <div class="h-100 d-inline-flex align-items-center py-2 me-4">
                <i class="fa fa-envelope"></i>
                <span class="mb-0 ms-2">kjcreation4all@gmail.com</span>
              </div>
              <div class="h-100 d-inline-flex align-items-center py-2">
                <i class="fa fa-phone-alt"></i>
                <span class="mb-0 ms-2">+91 98986 98228</span>
              </div>
            </div>
            <div class="col-lg-5 px-5 text-end">
              <div class="d-inline-flex align-items-center py-2">
                  <a class="me-3" href="https://www.facebook.com/profile.php?id=61564031892075"><i class="fab fa-facebook-f"></i></a>
              <a class="me-3" href="https://www.instagram.com/kjcreations4all?igsh=bHQzanh5NDQzZ2V2"><i class="fab fa-instagram"></i></a>
              <a class="me-3" href="https://chat.whatsapp.com/F0xId36zZE23wq7PiN4LwC"><i class="fab fa-whatsapp"></i></a>
              <!-- <a class="me-3" href="#"><i class="fa fa-envelope"></i></a> -->
              </div>
            </div>
          </div>

          <!-- Navbar -->
          <nav class="navbar navbar-expand-lg navbar-custom px-3">
            <!-- Mobile view: Logo and Toggle in same line -->
            <div class="d-flex w-100 justify-content-between align-items-center d-lg-none">
              <a href="#" class="navbar-brand navbar-brand-mobile d-flex align-items-center">
                <img src="img/kj_final.png" alt="KJ CREATIONS" class="brand-logo me-2">

              </a>

              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <i class="fas fa-bars" style="color:#092e20; font-size: 24px;"></i>
              </button>
            </div>

            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
              <div class="navbar-nav mr-auto py-0">
                 <a href="index.php" class="nav-item nav-link <?php if($current_page == 'index.php'){echo 'active';} ?>">Home</a>
              <a href="about.php" class="nav-item nav-link <?php if($current_page == 'about.php'){echo 'active';} ?>">About</a>
              <a href="user_products.php" class="nav-item nav-link <?php if($current_page == 'user_products.php' || $current_page == 'product_details.php'){echo 'active';} ?>">Products</a>
              <a href="user_offers.php" class="nav-item nav-link <?php if($current_page == 'user_offers.php'){echo 'active';} ?>">Offers & Reviews</a>
              <a href="contact.php" class="nav-item nav-link <?php if($current_page == 'contact.php'){echo 'active';} ?>">Contact</a>
              </div>
              <a href="login.php" target="_blank" class="btn btn-primary py-2 px-4 rounded-pill d-none d-lg-block" style="background:linear-gradient(90deg, #FF7F50, #FF4500);border:none;">LOGIN</a>
            </div>
          </nav>

          <!-- Marquee -->
          <div class="row gx-0 marquee-row">
            <div class="col-12">
               <marquee>
  <?php
    foreach ($headlines as $headline) {
        echo "<span style='color: {$headline['color']}; margin-right: 50px;'>{$headline['text']}</span>";
    }
  ?>
</marquee>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>

  <!-- Bootstrap Bundle -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
