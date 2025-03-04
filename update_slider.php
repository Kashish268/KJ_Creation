<?php
include 'database/config.php';

// Fetch product details for the form
$id = $_POST['id']; // Assuming the product ID is passed via GET
$query = "SELECT * FROM home_slider WHERE id = $id";
$result = mysqli_query($conn, $query);
$product = mysqli_fetch_assoc($result);

// Update logic
if (isset($_POST['update_btn'])) {
    $id = $_POST['id']; 
    $p_name = $_POST['productName'];
   
    $description = $_POST['description'];
   

    // Handle file upload
    $new_img = $_FILES['productImage']['name'];
    if (!empty($new_img)) {
        $uploadDir = 'uploaded_images/';
        $uploadPath = $uploadDir . basename($new_img);

        // Check if file exists and delete the previous image
        if (!empty($product['image']) && file_exists($uploadDir . $product['image'])) {
            unlink($uploadDir . $product['image']);
        }

        // Move the new file to the upload directory
        move_uploaded_file($_FILES['productImage']['tmp_name'], $uploadPath);

        $imageFileName = $new_img; // Use new image
    } else {
        $imageFileName = $product['image']; // Retain existing image
    }


    // Update the database
    $sql = "UPDATE home_slider SET 
            main_text = '$p_name', 
            
            p_text = '$description', 
            
            IMAGE = '$imageFileName'
            WHERE id = '$id'";

    if (mysqli_query($conn, $sql)) {
        echo "<script>
        alert('Image Slider Update Successfully!!');
        window.location.href = 'homepage_corosole.php';
    </script>";
    } else {
        echo "<script>
        alert('Error in Update Slider Image!!');
        window.location.href = 'homepage_corosole.php';
    </script>";
        // echo "Error updating product: " . mysqli_error($conn);
    }
}
?>
