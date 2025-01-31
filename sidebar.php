<?php
    // Get the current file name
    $current_page = basename($_SERVER['PHP_SELF']);
?>

<!-- sidebar.php -->
<!-- Boxicons -->
<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
<!-- My CSS -->
<link rel="stylesheet" href="style_admin.css">
<section id="sidebar">
    <a href="#" class="brand">
        <!-- <i class='bx bxs-smile'></i> -->
         <!-- Replace the text with an image -->
         <img src="img/kj_1.png" alt="AdminPanel Logo" class="brand-logo">
    </a>
    <ul class="side-menu top">
        <!-- Dashboard Link -->
        <li class="<?= ($current_page == 'dashboard.php') ? 'active' : 
            (($current_page == 'product.php' || $current_page == 'add_product.php' || 
              $current_page == 'offers.php' || $current_page == 'add_offers.php' ||  $current_page == 'footer_image.php'||
              $current_page == 'meassage.php') ? '' : ''); ?>">

            <a href="dashboard.php">
                <i class='bx bxs-dashboard'></i>
                <span class="text">Dashboard</span>
            </a>
        </li>
        <!-- Products Link -->
        <li class="<?= ($current_page == 'products.php' || $current_page == 'add_products.php') ? 'active' : ''; ?>">
        <a href="products.php">
                <i class='bx bxs-shopping-bag-alt'></i>
                <span class="text">Products</span>
            </a>
        </li>
        <!-- Offers Link -->
        <li class="<?= ($current_page == 'offers.php' || $current_page == 'add_offers.php') ? 'active' : ''; ?>">
            <a href="offers.php">
                <i class='bx bxs-offer'></i>
                <span class="text">Offers</span>
            </a>
        </li>
        <!-- Messages Link -->
        <li class="<?= ($current_page == 'meassage.php') ? 'active' : 
            (($current_page == 'product.php' || $current_page == 'add_product.php' || 
              $current_page == 'offers.php' || $current_page == 'add_offers.php' ||  $current_page == 'footer_image.php'||
              $current_page == 'dashboard.php') ? '' : ''); ?>">
            <a href="meassage.php">
                <i class='bx bxs-message-dots'></i>
                <span class="text">Messages</span>
            </a>
        </li>

        <li class="<?= ($current_page == 'footer_image.php')  || $current_page == 'add_footer_image.php' ? 'active' : 
            (($current_page == 'product.php' || $current_page == 'add_product.php' || 
              $current_page == 'offers.php' || $current_page == 'add_offers.php' ||  $current_page == 'meassage.php'||
              $current_page == 'dashboard.php') ? '' : ''); ?>">
            <a href="footer_image.php">
                <i class='bx bxs-image'></i>
                <span class="text">Footer Image</span>
            </a>
        </li>

        <li class="<?= ($current_page == 'popup_offers.php')  || $current_page == 'add_popup_image.php' ? 'active' : 
            (($current_page == 'product.php' || $current_page == 'add_product.php' || 
              $current_page == 'offers.php' || $current_page == 'add_offers.php' ||  $current_page == 'meassage.php'||
              $current_page == 'dashboard.php'||$current_page == 'footer_image.php' ||$current_page == 'add_footer_image.php'||$current_page == 'popup_offers.php'
               || $current_page == 'add_popup_image.php')  ? '' : ''); ?>">
            <a href="popup_offers.php">
                <i class='bx bxs-offer'></i>
                <span class="text">Popup Offer</span>
            </a>
        </li>

        <li class="<?= ($current_page == 'homepage_corosole.php')  || $current_page == 'add_homepage_corosole.php' ? 'active' : 
            (($current_page == 'product.php' || $current_page == 'add_product.php' || 
              $current_page == 'offers.php' || $current_page == 'add_offers.php' ||  $current_page == 'meassage.php'||
              $current_page == 'dashboard.php'||$current_page == 'footer_image.php' ||$current_page == 'add_footer_image.php'
              ||$current_page == 'popup_offers.php'
              || $current_page == 'add_popup_image.php'|| $current_page == 'homepage.php' || $current_page == 'add_homeside_image.php')  ? '' : ''); ?>">
            <a href="homepage_corosole.php">
                <i class='bx bxs-image'></i>
                <span class="text">Home Corousole</span>
            </a>
        </li>

        <li class="<?= ($current_page == 'homepage.php')  || $current_page == 'add_homeside_image.php' ? 'active' : 
            (($current_page == 'product.php' || $current_page == 'add_product.php' || 
              $current_page == 'offers.php' || $current_page == 'add_offers.php' ||  $current_page == 'meassage.php'||
              $current_page == 'dashboard.php'||$current_page == 'footer_image.php' ||$current_page == 'add_footer_image.php'||$current_page == 'popup_offers.php'
              || $current_page == 'add_popup_image.php'|| $current_page == 'homepage_corosole.php' || $current_page == 'add_homepage_corosole.php')  ? '' : ''); ?>">
            <a href="homepage.php">
                <i class='bx bxs-home'></i>
                <span class="text">Home Edit</span>
            </a>
        </li>

        
    </ul>
    <ul class="side-menu">
        <!-- Logout Link -->
        <li>
            <a href="logout.php" class="logout">
                <i class='bx bxs-log-out-circle'></i>
                <span class="text">Logout</span>
            </a>
        </li>
    </ul>
</section>
<link rel="stylesheet" href="script1.js">
