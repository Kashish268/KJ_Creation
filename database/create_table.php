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

// $query="CREATE TABLE IF NOT EXISTS products (
//     id INT AUTO_INCREMENT PRIMARY KEY,
//     p_code VARCHAR(255) NOT NULL,
//     name VARCHAR(255) NOT NULL,
//     des VARCHAR(255) NOT NULL,
//     price INT NOT NULL,
//     shopname VARCHAR(255) NOT NULL,
//     categories VARCHAR(255) NOT NULL,
//     image VARCHAR(255) NOT NULL,
//     question JSON,
//     status VARCHAR(20) NOT NULL DEFAULT 'active' -- Added column with default value
// );";

$query="CREATE TABLE IF NOT EXISTS meassage (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    contact_no VARCHAR(15) NOT NULL,
    email VARCHAR(255) NOT NULL,
    message TEXT NOT NULL,
    client_description VARCHAR(255) DEFAULT NULL,
    isreviewed BOOL DEFAULT FALSE,
    isresponded BOOL DEFAULT FALSE
);";

// $query="
// create table if not EXISTS offers(
//   id INT AUTO_INCREMENT PRIMARY KEY,
//     title VARCHAR(255) NOT NULL,
//     offer_code VARCHAR(255) NOT NULL,
//     description TEXT NOT NULL,
//     offer_percentage VARCHAR(255) NOT NULL,
//     image VARCHAR(255) NOT NULL
// );";

// $query= "create table if not EXISTS f_image(
//  id INT AUTO_INCREMENT PRIMARY KEY,
//   title VARCHAR(255) NOT NULL,
//   image VARCHAR(255) NOT NULL
//   )";


  // $query= "create table if not EXISTS popup_image(
  //   id INT AUTO_INCREMENT PRIMARY KEY,
  //    title VARCHAR(255) NOT NULL,
  //    image VARCHAR(255) NOT NULL
  //    )";


  // $query= "create table if not EXISTS home_above(
  //   id INT AUTO_INCREMENT PRIMARY KEY,
  //    title VARCHAR(255) NOT NULL,
  //    image VARCHAR(255) NOT NULL
  //    )";

  // $query= "create table if not EXISTS home_side_image(
  //   id INT AUTO_INCREMENT PRIMARY KEY,
  //    image_position VARCHAR(255) NOT NULL,
  //    image VARCHAR(255) NOT NULL
  //    )";

    //  $query= "create table if not EXISTS home_slider(
    //   id INT AUTO_INCREMENT PRIMARY KEY,
    //    main_text VARCHAR(255) NOT NULL,
    //     p_text VARCHAR(255) NOT NULL,
    //    image VARCHAR(255) NOT NULL
    //    )";
     
if ($conn->query($query) === TRUE) {
    echo "Table  created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

// Close connection
$conn->close();
?>
