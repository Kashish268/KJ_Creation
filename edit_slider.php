<?php
include 'database/config.php';

session_start();

if (!isset($_SESSION['admin'])) {
    header('Location: login.php');
    exit();
}

$id = $_REQUEST['id']; // Retrieve the ID
$q = "SELECT * FROM home_slider WHERE id = $id"; // Query to fetch product details
$result = mysqli_query($conn, $q);

if (mysqli_num_rows($result) > 0) {
    $a = mysqli_fetch_array($result);
     // Fetch product details
} else {
    // If no result found, redirect or handle the error
    echo "<script>alert('Slider Image not found'); window.location.href = 'homepage_corosole.php';</script>";
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
    <title>AdminHub</title>
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
</head>
<body>

    <?php include 'sidebar.php'; ?>

    <section id="content">
        <?php include 'navbar.php'; ?>
        <main>
            <div style="margin-bottom: 30px;">
                <h2 style="text-align: left; color: rgb(244, 107, 44); font-size: 36px; font-weight: 600; margin-bottom: 10px;">Edit Product</h2>
                <p style="text-align: left; color: #c4c4c4; font-size: 1rem;">
                    <a href="homepage_corosole.php" style="text-decoration: none; color: #c4c4c4;">Image Slider</a> 
                    <span style="margin: 0 8px;">&gt;</span>
                    <span style="color: rgb(244, 107, 44);">Edit Image Slider</span>
                </p>
            </div>
            <form id="productForm" method="post" enctype="multipart/form-data" action="update_slider.php">
                <label for="productName">Heading Text</label>
                <input type="text" id="productName" name="productName" value="<?php echo  $a['main_text']; ?>">


                <label for="description">Description Text</label>
                <textarea id="description" name="description" rows="4"><?php echo $a['p_text']; ?></textarea>

                
                <label for="productImage">Upload Image</label>
    <img src="uploaded_images/<?php echo $a['image']; ?>" alt="Product Image" style="max-width: 150px; height: auto;" name="pImage" id="imagePreview">
        
<input type="file" id="productImage" name="productImage"  onchange="previewImage(this)">

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

<script>
    document.addEventListener("DOMContentLoaded", function () {
    const form = document.getElementById("productForm");

    form.addEventListener("submit", function (e) {
        let isValid = true;
        const errors = document.querySelectorAll(".error");
        errors.forEach((error) => error.remove()); // Remove previous error messages

        // Validation rules for the offer form
        const validationRules = [
            {
                field: "productName",
                message: "Please enter text.",
                validate: function (value) {
                    return value.trim() !== "";
                },
            },

            {
                field: "description",
                message: "Description is required.",
                validate: function (value) {
                    return value.trim() !== "";
                },
            },
            {
                field: "productImage",
                message: "Please upload a valid image file (jpg, jpeg, png).",
                validate: function () {
                    const fileInput = document.getElementById("productImage");
                    const file = fileInput.files[0];
                    if (!file) return false; // Ensure a file is selected
                    const allowedExtensions = /(\.jpg|\.jpeg|\.png)$/i;
                    return allowedExtensions.test(file.name);
                },
            },
        ];

        // Iterate over validation rules
        validationRules.forEach(function (rule) {
            const field = document.getElementById(rule.field);
            const fieldValue = field.type === "file" ? field.files : field.value; // Handle file inputs correctly
            if (!rule.validate(fieldValue)) {
                isValid = false;
                const error = document.createElement("div");
                error.className = "error";
                error.textContent = rule.message;
                field.parentNode.insertBefore(error, field.nextSibling);
            }
        });

        // If not valid, prevent form submission
        if (!isValid) {
            e.preventDefault();
        }
    });

    // Real-time error removal
    const fields = document.querySelectorAll("#productForm input, #productForm textarea");
    fields.forEach((field) => {
        field.addEventListener(field.type === "file" ? "change" : "input", function () {
            const error = this.nextElementSibling;
            if (error && error.classList.contains("error")) {
                const validationRules = {
                    productName: (value) => value.trim() !== "",
                    price: (value) => /^\d+(\.\d{1,2})?%$/.test(value.trim()),
                    description: (value) => value.trim() !== "",
                    productImage: () => {
                        const fileInput = document.getElementById("productImage");
                        const file = fileInput.files[0];
                        if (!file) return false;
                        const allowedExtensions = /(\.jpg|\.jpeg|\.png)$/i;
                        return allowedExtensions.test(file.name);
                    },
                };

                const isValid = validationRules[this.id](this.value);
                if (isValid) {
                    error.remove();
                }
            }
        });
    });
});

</script>


</body>
</html>

