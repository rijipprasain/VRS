<?php
include './admin/connection.php';

$book_id = $_POST['book_id'];
$pageno = $_POST['pageno'];
$regnum = $_POST['regnum'];
$regdate = $_POST['regdate'];
$fname = $_POST['fname'];
$mname = $_POST['mname'];
$lname = $_POST['lname'];
$gender = $_POST['gender'];
$dob = date("Y-m-d H:i:s",strtotime($_POST['dob']));
$bplace = $_POST['bplace'];
$gfname = $_POST['gfname'];
$faname = $_POST['faname'];
$moname = $_POST['moname'];
$regname = $_POST['regname'];
$sql = "INSERT INTO `reservation` (`applicant_id`, `book_id`, `pageno`, `regnum`, `regdate`, `fname`, `mname`, `lname`, `gender`,`dob`,`bplace`,`gfname`,`faname`,`moname`,`regname`)"
    ."VALUES (NULL, '$book_id', '$pageno', '$regnum', '$regdate', '$fname', '$mname', '$lname', '$gender', '$dob', '$bplace', '$gfname', '$faname', '$moname', '$regname');";
mysqli_query($connect,$sql);
header('location:index.php');

