<?php

include 'database/config.php';

session_start();
session_unset();
session_destroy();


?>

<!DOCTYPE html>
<html>
<head>
    <script>
        // Try to close the tab
        window.close();
        // If tab doesn't close (browser blocks), redirect to home in same tab
        setTimeout(function() {
            window.location.href = "index.php";
        }, 500);
    </script>
</head>