<?php
include 'database/config.php';

if (isset($_POST['newsletter_email'])) {
    $email = trim($_POST['newsletter_email']);
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $check = $conn->prepare("SELECT id FROM newsletter WHERE email = ?");
        $check->bind_param("s", $email);
        $check->execute();
        $check->store_result();
        if ($check->num_rows > 0) {
            echo "This email is already subscribed.";
        } else {
            $stmt = $conn->prepare("INSERT INTO newsletter (email) VALUES (?)");
            if ($stmt) {
                $stmt->bind_param("s", $email);
                if ($stmt->execute()) {
                    echo "Thank you for subscribing!";
                } else {
                    echo "Something went wrong.";
                }
            } else {
                echo "Something went wrong.";
            }
        }
        $check->close();
    } else {
        echo "Please enter a valid email address.";
    }
}
?>