<?php
include 'database/config.php';

if(isset($_POST['id'])){
    $id = $_POST['id'];
    $query="select * from meassage where id='$id'";
    $result = mysqli_query($conn,$query);
    $row = mysqli_fetch_assoc($result);
     echo json_encode($row);

}