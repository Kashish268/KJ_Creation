
<?php
include 'database/config.php'; // Corrected the path
session_start();
if (!isset($_SESSION['admin'])) {
    header('Location:login.php');
    exit();
}

// Query to check if there's at least one row in the 'offers' table
// $q = "SELECT COUNT(*) AS total_rows FROM offers";
// $result_count = mysqli_query($conn, $q);
// $row_count = mysqli_fetch_assoc($result_count)['total_rows'];



$q="select * from headlines ORDER BY id DESC";
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
                    <h1>Headlines</h1>
                    <ul class="breadcrumb">
                        <li>
                            <a href="dashboard.php">Dashboard</a>
                        </li>
                        <li><i class='bx bx-chevron-right'></i></li>
                        <li>
                            <a class="active" href="marquee.php">HeadLines</a>
                        </li>
                    </ul>
                </div>
                <a href="add_marquee.php" class="btn-download">
                <i class='bx bxs-plus-circle'></i>
                    <span class="text">Add Headlines</span>
                </a>
            </div>

            <div class="table-data">
	<div class="order">
		<div class="head">
			<h3>Headlines</h3>
          
		</div>
		<table id="productTable">
			<thead>
				<tr>
					<th>ID</th>
					<th>Title</th>
                    <th>Color</th>	
					<th>Actions</th>
				</tr>
			</thead>
			<tbody>
                
            <?php while($row = mysqli_fetch_assoc($result)) { ?>
<tr>
    <td><?php echo $row['id']; ?></td>
    <td><?php echo $row['text_value']; ?></td>
    <td><?php echo $row['color_code']; ?></td>
    <td>
          <div class="action-btn-group">

    <form action="edit_marquee.php" method="post" style="display: inline;">
    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
    <button type="submit" class="action-btn edit-btn">
        <i class="bx bx-edit"></i>
    </button>
</form>

<form action="marquee.php" method="post" style="display: inline;">
    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
    <button type="submit" name="delete_row" class="action-btn delete-btn">
        <i class="bx bx-trash"></i>
    </button>
</form>
</td>
</div>
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

    <!-- Script -->
    <script src="script1.js"></script>
   

    </script>
</body>
</html>
<?php
if(isset($_POST['delete_row'])){
    $id=$_POST['id'];
    $q="delete from headlines where id=$id";
    if (mysqli_query($conn, $q)) {
        echo "<script>
            alert('Deleted successfully');
            window.location.href = 'marquee.php';
        </script>";
    } else {
        echo "<script>
            alert('Error deleting product');
            window.location.href = 'marquee.php';
        </script>";
    }

}


?>