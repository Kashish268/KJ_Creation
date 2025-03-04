<?php
include 'database/config.php'; // Corrected the path
session_start();
if (!isset($_SESSION['admin'])) {
    header('Location:login.php');
    exit();
}

$q="select * from products ORDER BY id DESC";
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
                    <h1>Products</h1>
                    <ul class="breadcrumb">
                        <li>
                            <a href="dashboard.php">Dashboard</a>
                        </li>
                        <li><i class='bx bx-chevron-right'></i></li>
                        <li>
                            <a class="active" href="products.php">Products</a>
                        </li>
                    </ul>
                </div>
                <a href="add_products.php" class="btn-download">
                    <i class='bx bxs-plus-circle'></i>
                    <span class="text">Add Product</span>
                </a>
            </div>

            <div class="table-data">
	<div class="order">
    <div class="head" style="display: flex; justify-content: space-between; align-items: center;">
    <h3>Product List</h3>
    <input type="text" id="search" placeholder="Search Product..." onkeyup="filterTable()" style="width:270px"/ >
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
                    <th>Product Code</th>
					<th>Price</th>
					<th>Description</th>
					<th>Shop Name</th>
                    <th>Product Category</th>
					<th>Image</th>
                    <!-- <th>Que & Ans</th> -->
					<th>Actions</th>
				</tr>
			</thead>
			<tbody>
                
            <?php while($row = mysqli_fetch_assoc($result)) { ?>
<tr>
    <td><?php echo $row['id']; ?></td>
    <td><?php echo $row['name']; ?></td>
    <td><?php echo $row['p_code']; ?></td>
    <td><?php echo $row['price']; ?></td>
    <td><?php echo $row['des']; ?></td>
    <td><?php echo $row['shopname']; ?></td>
    <td><?php echo $row['categories'];?></td>
    <td><img src="uploaded_images/<?php echo $row['image']; ?>" alt="Product Image"></td>
    <!-- <td>
  <?php
    $questions = json_decode($row['question'], true); // Convert JSON to PHP array
    if (!empty($questions)) {
        foreach ($questions as $index => $qa) {
            echo ($index + 1) . ". <b>Q:</b> " . htmlspecialchars($qa['question']) . "<br>";
            echo "&nbsp;&nbsp;&nbsp;<b>A:</b> " . htmlspecialchars($qa['answer']) . "<br><br>";
        }
    } else {
        echo "No Questions Available";
    }
    ?>
</td>  -->
    <td>
    <form action="edit_product.php" method="post" style="display: inline;">
    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
    <button type="submit" class="action-btn edit-btn">
        <i class="bx bx-edit"></i>
    </button>
</form>

<form action="delete_product.php" method="post" style="display: inline;">
    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
    <button type="submit" class="action-btn delete-btn">
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
    <script>
        function filterTable() {
	const input = document.getElementById('search');
	const filter = input.value.toLowerCase();
	const table = document.getElementById('productTable');
	const rows = table.getElementsByTagName('tr');

	for (let i = 1; i < rows.length; i++) {
		const cells = rows[i].getElementsByTagName('td');
		let match = false;

		for (let j = 0; j < cells.length; j++) {
			if (cells[j].innerText.toLowerCase().includes(filter)) {
				match = true;
				break;
			}
		}
		rows[i].style.display = match ? '' : 'none';
	}
}

    </script>
</body>
</html>
<?php
if (isset($_POST['delete_all'])) {
    $q = "DELETE FROM products";
    if (mysqli_query($conn, $q)) {
        echo "<script>
            alert('All offers deleted successfully');
            window.location.href = 'products.php';
        </script>";
    } else {
        echo "<script>
            alert('Error deleting all offers');
            window.location.href = 'products.php';
        </script>";
    }
}
?>