 <?php
include 'connection.php';
$id = $_GET['id'];
$sql = "DELETE FROM `birth` WHERE `birth`.`applicant_id` = $id";
$query = mysqli_query($connect,$sql);
header('location: index.php');