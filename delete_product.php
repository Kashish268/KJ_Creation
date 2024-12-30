<?php
include 'database/config.php';
    $id = $_REQUEST['id'];

    $q="delete from products where id=$id";
    if (mysqli_query($conn, $q)) {
        echo "<script>
            alert('Product deleted successfully with ID: $id');
            window.location.href = 'products.php';
        </script>";
    } else {
        echo "<script>
            alert('Error deleting product');
            window.location.href = 'products.php';
        </script>";
    }
?>