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
        'text' => 'Welcome to KJ Creations! Corporate Gifts | Traditional | Devotional | Best Quality | Fast Delivery | Contact: +91 96628 76676',
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

  <!-- Custom CSS -->
  <style>
    body {
      font-family: "Open Sans", sans-serif;
      margin: 0;
      padding-top: 200px; /* Adjust based on your header/marquee height */
    }

    .fixed-navbar {
      position: fixed;
      top: 0;
      width: 100%;
      z-index: 9999;
      background: #fff;
      box-shadow: 0 2px 8px rgba(9,46,32,0.08);
    }

    .navbar-custom {
      background: rgb(9,46,32);
    }

    .navbar-custom .nav-link {
      color: #fff !important;
      text-transform: uppercase;
      margin-right: 20px;
      transition: color 0.3s;
    }

    .navbar-custom .nav-link.active,
    .navbar-custom .nav-link:hover,
    .navbar-custom .nav-link:focus {
      color: rgb(244,107,44) !important;
      font-weight: bold;
    }

    .marquee-row {
      background: rgb(244,107,44);
    }

    .marquee-row marquee {
      color: #fff;
      font-weight: 600;
      padding: 4px 0;
      letter-spacing: 1px;
    }

    h1, h2, h3, h4, h5, h6, span, a, p {
      font-family: "Open Sans", sans-serif;
    }

    
.brand-logo {
  max-height: 40px;  /* Adjust as needed */
  width: auto;
}
@media (max-width: 576px) {
  .brand-logo {
    max-height: 30px;  /* Smaller on mobile */
  }
}

.brand-logo {
  max-height: 40px;  /* Adjust as needed */
  width: auto;
}
@media (max-width: 576px) {
  .brand-logo {
    max-height: 30px;  /* Smaller on mobile */
  }
}

.navbar-toggler:focus {
  box-shadow: none;
  outline: none;
  filter: brightness(0) invert(1);
}






  </style>
</head>
<body>

<!-- Fixed Navbar Start -->
<div class="fixed-navbar">
  <div class="container-fluid px-0">
    <div class="row gx-0">
      <!-- Logo -->
      <div class="col-lg-3 d-none d-lg-flex align-items-center justify-content-center" style="background:rgb(9,46,32);">
  <a href="index.php" class="navbar-brand w-100 h-100 m-0 p-0 d-flex align-items-center justify-content-center">
    <img src="users/myimg/kj creations.png" alt="KJ CREATIONS" class="brand-logo me-2">
  </a>
</div>

      <!-- Contact Info & Social -->
      <div class="col-lg-9 px-0">
        <div class="row gx-0 d-none d-lg-flex align-items-center" style="">
          <div class="col-lg-7 px-5 text-start">
            <div class="h-100 d-inline-flex align-items-center py-2 me-4">
              <i class="fa fa-envelope" style="color:rgb(9,46,32);"></i>
              <span class="mb-0" style="color:rgb(9,46,32);font-weight:600;margin-left:8px;">kjcreation4all@gmail.com</span>
            </div>
            <div class="h-100 d-inline-flex align-items-center py-2">
              <i class="fa fa-phone-alt" style="color:rgb(9,46,32);"></i>
              <span class="mb-0" style="color:rgb(9,46,32);font-weight:600;">+91 96628 76676</span>
            </div>
          </div>
          <div class="col-lg-5 px-5 text-end">
            <div class="d-inline-flex align-items-center py-2">
              <a class="me-3" href="#"><i class="fab fa-facebook-f" style="color:rgb(244,107,44);"></i></a>
              <a class="me-3" href="#"><i class="fab fa-instagram" style="color:rgb(244,107,44);"></i></a>
              <a class="me-3" href="#"><i class="fab fa-whatsapp" style="color:rgb(244,107,44);"></i></a>
              <a class="me-3" href="#"><i class="fa fa-envelope" style="color:rgb(244,107,44);"></i></a>
            </div>
          </div>
        </div>

        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-custom">
          <a href="index.php" class="navbar-brand d-block d-lg-none">
  <img src="users/myimg/kj creations.png" alt="KJ CREATIONS" class="brand-logo me-2">
</a>

        <button type="button" class="navbar-toggler collapsed" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
    <i class="fas fa-bars" style="color:#fff; font-size: 24px;"></i>
</button>




          <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
            <div class="navbar-nav mr-auto py-0">
              <a href="index.php" class="nav-item nav-link <?php if($current_page == 'index.php'){echo 'active';} ?>">Home</a>
              <a href="about.php" class="nav-item nav-link <?php if($current_page == 'about.php'){echo 'active';} ?>">About</a>
              <a href="user_products.php" class="nav-item nav-link <?php if($current_page == 'products.php'){echo 'active';} ?>">Products</a>
              <a href="user_offers.php" class="nav-item nav-link <?php if($current_page == 'user_offers.php'){echo 'active';} ?>">Offers & Reviews</a>
              <a href="contact.php" class="nav-item nav-link <?php if($current_page == 'contact.php'){echo 'active';} ?>">Contact</a>
            </div>
            <a href="login.php" target="_blank" class="btn btn-primary py-2 px-4 rounded-pill d-none d-lg-block" style="background:linear-gradient(90deg, #FF7F50, #FF4500);border:none;">LOGIN</a>
          </div>
        </nav>

        <!-- Marquee -->
        <div class="row gx-0 marquee-row">
          <div class="col-12 ">
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
<!-- Fixed Navbar End -->

<!-- Bootstrap JS -->

<!-- Optional jQuery (if needed) -->
<!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> -->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<script>
 document.addEventListener('DOMContentLoaded', function () {
  const navLinks = document.querySelectorAll('.navbar-nav .nav-link');
  const navbarCollapse = document.getElementById('navbarCollapse');
  const bsCollapse = new bootstrap.Collapse(navbarCollapse, { toggle: false });

  navLinks.forEach(function (link) {
    link.addEventListener('click', function () {
      bsCollapse.hide();
    });
  });
});


</script>



</body>
</html>
