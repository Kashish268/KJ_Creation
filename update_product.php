<?php
include 'database/config.php';

// Fetch product details for the form
$id = $_POST['id']; // Assuming the product ID is passed via POST
$query = "SELECT * FROM products WHERE id = $id";
$result = mysqli_query($conn, $query);
$product = mysqli_fetch_assoc($result);

// Update logic
if (isset($_POST['update_btn'])) {
    $id = $_POST['id']; 
    $p_name = $_POST['productName'];
    $p_code = $_POST['p_code'];
    $price = $_POST['price'];
    $description = $_POST['description'];
    $shopname = $_POST['shopName'];
    $categories = $_POST['categories'];

    // Handle file upload
    $new_img = $_FILES['productImage']['name'];
    if (!empty($new_img)) {
        $uploadDir = 'uploaded_images/';
        $uploadPath = $uploadDir . basename($new_img);

        // Check if file exists and delete the previous image
        if (!empty($product['IMAGE']) && file_exists($uploadDir . $product['IMAGE'])) {
            unlink($uploadDir . $product['IMAGE']);
        }

        // Move the new file to the upload directory
        move_uploaded_file($_FILES['productImage']['tmp_name'], $uploadPath);

        $imageFileName = $new_img; // Use new image
    } else {
        $imageFileName = $product['image']; // Retain existing image
    }

    // Handle Questions & Answers (Convert to JSON format)
    $questions = $_POST['questions'];
    $answers = $_POST['answers'];
    $qaArray = [];

    if (!empty($questions) && is_array($questions)) {
        foreach ($questions as $key => $question) {
            $qaArray[] = [
                "question" => $question,
                "answer" => $answers[$key]
            ];
        }
    }
    
    $qaJson = json_encode($qaArray, JSON_UNESCAPED_UNICODE);

    // Update the database
    $sql = "UPDATE products SET 
            name = '$p_name', 
            p_code = '$p_code',
            price = '$price', 
            des = '$description', 
            shopname = '$shopname', 
            categories = '$categories',
            image = '$imageFileName',
            question = '$qaJson'
            WHERE id = '$id'";

    if (mysqli_query($conn, $sql)) {
        echo "<script>
        alert('Product Updated Successfully!!');
        window.location.href = 'products.php';
    </script>";
    } else {
        echo "<script>
        alert('Error in Updating Product!!');
        window.location.href = 'products.php';
    </script>";
        // echo "Error updating product: " . mysqli_error($conn);
    }
}
?>
