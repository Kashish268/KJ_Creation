
<?php
include 'database/config.php'; // Corrected the path
session_start();
if (!isset($_SESSION['admin'])) {
    header('Location:login.php');
    exit();
}

$q="select * from meassage ORDER BY id DESC";
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
 /* Overlay Background */
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
                    <h1>FeedBack</h1>
                    <ul class="breadcrumb">
                        <li>
                            <a href="dashboard.php">Dashboard</a>
                        </li>
                        <li><i class='bx bx-chevron-right'></i></li>
                        <li>
                            <a class="active" href="meassage.php">FeedBack</a>
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
                <tr style="background-color: <?php echo ($row['isreviewed'] == 1) ? '#d3d3d3' : 'transparent'; ?>;">

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
    <td><?php echo $row['message']; ?></td>
    <td>

   
    <button class="action-btn response-btn <?php echo ($row['isreviewed'] == 1) ? 'disabled-btn' : ''; ?>" 
        onclick="openPopup(this)" 
        data-id="<?php echo $row['id']; ?>" 
        <?php echo ($row['isreviewed'] == 1) ? 'disabled' : ''; ?>>
            
    <?php echo ($row['isreviewed'] == 1) ? '<span class="btn-text" style="border-radius:10px;background-color:green; padding:27%;">Reviewed</span>' : '<i class="bx bx-message-dots"></i>'; ?>
</button>




</form>
<div id="responsePopup" class="popup">
    <button class="close-btn" onclick="closePopup()">&times;</button>
    <h2>Message Details</h2>

    <div class="details-container">
        <div class="detail-row"><span>ID :</span> <span id="messageId"></span></div>
        <div class="detail-row"><span>Name :</span> <span id="messageName"></span></div>
        <div class="detail-row"><span>Email :</span> <span id="messageEmail"></span></div>
        <div class="detail-row"><span>Contact No :</span> <span id="messageContact"></span></div>
        <div class="detail-row"><span>Message :</span> <span id="messageText"></span></div>
    </div>

    <form action="submit_response.php" method="post" >
<!-- Hidden input for ID (value will be set dynamically) -->
<input type="hidden" name="id" id="popupMessageId"> 

    <div class="form-group">
        <label>Client Description</label>
        <textarea id="clientDescription" name="client_description" placeholder="Enter description" required></textarea>
    </div>

    <div class="button-container">
        <input type="submit" class="submit-btn" name="submit" value="Submit"> <!-- Add name="submit" -->
    </div>
</form>

</div>
<!-- <form action="meassage.php" method="post" style="display: inline;">
    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
    <button type="submit" name="delete_row" class="action-btn delete-btn">
        <i class="bx bx-trash"></i>
    </button>
</form> -->

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
        var id = button.getAttribute("data-id");

        // Fetch data via AJAX
        fetch('fetch_meassage.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded',
            },
            body: 'id=' + id
        })
        .then(response => response.json())
        .then(data => {
            document.getElementById("messageId").innerText = data.id;
            document.getElementById("messageName").innerText = data.name;
            document.getElementById("messageEmail").innerText = data.email;
            document.getElementById("messageContact").innerText = data.contact_no;
            document.getElementById("messageText").innerText = data.message;
            document.getElementById("responsePopup").style.display = "block";
            document.getElementById("popupMessageId").value = data.id;

        })
        .catch(error => console.error('Error:', error));
    }

    function closePopup() {
        document.getElementById("responsePopup").style.display = "none";
    }

    function submitResponse() {
        var description = document.getElementById("clientDescription").value;
        alert("Response submitted with description: " + description);
        closePopup();
    }
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