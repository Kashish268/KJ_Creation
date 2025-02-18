<?php
include 'database/config.php'; // Corrected the path
session_start();
if (!isset($_SESSION['admin'])) {
    header('Location:login.php');
    exit();
}

$q="select * from meassage where isreviewed = 1 ORDER BY id DESC";
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
    <style>
        .popup {
    display: none;
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 60%; /* Moderate width for larger screens */
    max-width: 500px; /* Slightly larger */
    max-height: 90vh; /* Ensures it fits within viewport */
    background: #fff;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
    z-index: 1000;
   
    overflow-y: auto;
}

/* Adjust size on tablets and smaller screens */
@media (max-width: 768px) {
    .popup {
        width: 75%; /* Bigger for tablets */
        max-width: 450px;
    }
}

/* Adjust size on mobile screens */
@media (max-width: 600px) {
    .popup {
        width: 90%; /* Bigger on mobile */
        max-width: 420px;
    }
}

/* Smallest screens */
@media (max-width: 400px) {
    .popup {
        width: 95%; /* Almost full width */
        max-width: 380px;
    }
}

/* Ensure scrolling on small screens */
@media (max-height: 700px) {
    .popup {
        max-height: 85vh;
    }
}

/* Close Button */
.close-btn {
    position: absolute;
    top: 8px;
    right: 12px;
    cursor: pointer;
    font-size: 18px;
    font-weight: bold;
    color: #777;
    background: none;
    border: none;
}

.close-btn:hover {
    color: black;
}

/* Centered Heading */
.popup h2 {
    text-align: center;
    font-size: 18px;
    font-weight: bold;
    margin-bottom: 15px;
}

/* Message Details Container */
.details-container {
    border: 1px solid #ddd;
    padding: 12px;
    border-radius: 6px;
    background: #f9f9f9;
    margin-bottom: 12px;
}

/* Details Grid */
.detail-row {
    display: flex;
    justify-content: space-between;
    font-size: 14px;
    font-weight: 500;
    color: #333;
    padding: 6px 0;
    flex-wrap: wrap;
}

/* Responsive - Ensure text doesn’t overflow */
@media (max-width: 400px) {
    .detail-row {
        flex-direction: column;
        font-size: 13px;
        gap: 3px;
    }
}

/* Description Box */
.form-group label {
    font-size: 14px;
    font-weight: 500;
    color: #555;
    display: block;
    margin-bottom: 5px;
}

.form-group textarea {
    width: 100%;
    padding: 8px;
    border: 1px solid #ddd;
    border-radius: 6px;
    font-size: 14px;
    background: #f9f9f9;
    resize: none;
    height: 70px;
}

/* Submit Button */
.button-container {
    display: flex;
    justify-content: center;
    margin-top: 12px;
}

.submit-btn {
    background: rgb(244, 107, 44); 
    color: white;
    border: none;
    padding: 8px 16px;
    font-size: 14px;
    border-radius: 6px;
    cursor: pointer;
    transition: 0.3s;
}

.submit-btn:hover {
    background: rgb(244, 107, 44); 
}

/* Response Popup */
#responsePopup {
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background: white;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    z-index: 9999;
    max-width: 35%; /* Increased */
    max-height: 90vh;
    overflow-y: auto;
}

/* Adjust response popup for tablets */
@media (max-width: 768px) {
    #responsePopup {
        max-width: 50%;
    }
}

/* Adjust response popup for mobile */
@media (max-width: 600px) {
    #responsePopup {
        max-width: 70%;
    }
}

    </style>
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
                    <h1>Clients</h1>
                    <ul class="breadcrumb">
                        <li>
                            <a href="dashboard.php">Dashboard</a>
                        </li>
                        <li><i class='bx bx-chevron-right'></i></li>
                        <li>
                            <a class="active" href="clients.php">Clients</a>
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
                    <th>Note</th>
					<th>Actions</th>
				</tr>
			</thead>
			<tbody>
                
            <?php while($row = mysqli_fetch_assoc($result)) { ?>
                <tr style="background-color: <?php echo ($row['isresponded'] == 1) ? '#d3d3d3' : 'transparent'; ?>;">

    <td><?php echo $row['id']; ?></td>
    <td><?php echo $row['name']; ?></td>
    <td><?php echo $row['contact_no']; ?></td>
    <td>
    <a href="#" onclick="openGmail('<?php echo $row['email']; ?>'); return false;" style="cursor:pointer; color:#515050;">
        <?php echo $row['email']; ?>
    </a>
    </td>

<script>
    function openGmail(toEmail) {
        let gmailUrl = `https://mail.google.com/mail/?view=cm&fs=1&to=${encodeURIComponent(toEmail)}`;
        window.open(gmailUrl, '_blank');
    }
</script>





  <!-- <td><a style="cursor:pointer;"><?php echo $row['email']; ?></a></td> -->
    <td><?php echo $row['message']; ?></td>
    <td><?php echo $row['client_description']?></td>
    <td>

   
    <button class="action-btn response-btn <?php echo ($row['isresponded'] == 1) ? 'disabled-btn' : ''; ?>" 
        onclick="openPopup(this)" 
        data-id="<?php echo $row['id']; ?>" 
        <?php echo ($row['isresponded'] == 1) ? 'disabled' : ''; ?>>
            
        <?php if ($row['isresponded'] == 1): ?>
    <span class="btn btn-success" style="display: inline-block; padding: 5px 10px; border-radius: 5px;">
        <i class="bx bx-check" style="color: white;"></i>
    </span>
<?php else: ?>
    <button class="btn btn-primary respond-btn" data-id="<?= $row['id']; ?>" onclick="openPopup(this)" >
    Respond
</button>
<div id="responsePopup" class="popup">
    <button class="close-btn" onclick="closePopup()">&times;</button>
    
    <h2>Message Details</h2>
    <div class="details-container">
        Are you responded?

        <form action="update_response.php" method="post">
        <!-- Hidden input for ID -->
        <input type="hidden" name="id" id="popupMessageId"> 

        <div class="button-container">
            <input type="submit" class="submit-btn" name="submit" value="Submit"> 
            <button type="button" class="cancel-btn" onclick="closePopup()">Cancel</button>
        </div>
    </form>
    </div>

    
</div>

<?php endif; ?>
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
function openPopup(button) {
    document.getElementById("responsePopup").style.display = "block";
    document.getElementById("popupMessageId").value = button.getAttribute("data-id");
}

function closePopup() {
    document.getElementById("responsePopup").style.display = "none";
}

</script>

    </body>
</html>
<?php
// if(isset($_POST['delete_row'])){
//     $id=$_POST['id'];
//     $q="delete from meassage where id=$id";
//     if (mysqli_query($conn, $q)) {
//         echo "<script>
//             alert('Product deleted successfully');
//             window.location.href = 'meassage.php';
//         </script>";
//     } else {
//         echo "<script>
//             alert('Error deleting product');
//             window.location.href = 'meassage.php';
//         </script>";
//     }

// }

// if (isset($_POST['delete_all'])) {
//     $q = "DELETE FROM meassage";
//     if (mysqli_query($conn, $q)) {
//         echo "<script>
//             alert('All messages deleted successfully');
//             window.location.href = 'meassage.php';
//         </script>";
//     } else {
//         echo "<script>
//             alert('Error deleting all messages');
//             window.location.href = 'meassage.php';
//         </script>";
//     }
// }
 ?>