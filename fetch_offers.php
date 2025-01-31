<?php
include 'database/config.php';

$sql = "SELECT image FROM popup_image LIMIT 1";
$result = $conn->query($sql);
if ($result && $result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $imagePath = "uploaded_images/" . $row["image"];

    echo json_encode([
        "success" => true,
        "offer" => [
            // "title" => $row["title"],
            // "description" => $row["description"],
            // "discount" => $row["offer_percentage"],
            "image_url" => $imagePath
        ]
    ]);
} else {
    echo json_encode(["success" => false, "message" => "No offers available"]);
}
?>