<?php
include 'database/config.php'; // Corrected the path
session_start();
if (!isset($_SESSION['admin'])) {
    header('Location:login.php');
    exit();
}?>

<!-- <script>
alert("Welcome to the admin panel!");
</script> -->



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Boxicons -->
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <!-- CSS -->
    <link rel="stylesheet" href="style.css">
    
    <title>AdminHub</title>
</head>
<body>

    <?php include 'sidebar.php'; ?>

    <!-- CONTENT -->
    <section id="content">
        <?php include 'navbar.php'; ?>
<!-- 
        <!-- MAIN -->
        <main>
            <div class="head-title">
                <div class="left">
                    <h1>Dashboard</h1>
                    <ul class="breadcrumb">
                        <li>
                            <a href="dashboard.php">Dashboard</a>
                        </li>
                        <li><i class='bx bx-chevron-right'></i></li>
                        <li>
                            <a class="active" href="#">Home</a>
                        </li>
                    </ul>
                </div>
                <!-- <a href="#" class="btn-download">
                    <i class='bx bxs-cloud-download'></i>
                    <span class="text">Download PDF</span>
                </a> -->
            </div>
            <ul class="box-info">
    <li>
        <i class='bx bxs-package'></i>
        <span class="text">
            <h3>150</h3>
            <p>Products Available</p>
        </span>
    </li>
    <li>
        <i class='bx bxs-offer'></i>
        <span class="text">
            <h3>320</h3>
            <p>Total Offers</p>
        </span>
    </li>
    <li>
        <i class='bx bxs-envelope'></i>
        <span class="text">
            <h3>45</h3>
            <p>Total Messages</p>
        </span>
    </li>
</ul>

        </main>
    </section> -->

    <!-- Script -->
    <script src="script1.js"></script>
</body>
</html>
