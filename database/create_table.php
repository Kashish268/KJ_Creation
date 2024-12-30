<?php
include 'config.php';

// SQL to create users table
// $query = "CREATE TABLE IF NOT EXISTS users (
//     id INT AUTO_INCREMENT PRIMARY KEY,
//     email VARCHAR(255) UNIQUE NOT NULL,
//     name VARCHAR(255) DEFAULT NULL,
//     password VARCHAR(255) NOT NULL,
//     isactive BOOLEAN NOT NULL DEFAULT TRUE
// )";

// $query="CREATE TABLE IF NOT EXISTS products(
// id INT AUTO_INCREMENT PRIMARY KEY,
// name varchar(255) not null,
// des varchar(255) not null,
// price int not null,
// shopname varchar(255) not nulL,
// IMAGE varchar(255) not null);";

// $query="create table if not EXISTS meassage(
//  id INT AUTO_INCREMENT PRIMARY KEY,
//     name VARCHAR(255) NOT NULL,
//     contact_no VARCHAR(15) NOT NULL,
//     email VARCHAR(255) NOT NULL,
//     message TEXT NOT NULL
//     );";

$query="
create table if not EXISTS offers(
  id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    description TEXT NOT NULL,
    offer_percentage VARCHAR(255) NOT NULL,
    image VARCHAR(255) NOT NULL
);";

if ($conn->query($query) === TRUE) {
    echo "Table  created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

// Close connection
$conn->close();
?>
