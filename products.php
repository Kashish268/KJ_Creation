
<?php
include 'database/config.php'; // Corrected the path
session_start();
if (!isset($_SESSION['admin'])) {
    header('Location:login.php');
    exit();
}

$q="select * from products";
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
    <!-- CSS -->
    <link rel="stylesheet" href="style2.css">
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
		<div class="head">
			<h3>Product List</h3>
			<input type="text" id="search" placeholder="Search Product..." onkeyup="filterTable()" />
		</div>
		<table id="productTable">
			<thead>
				<tr>
					<th>ID</th>
					<th>Product Name</th>
					<th>Price</th>
					<th>Description</th>
					<th>Shop Name</th>
					<th>Image</th>
					<th>Actions</th>
				</tr>
			</thead>
			<tbody>
                
            <?php while($row = mysqli_fetch_assoc($result)) { ?>
<tr>
    <td><?php echo $row['id']; ?></td>
    <td><?php echo $row['name']; ?></td>
    <td><?php echo $row['price']; ?></td>
    <td><?php echo $row['des']; ?></td>
    <td><?php echo $row['shopname']; ?></td>
    <td><img src="<?php echo 'uploaded_images/' . $row['IMAGE']; ?>" alt="Product Image"></td>
    <td>
        <span class="action-btn edit-btn"><i class="bx bx-edit"></i></span>
        <span class="action-btn delete-btn"><i class="bx bx-trash"></i></span>
    </td>
</tr>
<?php } ?>

				<!-- <tr>
					<td>2</td>
					<td>Product 2</td>
					<td>$200</td>
					<td>Sample Description</td>
					<td>Shop B</td>
					<td><img src="product2.jpg" alt="Product Image"></td>
					<td>
						<span class="action-btn edit-btn"><i class="bx bx-edit"></i></span>
						<span class="action-btn delete-btn"><i class="bx bx-trash"></i></span>
					</td>
				</tr> -->
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
