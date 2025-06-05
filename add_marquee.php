<?php
include 'database/config.php'; // Ensure this file has the correct database connection
session_start();

if (!isset($_SESSION['admin'])) {
    header('Location: login.php');
    exit();
}

if (isset($_POST['sub'])) {
    $text_value = trim($_POST['description']);
    $color_code = trim($_POST['headline_color']);

    // Directly insert without PHP validation
    $stmt = $conn->prepare("INSERT INTO headlines (text_value, color_code) VALUES (?, ?)");
    $stmt->bind_param("ss", $text_value, $color_code);
    if ($stmt->execute()) {
        echo "<script>alert('Headline added successfully!');</script>";
    } else {
        echo "<script>alert('Error: " . $conn->error . "');</script>";
    }
    $stmt->close();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Boxicons -->
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <!-- Favicons -->
  <link href="img/kj_1.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- CSS -->
    <link rel="stylesheet" href="style_admin.css">
    
    <title>KJ CREATION</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Lato:wght@400;700&family=Poppins:wght@400;500;600;700&display=swap');

        form {
            font-family: 'Lato', sans-serif;
            font-size: 16px;
            display: flex;
            flex-direction: column;
            gap: 20px;
            padding: 20px;
            background-color: #1e1e1e; /* Dark form background */
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            max-width: 600px;
            margin: 0 auto;
            color:white;
        }

        form input, form select, form textarea {
            font-family: 'Poppins', sans-serif;
            font-size: 16px;
            padding: 12px;
            border: 1px solid #444; /* Darker border */
            border-radius: 4px;
            outline: none;
            background-color: #333; /* Dark input fields */
            color: white; /* White text in inputs */
            transition: border-color 0.3s ease;
        }

        form input:focus, form select:focus, form textarea:focus {
            border-color: #FF8C00; /* Orange focus border color */
        }

        form textarea {
            resize: vertical;
            min-height: 100px;
        }

        form .btn {
            font-family: 'Poppins', sans-serif;
            font-size: 16px;
            padding: 12px 20px;
            background: rgb(244, 107, 44);
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            width: 100%;
        }

        form .btn:hover {
            background: rgb(214, 71, 5);
        }

        form .error {
            color: red;
            font-size: 14px;
            margin-top: -10px;
            margin-bottom: 10px;
        }

        form input[type="number"] {
            -moz-appearance: textfield;
        }

        form input[type="number"]::-webkit-outer-spin-button,
        form input[type="number"]::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        form input[type="number"] {
            text-align: right;
        }

        @media screen and (max-width: 768px) {
            form {
                padding: 15px;
            }

            form input, form select, form textarea {
                font-size: 14px;
            }

            form .btn {
                font-size: 14px;
                padding: 10px 15px;
            }
        }

        @media screen and (max-width: 480px) {
            form {
                max-width: 100%;
                padding: 10px;
            }

            form input, form select, form textarea {
                font-size: 14px;
                padding: 10px;
            }

            form .btn {
                font-size: 14px;
                padding: 10px 15px;
            }
        }

        /* Style for the back arrow */

    </style>
</head>
<body>

    <?php include 'sidebar.php'; ?>

    <section id="content">
        <?php include 'navbar.php'; ?>
        <main>
    <div style="margin-bottom: 30px;">
        <h2 style="text-align: left; color: rgb(244, 107, 44); font-size:  36px; font-weight: 600; margin-bottom: 10px;">Add Headlines</h2>
        <p style="text-align: left; color: #c4c4c4; font-size: 1rem;">
            <a href="offers.php" style="text-decoration: none; color: #c4c4c4;">Headlines</a> 
            <span style="margin: 0 8px;">&gt;</span>
            <span style="color: rgb(244, 107, 44);">Add Headlines</span>
        </p>
    </div>
    <form id="productForm" method="post" enctype="multipart/form-data">
        <label for="description">Enter Text : </label>
        <textarea id="description" name="description" placeholder="Enter text" rows="4" required></textarea>
        
        <label for="headline_color">Headline Color</label>
        <input type="color" id="headline_color" name="headline_color" value="#ffffff" required>

        <input type="submit" name="sub" class="btn" value="Add Headline">
    </form>
        </main>
    </section> 

    <script src="script1.js"></script>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- jQuery Validation -->
        
    </script> <!-- Include the separate validation file -->

</body>
</html>
