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
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Page</title>

  <!-- Favicons (optional) -->
  <link href="img/kj_1.png" rel="icon" />
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon" />

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet"/>

  <style>
    /* Reset and basic styling */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: "Open Sans", sans-serif;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      color: #fff;
      position: relative;
      height: 100vh;
      overflow: hidden; 

      /* 
        Background with overlay:
        - linear-gradient overlay with rgba(14, 22, 16, 0.932)
        - background image
      */
      background:
        linear-gradient(
          rgba(19, 30, 21, 0.93),
          rgba(19, 30, 21, 0.93)
        ),
        url('users/myimg/about1.jpg') no-repeat center center fixed;
      background-size: cover;
     
    }

    /* Login Container */
    .login-container {
      position: relative;
      /* Make the container wider and responsive */
      width: 60%;
      max-width: 500px;
      padding: 40px;
      background:rgba(14, 22, 16, 0.932);
      
      border-radius: 10px;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
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
        letter-spacing: 1px;
      display: block;
      margin-bottom: 8px;
      font-size: 1em;
      color: #fff; /* White label text for contrast */
    }

    .login-container input[type="text"],
    .login-container input[type="password"] {
        letter-spacing: 1px;
      width: 100%;
      padding: 10px;
      border-radius: 5px;
      border: 1px solid #ddd;
      background: #fff;
      color: #333;
      font-size: 1em;
      margin-bottom: 10px;
    }

    .login-container input[type="submit"] {
      background: linear-gradient(90deg, #FF7F50, #d93c03);
      transform: scale(1.05);
      color: white;
      padding: 10px;
      border: none;
      border-radius: 5px;
      font-size: 1.1em;
      cursor: pointer;
      width: 95%;
      transition: background 0.3s, transform 0.3s;
      letter-spacing: 1px;
    }
    .login-container input[type="submit"]:hover {
      background: linear-gradient(90deg, #FF6347, #d35e04);
      transform: scale(1.05);
    }

    .error-message {
      color: red;
      font-size: 0.9em;
      margin-top: 5px;
    }

    /* Home link under the login button */
    .home-link {
        letter-spacing: 1px;
      margin-top: 20px;
      display: inline-block;
      color: #fff;
      text-decoration: none;
      font-weight: 600;
      font-size: 0.9rem;
    }
    
    .home-link:hover {
      text-decoration: underline;
    }

    /* Responsive breakpoints */
    @media (max-width: 768px) {
    .login-container {
        
       
        max-width: 90%;   /* Adjust width */
        padding: 30px 20px;
        margin: auto;     /* Center the form */
    }
    .login-container h2 {
        font-size: 1.7em;
    }
}

@media (max-width: 480px) {
    .login-container {
        max-width: 90%;
        padding: 20px;
        text-align: center; /* Ensure text alignment */
    }
    .login-container img.logo {
        width: 60px;
    }
    .login-container h2 {
        font-size: 1.5em;
    }
    .login-container input {
        font-size: 0.9em;
        width: 100%; /* Make input full width */
        padding: 10px; /* Better touch area */
    }
    .login-container input[type="submit"] {
        font-size: 1em;
        width: 100%; /* Button full width */
        padding: 12px; /* Better touch area */
    }
}

  </style>
</head>
<body>
  <div class="login-container">
    <img src="img/kj_1.png" alt="Logo" class="logo" />
    <h2>Login</h2>

    <form id="loginForm" method="post" action="">
      <div class="form-group">
        <label for="email">Enter your email</label>
        <input type="text" id="email" name="email" placeholder="Your email" />
        <span id="emailError" class="error-message"></span>
      </div>
      <div class="form-group">
        <label for="password">Enter your password</label>
        <input type="password" id="password" name="password" placeholder="Your password" />
        <span id="passwordError" class="error-message"></span>
      </div>
      <input type="submit" name="submit" value="LOGIN" onclick="submitForm()" />
    </form>

    <?php
    if (isset($error_message)) {
        echo "<div class='error-message'>$error_message</div>";
    }
    ?>

    <!-- Home link below the login button -->
    <a href="index.php" class="home-link">
     
      Want to go on home page? Click here
    </a>
  </div>

  <!-- jQuery (optional) -->
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
