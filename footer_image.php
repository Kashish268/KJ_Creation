<?php
include 'database/config.php'; // Ensure this file has the correct database connection
session_start();

if (!isset($_SESSION['admin'])) {
    header('Location: login.php');
    exit();
}
$q="SELECT * FROM f_image ORDER BY id DESC";
$result = mysqli_query($conn,$q);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Boxicons -->
    <link href="https://cdn.jsdelivr.net/npm/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>

    <!-- Favicons -->
  <link href="img/kj_1.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- CSS -->
    <link rel="stylesheet" href="style_admin.css">
    <title>KJ CREATION</title>
</head>
<body>

    <?php include 'sidebar.php'; ?>

    <!-- CONTENT -->
    <section id="content">
        <?php include 'navbar.php'; ?>

        <!-- MAIN -->
        <main>
            <div class="head-title">
                <div class="left">
                    <h1>Footer Images</h1>
                    <ul class="breadcrumb">
                        <li>
                            <a href="dashboard.php">Dashboard</a>
                        </li>
                        <li><i class='bx bx-chevron-right'></i></li>
                        <li>
                            <a class="active" href="footer_image.php">Footer Images</a>
                        </li>
                    </ul>
                </div>
                <a href="add_footer_image.php" class="btn-download">
                    <i class='bx bxs-plus-circle'></i>
                    <span class="text">Add Image</span>
                </a>
            </div>

            <div class="table-data">
	<div class="order">
    <div class="head" style="display: flex; justify-content: space-between; align-items: center;">
    <h3>Image List</h3>
    <!-- <input type="text" id="search" placeholder="Search Product..." onkeyup="filterTable()" style="width:270px"/ > -->
    <!-- <form action="products.php" method="post" style="display: inline;">
        <button type="submit" name="delete_all" class="btn-delete-all" style="margin-left: auto;">
            <i class="bx bx-trash"></i> Delete All
        </button>
    </form> -->
</div>

		<table id="productTable">
			<thead>
				<tr>
					<th>ID</th>
					<th>Product Name</th>
					<th>Image</th>
					<th>Actions</th>
				</tr>
			</thead>
			<tbody>
                
            <?php while($row = mysqli_fetch_assoc($result)) { ?>
<tr>
    <td><?php echo $row['id']; ?></td>
    <td><?php echo $row['title']; ?></td>
    <td><img src="<?php echo 'uploaded_images/' . $row['image']; ?>" alt="Product Image"></td>
    <td>
    <form action="edit_footer_image.php" method="post" style="display: inline;">
    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
    <button type="submit" class="action-btn edit-btn">
        <i class="bx bx-edit"></i>
    </button>
</form>

<form action="footer_image.php" method="post" style="display: inline;">
    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
    <button type="submit" name="delete_row" class="action-btn delete-btn">
        <i class="bx bx-trash"></i>
    </button>
</form>

</td>

</tr>
<?php } ?>

				
			</tbody>
		</table>
	</div>
</div>
      </div>
        </main>
    </section>
    <script src="script1.js"></script>
    </body>
    </html>
<?php
    if(isset($_POST['delete_row'])){
    $id=$_POST['id'];
    $q="delete from f_image where id=$id";
    if (mysqli_query($conn, $q)) {
        echo "<script>
            alert('Image deleted successfully');
            window.location.href = 'footer_image.php';
        </script>";
    } else {
        echo "<script>
            alert('Error deleting Image');
            window.location.href = 'footer_image.php';
        </script>";
    }

}
?>
