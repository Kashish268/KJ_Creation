<?php
include 'database/config.php'; // Corrected the path
session_start();
if (!isset($_SESSION['admin'])) {
    header('Location:login.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Boxicons -->
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <!-- CSS -->
    <link rel="stylesheet" href="style1.css">
    
    <title>AdminHub</title>
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

        form .button {
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

        form .button:hover {
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

            form .button {
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

            form .button {
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
        
            <h2 style="text-align: center; color: rgb(244, 107, 44); margin-bottom: 20px;">Add Product</h2>
            <form id="productForm" method="post">
                <label for="productName">Product Name</label>
                <input type="text" id="productName" name="productName" placeholder="Enter product name">
                
                <label for="price">Price</label>
                <input type="number" id="price" name="price" placeholder="Enter product price">
                
                <label for="description">Description</label>
                <textarea id="description" name="description" placeholder="Enter product description" rows="4"></textarea>
                
                <label for="shopName">Shop Name</label>
                <input type="text" id="shopName" name="shopName" placeholder="Enter shop name">
                
                <label for="productImage">Upload Product Image</label>
                <input type="file" id="productImage" name="productImage" accept=".jpg, .jpeg, .png">
                
                <input class="button" type="submit">
            </form>
        </main>
    </section> 

    <script src="script1.js"></script>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- jQuery Validation -->
    <script>
        $(document).ready(function() {
            $("#productForm").on("submit", function(e) {
                e.preventDefault(); // Prevent form submission
                let isValid = true;
                $(".error").remove(); // Remove previous error messages

                // Validate Product Name
                if ($("#productName").val().trim() === "") {
                    isValid = false;
                    $("#productName").after("<div class='error'>Product Name is required.</div>");
                }

                // Validate Price
                if ($("#price").val().trim() === "" || $("#price").val() <= 0) {
                    isValid = false;
                    $("#price").after("<div class='error'>Please enter a valid price.</div>");
                }

                // Validate Description
                if ($("#description").val().trim() === "") {
                    isValid = false;
                    $("#description").after("<div class='error'>Description is required.</div>");
                }

                // Validate Shop Name
                if ($("#shopName").val().trim() === "") {
                    isValid = false;
                    $("#shopName").after("<div class='error'>Shop Name is required.</div>");
                }

                // Validate File Upload
                if ($("#productImage").val().trim() === "") {
                    isValid = false;
                    $("#productImage").after("<div class='error'>Please upload an image.</div>");
                }

                // If valid, submit the form (you can add AJAX here if needed)
                if (isValid) {
                    alert("Product added successfully!");
                    this.reset(); // Reset the form
                }
            });

            // Remove error messages on focus
            $("input, textarea").on("focus", function() {
                $(this).next(".error").remove();
            });
        });
    </script>
</body>
</html>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $p_name = $_POST['productName'];
    $price = $_POST['price'];
    $description = $_POST['description'];
    $shopname = $_POST['shopName'];
    $img = $_FILES['productImage'];

    $allowed_extensions = ['jpg', 'jpeg', 'png'];
    $fileExtension = strtolower(pathinfo($img['name'], PATHINFO_EXTENSION));
    $image_size = $img['size'];
    $newFileName = uniqid() . '.' . $fileExtension;
    $uploadPath = 'uploaded/' . $newFileName;

    // Check if an image is uploaded
    if (!empty($img['name'])) {
        // Validate file extension
        if (!in_array($fileExtension, $allowed_extensions)) {
            echo "<script>alert('Invalid image format. Please upload a JPG, JPEG, or PNG file.');</script>";
            exit();
        }

        // Validate file size
        if ($image_size > 2000000) { // 2MB
            echo "<script>alert('Image size is too large. Please upload an image smaller than 2MB.');</script>";
            exit();
        }

        // Upload file and insert into database
        if (move_uploaded_file($img['tmp_name'], $uploadPath)) {
            $stmt = $conn->prepare("INSERT INTO products (name, price, des, shopname, image) VALUES (?, ?, ?, ?, ?)");
            $stmt->bind_param("sdsss", $p_name, $price, $description, $shopname, $uploadPath);

            if ($stmt->execute()) {
                echo "<script>alert('Product added successfully!'); window.location.href='products.php';</script>";
            } else {
                echo "<script>alert('Failed to add product. Please try again.');</script>";
            }

            $stmt->close();
        } else {
            echo "<script>alert('Failed to upload image. Please try again.');</script>";
            exit();
        }
    } else {
        echo "<script>alert('Please upload an image.');</script>";
        exit();
    }
}
?>