<?php
include 'database/config.php';

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $message = $_POST['message'];

    // Escape the data to prevent SQL injection
    // $name = mysqli_real_escape_string($conn, $name);
    // $email = mysqli_real_escape_string($conn, $email);
    // $contact = mysqli_real_escape_string($conn, $contact);
    // $message = mysqli_real_escape_string($conn, $message);

    // Insert the data into the database
    $sql = "INSERT INTO meassage (name, contact_no, email, message) 
            VALUES ('$name', '$contact', '$email', '$message')";

    if (mysqli_query($conn, $sql)) {
        echo "OK"; // Success response
    } else {
        echo "Error: " . mysqli_error($conn); // Error response
    }

    // Close the connection
    mysqli_close($conn);
}
?>
