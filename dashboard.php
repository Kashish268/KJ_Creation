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
    <link rel="stylesheet" href="style_admin.css">
    
    <!-- Favicons -->
  <link href="img/kj_1.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

    <title>KJ CREATION</title>
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
        <?php

// Use a valid MySQL query
$select_users = "SELECT * FROM products";
$result = mysqli_query($conn, $select_users);

if ($result) {
    $numbers_of_users = mysqli_num_rows($result); // Get the number of rows
} else {
    $numbers_of_users = 0; // Default value if query fails
}

?>
           <h3><?php echo $numbers_of_users; ?></h3>

            <p>Products Available</p>
        </span>
    </li>
    <li>
        <i class='bx bxs-offer'></i>
        <span class="text">
        <?php

// Use a valid MySQL query
$select_users = "SELECT * FROM offers";
$result = mysqli_query($conn, $select_users);

if ($result) {
    $numbers_of_users = mysqli_num_rows($result); // Get the number of rows
} else {
    $numbers_of_users = 0; // Default value if query fails
}

?>
           <h3><?php echo $numbers_of_users; ?></h3>

            <p>Total Offers</p>
        </span>
    </li>
    <li>
        <i class='bx bxs-envelope'></i>
        <span class="text">
        <?php

// Use a valid MySQL query
$select_users = "SELECT * FROM meassage";
$result = mysqli_query($conn, $select_users);

if ($result) {
    $numbers_of_users = mysqli_num_rows($result); // Get the number of rows
} else {
    $numbers_of_users = 0; // Default value if query fails
}

?>
           <h3><?php echo $numbers_of_users; ?></h3>

            <p>Total Messages</p>
        </span>
    </li>

    
    
</ul>
<ul class="box-info">
    <li>
        <i class='bx bxs-message-dots'></i>
        <span class="text">
        <?php

// Use a valid MySQL query
$select_users = "select * from meassage where isreviewed = 1";
$result = mysqli_query($conn, $select_users);

if ($result) {
    $numbers_of_users = mysqli_num_rows($result); // Get the number of rows
} else {
    $numbers_of_users = 0; // Default value if query fails
}

?>
           <h3><?php echo $numbers_of_users; ?></h3>

            <p>Reviewed Meassges</p>
        </span>
    </li>

    <li>
        <i class='bx bxs-group'></i>
        <span class="text">
        <?php

// Use a valid MySQL query
$select_users = "select * from meassage where isresponded = 1";
$result = mysqli_query($conn, $select_users);

if ($result) {
    $numbers_of_users = mysqli_num_rows($result); // Get the number of rows
} else {
    $numbers_of_users = 0; // Default value if query fails
}

?>
           <h3><?php echo $numbers_of_users; ?></h3>

            <p>Responded Meassges</p>
        </span>
    </li>

    <li>
        <i class='bx bxs-image'></i>
        <span class="text">
        <?php

// Use a valid MySQL query
$select_users = "select * from home_slider";
$result = mysqli_query($conn, $select_users);

if ($result) {
    $numbers_of_users = mysqli_num_rows($result); // Get the number of rows
} else {
    $numbers_of_users = 0; // Default value if query fails
}

?>
           <h3><?php echo $numbers_of_users; ?></h3>

            <p>Slider Images</p>
        </span>
    </li>

    </ul>
        </main>
    </section> 

    <!-- Script -->
    <script src="script1.js"></script>
</body>
</html>
