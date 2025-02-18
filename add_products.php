<?php
include 'database/config.php'; // Ensure this file has the correct database connection
session_start();

if (!isset($_SESSION['admin'])) {
    header('Location: login.php');
    exit();
}

if (isset($_POST['sub'])) {
    // Retrieve Product Details
    $p_name = $_POST['productName'];
    $price = $_POST['price'];
    $description = $_POST['description'];
    $shopname = $_POST['shopName'];
    $img = $_FILES['productImage']['name'];
    $tem_img = $_FILES['productImage']['tmp_name'];
    $Categories = $_POST['categories'];
    $p_code = $_POST['p_code'];
    // Handle File Upload
    $upload_dir = "uploaded_images/";
    if (!is_dir($upload_dir)) {
        mkdir($upload_dir, 0755, true);
    }
    move_uploaded_file($tem_img, $upload_dir . $img);

    // ✅ Directly Convert Questions & Answers to JSON
    $questions = $_POST['questions'] ?? [];
    $answers = $_POST['answers'] ?? [];

    $qa_array = [];
    foreach ($questions as $index => $question) {
        $qa_array[] = [
            "question" => $question,
            "answer" => $answers[$index] ?? ""
        ];
    }

    $qa_json = json_encode($qa_array); // 🔹 Convert array to JSON

    // ✅ Insert Data into Database
    $query = "INSERT INTO products (p_code,name, des, price, shopname, categories,IMAGE, question) 
              VALUES ('$p_code','$p_name', '$description', '$price', '$shopname', '$Categories','$img', '$qa_json')";

    if (mysqli_query($conn, $query)) {
        echo "<script>alert('Product Added!'); window.location.href='products.php';</script>";
    } else {
        echo "<script>alert('Error: " . mysqli_error($conn) . "');</script>";
    }
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
     <script>
        function addQAField() {
            let container = document.getElementById("qa-container");
            let div = document.createElement("div");
            div.innerHTML = `
                <input type="text" name="questions[]" placeholder="Enter question" style="width:100%;" /required><br><br>
                <input type="text" name="answers[]" placeholder="Enter answer" style="width:100%;"/required><br><br>
            `;
            container.appendChild(div);
        }
    </script>
</head>
<body>

    <?php include 'sidebar.php'; ?>

    <section id="content">
        <?php include 'navbar.php'; ?>
        <main>
    <div style="margin-bottom: 30px;">
        <h2 style="text-align: left; color: rgb(244, 107, 44); font-size:  36px; font-weight: 600; margin-bottom: 10px;">Add Product</h2>
        <p style="text-align: left; color: #c4c4c4; font-size: 1rem;">
            <a href="products.php" style="text-decoration: none; color: #c4c4c4;">Products</a> 
            <span style="margin: 0 8px;">&gt;</span>
            <span style="color: rgb(244, 107, 44);">Add Product</span>
        </p>
    </div>
    <form id="productForm" method="post" enctype="multipart/form-data">
    <label for="productName">Product Name</label>
                <input type="text" id="productName" name="productName" placeholder="Enter product name">
                <label>Product Code:</label>
                <input type="text" name="p_code" id="p_code" placeholder="Enter product code">
                <label for="price">Price</label>
                <input type="number" id="price" name="price" placeholder="Enter product price">
                
                <label for="description">Description</label>
                <textarea id="description" name="description" placeholder="Enter product description" rows="4"></textarea>
                
                <label for="shopName">Shop Name</label>
                <input type="text" id="shopName" name="shopName" placeholder="Enter shop name">
                <label>Categories:</label>
        <select name="categories">
        <option value="">Select a Category</option>
            <option value="Corporate gift">Corporate-gift            </option>
            <option value="Traditional">Traditional</option>
            <option value="Devotional">Devotional</option>
            <!-- <option value="Accessories">Accessories</option> -->
        </select>
                <label for="productImage">Upload Product Image</label>
                <input type="file" id="productImage" name="productImage">
                <label>Questions & Answers: (Click on Add button)</label>
        <div id="qa-container"></div>
        <button type="button" onclick="addQAField()" style="
        background: rgb(244, 107, 44); 
        color: white; border: none; padding: 15px;border-radius:4px; cursor:pointer; font-size:15px">Add Q & A</button>
                <input type="submit"  name="sub" class="btn">
            </form>
        </main>
    </section> 

    <script src="script1.js"></script>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- jQuery Validation -->
    <script src="validation_product.js"></script> <!-- Include the separate validation file -->

</body>
</html>
