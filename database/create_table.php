<?php
include 'config.php';

// SQL to create users table
$query = "CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(255) UNIQUE NOT NULL,
    name VARCHAR(255) DEFAULT NULL,
    password VARCHAR(255) NOT NULL,
    isactive BOOLEAN NOT NULL DEFAULT TRUE
)";

if ($conn->query($query) === TRUE) {
    echo "Table 'users' created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

// Close connection
$conn->close();
?>
