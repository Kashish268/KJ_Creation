<?php
include 'database/config.php';

session_start();
if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $q = "SELECT * FROM users WHERE email='$email' AND password='$password'";
    $result = $conn->query($q);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if ($password === $row['password']) {
            $_SESSION['admin'] = $row['id'];
            header('Location: dashboard.php');
            exit();
        } else {
            $error_message = "Invalid password. Please try again.";
        }
    } else {
        $error_message = "No user found with that email.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Roboto', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #000;
            overflow: hidden;
            color: white;
            position: relative;
        }

        body::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: radial-gradient(circle, rgba(249, 114, 53, 0.4), rgba(0, 0, 0, 0.8));
            z-index: -1;
        }

        .login-container {
            position: relative;
            width: 80%;
            max-width: 400px;
            padding: 40px;
            background: rgba(14, 14, 16, 0.9);
            border-radius: 15px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.5);
            text-align: center;
        }

        .login-container img.logo {
            width: 80px; /* Initial size */
            margin-bottom: 10px;
            transition: width 0.3s;
        }

        .login-container h2 {
            margin-bottom: 30px;
            letter-spacing: 1px;
            font-size: 2em;
            color: #f97235;
        }

        .login-container form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .form-group {
            margin-bottom: 25px;
            text-align: left;
            width: 100%;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-size: 1em;
        }

        .login-container input[type="text"],
        .login-container input[type="password"] {
            width: 94.4%;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ddd;
            background: #fff;
            color: #333;
            font-size: 1em;
            margin-bottom: 10px;
        }

        .login-container input[type="submit"] {
            background: rgb(244, 107, 44);
            color: white;
            padding: 10px;
            border: none;
            border-radius: 5px;
            font-size: 1.1em;
            cursor: pointer;
            width: 100%;
        }

        .login-container input[type="submit"]:hover {
        }

        .error-message {
            color: red;
            font-size: 0.9em;
            margin-top: 5px;
        }

        @media (max-width: 768px) {
            .login-container {
                padding: 30px;
                width: 90%;
            }

            .login-container img.logo {
                width: 70px; /* Smaller size for medium screens */
            }

            .login-container h2 {
                font-size: 1.8em;
            }

            .login-container input {
                font-size: 0.9em;
            }

            .login-container input[type="submit"] {
                font-size: 1em;
            }
        }

        @media (max-width: 480px) {
            .login-container {
                padding: 20px;
            }

            .login-container img.logo {
                width: 60px; /* Smaller size for small screens */
            }

            .login-container h2 {
                font-size: 1.5em;
            }

            .login-container input {
                padding: 12px;
                font-size: 0.8em;
            }

            .login-container input[type="submit"] {
                font-size: 0.9em;
            }
        }
    </style>
</head>
<body>
    <div class="login-container">
        <img src="img/kj_1.png" alt="Logo" class="logo">
        <h2>Login</h2>
        <form id="loginForm" method="post" action="">
            <div class="form-group">
                <label for="email">Enter your email</label>
                <input type="text" id="email" name="email" placeholder="Your email">
                <span id="emailError" class="error-message"></span>
            </div>
            <div class="form-group">
                <label for="password">Enter your password</label>
                <input type="password" id="password" name="password" placeholder="Your password">
                <span id="passwordError" class="error-message"></span>
            </div>
            <input type="submit" name="submit" value="LOGIN" onclick="submitForm()">
        </form>
        <?php
        if (isset($error_message)) {
            echo "<div class='error-message'>$error_message</div>";
        }
        ?>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        function submitForm() {
            let email = $("#email").val().trim();
            let password = $("#password").val().trim();
            let isValid = true;

            $("#emailError").text("");
            $("#passwordError").text("");

            const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

            if (email === "") {
                $("#emailError").text("Please enter your email.");
                isValid = false;
            } else if (!emailPattern.test(email)) {
                $("#emailError").text("Please enter a valid email address.");
                isValid = false;
            }

            if (password === "") {
                $("#passwordError").text("Please enter your password.");
                isValid = false;
            }

            if (isValid) {
                $("#loginForm").submit();
            }
        }
    </script>
</body>
</html>
