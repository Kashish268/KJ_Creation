
<?php
include 'database/config.php'; // Corrected the path
session_start();
if (!isset($_SESSION['admin'])) {
    header('Location:login.php');
    exit();
}

$q="select * from meassage";
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
    <link rel="stylesheet" href="style_ad.css">
    <title>Products</title>
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
                    <h1>FeedBack</h1>
                    <ul class="breadcrumb">
                        <li>
                            <a href="dashboard.php">Dashboard</a>
                        </li>
                        <li><i class='bx bx-chevron-right'></i></li>
                        <li>
                            <a class="active" href="products.php">FeedBack</a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="table-data">
	<div class="order">
		<div class="head">
			<h3>FeedBack</h3>
             <!-- Delete All Button -->
             <!-- <form action="meassage.php" method="post" style="display: inline;">
                            <button type="submit" name="delete_all" class="btn-delete-all">
                                <i class="bx bx-trash"></i> Delete All
                            </button>
                        </form> -->
		</div>
		<table id="productTable">
			<thead>
				<tr>
					<th>ID</th>
					<th>Name</th>
					<th>Contact No</th>
					<th>Email</th>
					<th>Meassge</th>
					<th>Actions</th>
				</tr>
			</thead>
			<tbody>
                
            <?php while($row = mysqli_fetch_assoc($result)) { ?>
<tr>
    <td><?php echo $row['id']; ?></td>
    <td><?php echo $row['name']; ?></td>
    <td><?php echo $row['contact_no']; ?></td>
    <td><?php echo $row['email']; ?></td>
    <td><?php echo $row['message']; ?></td>
    <td>
    <!-- <form action="edit_product.php" method="post" style="display: inline;">
    <input type="hidden" name="id" value="">
    <button type="submit" class="action-btn edit-btn">
        <i class="bx bx-edit"></i>
    </button>
</form> -->

<form action="meassage.php" method="post" style="display: inline;">
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

    <!-- Script -->
    <script src="script1.js"></script>
   

    </script>
</body>
</html>
<?php
if(isset($_POST['delete_row'])){
    $id=$_POST['id'];
    $q="delete from meassage where id=$id";
    if (mysqli_query($conn, $q)) {
        echo "<script>
            alert('Product deleted successfully');
            window.location.href = 'meassage.php';
        </script>";
    } else {
        echo "<script>
            alert('Error deleting product');
            window.location.href = 'meassage.php';
        </script>";
    }

}

if (isset($_POST['delete_all'])) {
    $q = "DELETE FROM meassage";
    if (mysqli_query($conn, $q)) {
        echo "<script>
            alert('All messages deleted successfully');
            window.location.href = 'meassage.php';
        </script>";
    } else {
        echo "<script>
            alert('Error deleting all messages');
            window.location.href = 'meassage.php';
        </script>";
    }
}
?>