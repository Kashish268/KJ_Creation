<?php
include 'database/config.php';

session_start();

if (!isset($_SESSION['admin'])) {
    header('Location: login.php');
    exit();
}

$id = $_REQUEST['id']; // Retrieve the ID
$q = "SELECT * FROM f_image WHERE id = $id"; // Query to fetch product details
$result = mysqli_query($conn, $q);

if (mysqli_num_rows($result) > 0) {
    $a = mysqli_fetch_array($result);
     // Fetch product details
} else {
    // If no result found, redirect or handle the error
    echo "<script>alert('Image not found'); window.location.href = 'footer_image.php';</script>";
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
      <link href="img/kj_1.png" rel="icon">

    <style>
        /* Add your CSS styles here */
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
            background-color: #f5f5f5; /* Dark input fields */
            color: #000; /* White text in inputs */
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
                <h2 style="text-align: left; color: rgb(244, 107, 44); font-size: 36px; font-weight: 600; margin-bottom: 10px;">Edit Product</h2>
                <p style="text-align: left; color: #c4c4c4; font-size: 1rem;">
                    <a href="footer_image.php" style="text-decoration: none; color: #c4c4c4;">Images</a> 
                    <span style="margin: 0 8px;">&gt;</span>
                    <span style="color: rgb(244, 107, 44);">Edit Image</span>
                </p>
            </div>
            <form id="productForm" method="post" enctype="multipart/form-data" action="update_footer_image.php">
                <label for="productName"> Name</label>
                <input type="text" id="productName" name="productName" value="<?php echo  $a['title']; ?>">

              
                <label for="productImage">Upload Product Image</label>
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
document.addEventListener("DOMContentLoaded", function () {
    const form = document.getElementById("productForm");

    form.addEventListener("submit", function (e) {
        let isValid = true;
        const errors = document.querySelectorAll(".error");
        errors.forEach((error) => error.remove()); // Remove previous error messages

        // Get file input and file
        const fileInput = document.getElementById("productImage");
        const file = fileInput.files[0];

        // Validation for product name
        const productName = document.getElementById("productName").value.trim();
        if (productName === "") {
            isValid = false;
            const error = document.createElement("div");
            error.className = "error";
            error.textContent = "Title is required.";
            document.getElementById("productName").parentNode.insertBefore(error, document.getElementById("productName").nextSibling);
        }

        // Validation for file
        if (!file) {
            isValid = false;
            const error = document.createElement("div");
            error.className = "error";
            error.textContent = "Please upload an image or video file.";
            fileInput.parentNode.insertBefore(error, fileInput.nextSibling);
        } else {
            const allowedExtensions = /(\.jpg|\.jpeg|\.png|\.gif|\.mp4|\.mov|\.avi)$/i;
            const ext = file.name.split('.').pop().toLowerCase();
            const imageMax = 5 * 1024 * 1024; // 5MB
            const gifMax = 10 * 1024 * 1024;  // 10MB
            const videoMax = 20 * 1024 * 1024; // 20MB

            if (!allowedExtensions.test(file.name)) {
                isValid = false;
                const error = document.createElement("div");
                error.className = "error";
                error.textContent = "Allowed file types: jpg, jpeg, png, gif, mp4, mov, avi.";
                fileInput.parentNode.insertBefore(error, fileInput.nextSibling);
            } else if (["jpg", "jpeg", "png"].includes(ext) && file.size > imageMax) {
                isValid = false;
                alert("Image size must be less than 5MB.");
            } else if (ext === "gif" && file.size > gifMax) {
                isValid = false;
                alert("GIF size must be less than 10MB.");
            } else if (["mp4", "mov", "avi"].includes(ext) && file.size > videoMax) {
                isValid = false;
                alert("Video size must be less than 20MB.");
            }
        }

        // Prevent form submission if validation fails
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
                error.remove();
            }
        });
    });
});
</script>

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
</body>
</html>
<?php


?>
