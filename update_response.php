<?php
include "database/config.php"; // Your DB connection file

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['id'])) {
    $id = $_POST['id'];
    $sql = "UPDATE meassage SET isresponded = 1 WHERE id = $id";
    if (mysqli_query($conn, $sql)) {
        echo "<script>
        alert('Successfully responded!!');
        window.location.href = 'clients.php';
    </script>";
    } else {
        echo "<script>
        alert('Something went wrong!!');
        window.location.href = 'clients.php';
    </script>";
        // echo "Error updating product: " . mysqli_error($conn);
    }
    echo $id;
}
?>