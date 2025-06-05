<?php
include 'database/config.php';
session_start();

if (!isset($_SESSION['admin'])) {
    header('Location: login.php');
    exit();
}


$id = $_REQUEST['id']; // Retrieve the ID

$q = "SELECT * FROM headlines WHERE id = $id"; // Query to fetch offer details
$result = mysqli_query($conn, $q);

if (mysqli_num_rows($result) > 0) {
    $a = mysqli_fetch_array($result);
    // Use $a['column_name'] to get offer details
    $text_value = $a['text_value'];
    $color_code = $a['color_code'];
} else {
    // If no result found, redirect or handle the error
    echo "<script>alert('Data not found'); window.location.href = 'marquee.php';</script>";
    exit();
}

// Update logic
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['update'])) {
    $id = $_POST['id'];
    $text_value = $_POST['description'];
    $color_code = $_POST['headline_color'];

    $q = "UPDATE headlines SET text_value='$text_value', color_code='$color_code' WHERE id='$id'";
    if (mysqli_query($conn, $q)) {
        echo "<script>alert('Updated successfully!'); window.location.href = 'marquee.php';</script>";
    } else {
        echo "<script>alert('Error in Updating!'); window.location.href = 'marquee.php';</script>";
    }
}
?>
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>KJ CREATION</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Boxicons -->
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <!-- Favicons -->
    <link href="img/kj_1.png" rel="icon">
    <link href="img/apple-touch-icon.png" rel="apple-touch-icon">
    <!-- CSS -->
    <link rel="stylesheet" href="style_admin.css">
       <style>

        form {
            font-family: 'Lato', sans-serif;
            font-size: 16px;
            display: flex;
            flex-direction: column;
            gap: 20px;
            padding: 20px;
            background-color: #1e1e1e; /* Dark form background */
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            max-width: 600px;
            margin: 0 auto;
            color:white;
        }

        form input, form select, form textarea {
            font-family: 'Poppins', sans-serif;
            font-size: 16px;
            padding: 12px;
            border: 1px solid #444; /* Darker border */
            border-radius: 4px;
            outline: none;
            background-color: #333; /* Dark input fields */
            color: white; /* White text in inputs */
            transition: border-color 0.3s ease;
        }

        form input:focus, form select:focus, form textarea:focus {
            border-color: #FF8C00; /* Orange focus border color */
        }

        form textarea {
            resize: vertical;
            min-height: 100px;
        }

        form .btn {
            font-family: 'Poppins', sans-serif;
            font-size: 16px;
            padding: 12px 20px;
            background: rgb(244, 107, 44);
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            width: 100%;
        }

        form .btn:hover {
            background: rgb(214, 71, 5);
        }

        form .error {
            color: red;
            font-size: 14px;
            margin-top: -10px;
            margin-bottom: 10px;
        }

        form input[type="number"] {
            -moz-appearance: textfield;
        }

        form input[type="number"]::-webkit-outer-spin-button,
        form input[type="number"]::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        form input[type="number"] {
            text-align: right;
        }

        @media screen and (max-width: 768px) {
            form {
                padding: 15px;
            }

            form input, form select, form textarea {
                font-size: 14px;
            }

            form .btn {
                font-size: 14px;
                padding: 10px 15px;
            }
        }

        @media screen and (max-width: 480px) {
            form {
                max-width: 100%;
                padding: 10px;
            }

            form input, form select, form textarea {
                font-size: 14px;
                padding: 10px;
            }

            form .btn {
                font-size: 14px;
                padding: 10px 15px;
            }
        }

        /* Style for the back arrow */

    </style>
</head>
<body>
    <?php include 'sidebar.php'; ?>
    <section id="content">
        <?php include 'navbar.php'; ?>
        <main>
            <h2 style="color: rgb(244, 107, 44); margin-bottom: 20px;">Edit Headline</h2>
            <form method="post">
                <input type="hidden" name="id" value="<?php echo $id; ?>">
                <label for="description">Enter Text:</label>
                <textarea name="description" id="description" rows="4" required><?php echo htmlspecialchars($text_value); ?></textarea>
                <label for="headline_color">Headline Color:</label>
                <input type="color" name="headline_color" id="headline_color" value="<?php echo htmlspecialchars($color_code); ?>" required>
                <input type="submit" name="update" class="btn" value="Update">

            </form>
        </main>
    </section>
    <script src="script1.js"></script>
</body>
</html>
