<?php

include 'database/config.php';

if(isset($_POST['submit'])){
    $id = $_POST['id'];
    $client_description = mysqli_real_escape_string($conn, $_POST['client_description']); // Prevent SQL Injection
    // echo $id;

    $sql = "UPDATE meassage SET client_description = '$client_description', isreviewed = 1 WHERE id = $id";

    if (mysqli_query($conn, $sql)) {
        echo "<script>
        alert('Description add successfully!!');
        window.location.href = 'meassage.php';
    </script>";
    } else {
        echo "<script>
        alert('Something went wrong!!');
        window.location.href = 'meassage.php';
    </script>";
        // echo "Error updating product: " . mysqli_error($conn);
    }

}
?>