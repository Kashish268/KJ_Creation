<?php
include 'database/config.php';

session_start();

if (!isset($_SESSION['admin'])) {
    header('Location: login.php');
    exit();
}

$id = $_REQUEST['id']; // Retrieve the ID
$q = "SELECT * FROM products WHERE id = $id"; // Query to fetch product details
$result = mysqli_query($conn, $q);

if (mysqli_num_rows($result) > 0) {
    $a = mysqli_fetch_array($result);
     // Fetch product details
} else {
    // If no result found, redirect or handle the error
    echo "<script>alert('Product not found'); window.location.href = 'products.php';</script>";
    exit();
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="style_admin.css">
    <title>KJ CREATION</title>
    <style>
        /* Add your CSS styles here */
        form {
            font-family: 'Lato', sans-serif;
            font-size: 16px;
            display: flex;
            flex-direction: column;
            gap: 20px;
            padding: 20px;
            background-color: #1e1e1e;
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
            border: 1px solid #444;
            border-radius: 4px;
            outline: none;
            background-color: #333;
            color: white;
            transition: border-color 0.3s ease;
        }

        form input:focus, form select:focus, form textarea:focus {
            border-color: #FF8C00;
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

        /* Media Queries */
        @media screen and (max-width: 768px) {
            form {
                padding: 15px;
            }
        }
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
                <h2 style="text-align: left; color: rgb(244, 107, 44); font-size: 36px; font-weight: 600; margin-bottom: 10px;">Edit Product</h2>
                <p style="text-align: left; color: #c4c4c4; font-size: 1rem;">
                    <a href="products.php" style="text-decoration: none; color: #c4c4c4;">Products</a> 
                    <span style="margin: 0 8px;">&gt;</span>
                    <span style="color: rgb(244, 107, 44);">Edit Product</span>
                </p>
            </div>
            <form id="productForm" method="post" enctype="multipart/form-data" action="update_product.php">
                <label for="productName">Product Name</label>
                <input type="text" id="productName" name="productName" value="<?php echo  $a['name']; ?>">

                <label>Product Code:</label>
                <input type="text" name="p_code" id="p_code" value="<?php echo $a['p_code'];?>" /required>

                <label for="price">Price</label>
                <input type="number" id="price" name="price" value="<?php echo $a['price']; ?>">

                <label for="description">Description</label>
                <textarea id="description" name="description" rows="4"><?php echo $a['des']; ?></textarea>

                <label for="shopName">Shop Name</label>
                <input type="text" id="shopName" name="shopName" value="<?php echo $a['shopname']; ?>">

                <label for="categories">Select categories</label>

                <select name="categories">
        <option value="<?php echo $a['categories'];?>"><?php echo $a['categories'];?></option>
            <option value="Handicraft">Handicraft</option>
            <option value="Purse">Purse</option>
            <option value="Jewelry">Jewelry</option>
            <option value="Accessories">Accessories</option>
        </select>
                <label for="productImage">Upload Product Image</label>
    <img src="uploaded_images/<?php echo $a['image']; ?>" alt="Product Image" style="max-width: 150px; height: auto;" name="pImage" id="imagePreview">
        
<input type="file" id="productImage" name="productImage"  onchange="previewImage(this)">

<label>Questions & Answers:</label>
    <div id="qa-container">
        <?php
        if (!empty($a['question'])) {
            $qaData = json_decode($a['question'], true);
            if (is_array($qaData)) {
                foreach ($qaData as $index => $qa) {
                    echo '<div class="qa-item">';
                    echo '<input type="text" name="questions[]" placeholder="Question" value="' . htmlspecialchars($qa['question']) . '" style="width:100%"><br><br>';
                    echo '<input type="text" name="answers[]" placeholder="Answer" value="' . htmlspecialchars($qa['answer']) . '" style="width:100%"><br><br>';
                    echo '</div>';
                }
            }
        }
        ?>
    </div>
    <button type="button" onclick="addQAField()" style="background: rgb(244, 107, 44); color: white; border: none; padding: 10px; border-radius: 4px; cursor: pointer; font-size: 14px;">Add Q & A</button>

                <!-- You can't set a value for a file input, so we leave it as is -->
                <input type="hidden" name="id" value="<?php echo $a['id']; ?>">
                <input type="submit" name="update_btn" class="btn" value="Update">
            </form>
        </main>
    </section> 

    <script src="script1.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    
    <script>
        // Preview image before form submission
        function previewImage(input) {
            if (input.files && input.files[0]) {
                const reader = new FileReader();
                reader.onload = function (e) {
                    document.getElementById('imagePreview').src = e.target.result;
                };
                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>

    <script src="validation_p_edit.js"></script>
</body>
</html>

