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
      padding-top: 160px;
    }

    .fixed-navbar {
      position: fixed;
      top: 0;
      width: 100%;
      z-index: 3000;
      background: #fff;
      border-top: 5px solid #092e20;
      box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
    }

    .no-padding { padding: 0 !important; }

    .logo-section {
      display: flex;
      flex-direction: row;
    }

    .logo-left {
      background-color: #092e20;
      width: 12%;
    }

    .logo-right {
      background: #ffffff;
      width: 88%;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
    }

    .logo-text {
      font-size: 13px;
      font-weight: 600;
      color: #092e20;
      text-transform: uppercase;
      letter-spacing: 0.5px;
      margin-top: 10px;
      text-align: center;
      word-break: break-word;
    }

    .brand-logo {
      max-height: 80px;
      width: 100%;
      height: auto;
      display: block;
    }

    .logo-wrapper {
      display: inline-block;
      text-align: center;
      padding: 0px;
      background: #ffffff;
    }

    .navbar-custom {
      background: #ffffff;
      padding: 0 !important;
    }

    .navbar-custom .nav-link {
      color: #092e20 !important;
      margin-right: 20px;
      font-weight: 600;
      padding: 0;
      border-radius: 0;
    }

    .navbar-custom .nav-text {
      padding: 6px 12px;
      border-radius: 4px;
      display: inline-block;
      transition: 0.3s;
      text-transform: uppercase;
    }

    .navbar-custom .nav-text:hover {
      background: #f46b2c;
      color: #fff !important;
    }

    .navbar-custom .nav-link.active .nav-text {
      background: #f46b2c;
      color: #fff !important;
    }

    .contact-info-bar {
      background-color: #092e20;
      color: white;
    }

    .contact-info-bar span,
    .contact-info-bar a {
      color: white;
    }

    .marquee-row { background: #092e20; }

    .marquee-row marquee {
      color: #f46b2c;
      font-weight: 600;
      padding: 4px 0;
      letter-spacing: 1px;
    }

    .navbar-toggler:focus { box-shadow: none; outline: none; }

    .navbar-brand-mobile { display: none; }

    .toggler-icon {
      color: #092e20;
      font-size: 24px;
      line-height: 1;
    }

    .login-col {
      background: linear-gradient(90deg, #FF7F50, #FF4500);
      cursor: pointer;
      padding: 0 !important;
      min-width: 140px;
      position: absolute;
      right: 0;
      top: 50%;
      transform: translateY(-50%);
      height: 100%;
      display: flex;
      align-items: center;
    }

    .login-col a {
      text-decoration: none;
      color: #fff;
      font-weight: 600;
      text-transform: uppercase;
      width: 100%;
      display: block;
      padding: 12px 15px;
      text-align: center;
      margin: 0;
      transition: none;
    }

    .login-col a:hover {
      color: #fff !important;
      background: linear-gradient(90deg, #FF7F50, #FF4500) !important;
      text-decoration: none !important;
      box-shadow: none !important;
    }

    .navbar-container { padding: 0 !important; }

    .navbar-content {
      display: flex;
      justify-content: space-between;
      align-items: center;
      width: 100%;
      padding: 5px;
    }

    .nav-links-container {
      display: flex;
      align-items: center;
      flex: 1;
      margin-right: 150px;
    }

    @media (max-width: 991px) {
      .navbar-container { padding: 0 1rem !important; }
      .navbar-nav .nav-link { display: inline-block !important; padding: 6px 12px; }
      .navbar-nav { text-align: center; }
    }

    @media (max-width: 576px) {
      .logo-text { padding: 0 20px; font-size: 12px; }
      .brand-logo { max-width: 90px; }
      .navbar-brand-mobile { display: flex !important; align-items: center; }
      .logo-section { display: none !important; }
      .navbar-content { padding: 0 15px; }
    }
  </style>
</head>
<body>
  <div class="fixed-navbar">
    <div class="container-fluid no-padding">
      <div class="row g-0">
        <div class="col-lg-4 logo-section d-none d-lg-flex">
          <div class="logo-left"></div>
          <div class="logo-right">
            <div class="logo-wrapper">
              <a href="index.php" class="navbar-brand m-0 p-0 d-flex align-items-center justify-content-center">
                <img src="img/kj_final.png" alt="KJ CREATIONS" class="brand-logo">
              </a>
              <a href="user_products.php" style="text-decoration: none;">
                <div class="logo-text">CORPORATE | CUSTOMIZED | PERSONAL GIFTS</div>
              </a>
            </div>
          </div>
        </div>
        <div class="col-lg-8 no-padding">
          <div class="row g-0 d-none d-lg-flex align-items-center contact-info-bar">
            <div class="col-lg-7 px-5 text-start">
              <div class="h-100 d-inline-flex align-items-center py-2 me-4">
                <i class="fa fa-envelope" style="color: #f46b2c;"></i>
                <span class="mb-0 ms-2">kjcreation4all@gmail.com</span>
              </div>
              <div class="h-100 d-inline-flex align-items-center py-2">
                <i class="fas fa-mobile" style="color: #f46b2c;"></i>
                <span class="mb-0 ms-2">+91 98986 98228</span>
              </div>
            </div>
            <div class="col-lg-5 px-5 text-end">
              <div class="d-inline-flex align-items-center py-2">
                <a class="me-3" href="https://www.facebook.com/profile.php?id=61564031892075" target="_blank">
                  <img src="users/myimg/facebook.png" alt="Facebook" style="height: 22px; border-radius:5px;">
                </a>
                <a class="me-3" href="https://www.instagram.com/kjcreations4all/" target="_blank">
                  <img src="users/myimg/instagram_icon.png" alt="Instagram" style="height: 22px;">
                </a>
                <a class="me-3" href="https://chat.whatsapp.com/F0xId36zZE23wq7PiN4LwC" target="_blank">
                  <img src="users/myimg/whataspp.png" alt="WhatsApp" style="height: 22px; border-radius:5px;">
                </a>
              </div>
            </div>
          </div>

          <nav class="navbar navbar-expand-lg navbar-custom px-4">
            <div class="d-flex w-100 justify-content-between align-items-center d-lg-none">
              <a href="#" class="navbar-brand navbar-brand-mobile d-flex align-items-center">
                <img src="img/kj_final.png" alt="KJ CREATIONS" class="brand-logo me-2">
              </a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <i class="fas fa-bars toggler-icon"></i>
              </button>
            </div>
            <div class="collapse navbar-collapse" id="navbarCollapse">
              <div class="navbar-content d-none d-lg-flex">
                <div class="nav-links-container">
                  <div class="navbar-nav">
                    <a href="index.php" class="nav-item nav-link <?php if($current_page == 'index.php'){echo 'active';} ?>">
                      <span class="nav-text">Home</span>
                    </a>
                    <a href="about.php" class="nav-item nav-link <?php if($current_page == 'about.php'){echo 'active';} ?>">
                      <span class="nav-text">About</span>
                    </a>
                    <a href="user_products.php" class="nav-item nav-link <?php if($current_page == 'user_products.php' || $current_page == 'product_details.php'){echo 'active';} ?>">
                      <span class="nav-text">Products</span>
                    </a>
                    <a href="user_offers.php" class="nav-item nav-link <?php if($current_page == 'user_offers.php'){echo 'active';} ?>">
                      <span class="nav-text">Offers & Reviews</span>
                    </a>
                    <a href="contact.php" class="nav-item nav-link <?php if($current_page == 'contact.php'){echo 'active';} ?>">
                      <span class="nav-text">Contact</span>
                    </a>
                  </div>
                </div>
                <div class="login-col d-flex align-items-center">
                  <a href="login.php" target="_blank" style="text-decoration:none;">LOGIN →</a>
                </div>
              </div>
              <div class="d-block d-lg-none w-100">
                <div class="navbar-nav py-2">
                  <a href="index.php" class="nav-item nav-link <?php if($current_page == 'index.php'){echo 'active';} ?>">Home</a>
                  <a href="about.php" class="nav-item nav-link <?php if($current_page == 'about.php'){echo 'active';} ?>">About</a>
                  <a href="user_products.php" class="nav-item nav-link <?php if($current_page == 'user_products.php' || $current_page == 'product_details.php'){echo 'active';} ?>">Products</a>
                  <a href="user_offers.php" class="nav-item nav-link <?php if($current_page == 'user_offers.php'){echo 'active';} ?>">Offers & Reviews</a>
                  <a href="contact.php" class="nav-item nav-link <?php if($current_page == 'contact.php'){echo 'active';} ?>">Contact</a>
                </div>
                <div class="text-center pb-3">
                  <a href="login.php" target="_blank" class="btn btn-primary py-2 px-4 rounded-pill" style="background:linear-gradient(90deg, #FF7F50, #FF4500);border:none; text-decoration:none;">LOGIN</a>
                </div>
              </div>
            </div>
          </nav>

          <div class="row g-0 marquee-row">
            <div class="col-12">
              <marquee>
                <?php foreach ($headlines as $headline) {
                  echo "<span style='color: {$headline['color']}; margin-right: 50px;'>{$headline['text']}</span>";
                } ?>
              </marquee>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>