<?php
include "connection.php";
$id = $_POST['applicant_id'];
 
$sql = "SELECT * FROM `birth` WHERE `birth`.`applicant_id` = $id";

//parse and execute the statement
$query = mysqli_query($connect,$sql);

$data = array();
while($row = mysqli_fetch_array($query)){
	array_push($data, $row);
}







$newbook_id = $_POST['book_id'];
$newpageno = $_POST['pageno'];
$newregnum = $_POST['regnum'];
$newregdate = $_POST['regdate'];
$newfname = $_POST['fname'];
$newmname = $_POST['mname'];
$newlname = $_POST['lname'];
$newgender = $_POST['gender'];
$newdob = date("Y-m-d H:i:s",strtotime($_POST['dob']));
$newbplace = $_POST['bplace'];

$newgfname = $_POST['gfname'];
$newfaname = $_POST['faname'];
$newmoname = $_POST['moname'];
$newregname = $_POST['regname'];


print_r($_POST);
if(empty($newbook_id))
{
	$newbook_id=$data[0]['book_id'];
}
if(empty($newpageno))
{
	$newpageno=$data[0]['pageno'];
}
if(empty($newregnum))
{
	$newregnum=$data[0]['regnum'];
}
if(empty($newregdate))
{
	$newregdate=$data[0]['regdate'];
}
if(empty($newfname))
{
	$newfname=$data[0]['fname'];
}
if(empty($newmname))
{
	$newmname=$data[0]['mname'];
}
if(empty($newlname))
{
	$newlname=$data[0]['lname'];
}
if(empty($newgender))
{
	$newgender=$data[0]['gender'];
}
if(empty($newdob))
{
	$newdob=$data[0]['dob'];
}
if(empty($newbplace))
{
	$newbplace=$data[0]['bplace'];
}

if(empty($newgfname))
{
	$newgfname=$data[0]['gfname'];
}
if(empty($newfaname))
{
	$newfaname=$data[0]['faname'];
}
if(empty($newmoname))
{
	$newmoname=$data[0]['moname'];
}
if(empty($newregname))
{
	$newregname=$data[0]['regname'];
}


 

$sql = "UPDATE `birth` SET `book_id` = '$newbook_id', `pageno` = '$newpageno', `regnum` = '$newregnum', `regdate` = '$newregdate', `fname` = '$newfname', `mname` = '$newmname', `lname` = '$newlname', `gender` = '$newgender', `dob` = '$newdob', `bplace` = '$newbplace', `gfname` = '$newgfname', `faname` = '$newfaname', `moname` = '$newmoname', `regname` = '$newregname' WHERE `birth`.`applicant_id` = $id";
mysqli_query($connect,$sql);


 header("location: index.php");

