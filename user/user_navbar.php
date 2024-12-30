<?php
include '../database/config.php';
    $current_page = basename($_SERVER['PHP_SELF']);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Navbar</title>
    <!-- Link to External CSS -->
    <link rel="stylesheet" href="user.css">
</head>
<body>
    <nav class="navbar">
        <!-- Replace logo.png with the path to your logo -->
        <div class="logo">
            <img src="../img/kj_1.png" alt="Logo">
        </div>
        <ul class="menu">
            <li class="<?= ($current_page == 'index.php') ? 'active' : ''; ?>""><a href="index.php">Home</a></li>
            <li class="<?= ($current_page == 'about.php') ? 'active' : ''; ?>"><a href="about.php">About</a></li>
            <li class="<?= ($current_page == 'user_product.php') ? 'active' : ''; ?>"><a href="user_product.php">Products</a></li>
            <li class="<?= ($current_page == 'contact.php') ? 'active' : ''; ?>"><a href="contact.php">Contact</a></li>
        </ul>
        <div class="hamburger" onclick="toggleMenu()">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </nav>

    <script>
        function toggleMenu() {
            const menu = document.querySelector('.menu');
            menu.classList.toggle('active');
        }
    </script>
</body>
</html>
