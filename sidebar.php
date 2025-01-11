<?php
    // Get the current file name
    $current_page = basename($_SERVER['PHP_SELF']);
?>

<!-- sidebar.php -->
<!-- Boxicons -->
<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
<!-- My CSS -->
<link rel="stylesheet" href="style_ad.css">
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
              $current_page == 'offers.php' || $current_page == 'add_offers.php' || 
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
              $current_page == 'offers.php' || $current_page == 'add_offers.php' || 
              $current_page == 'dashboard.php') ? '' : ''); ?>">
            <a href="meassage.php">
                <i class='bx bxs-message-dots'></i>
                <span class="text">Messages</span>
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
