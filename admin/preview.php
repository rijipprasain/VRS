<?php

include 'connection.php';
$id = $_GET['applicant_id'];

$sql = "SELECT * FROM `birth` WHERE `birth`.`applicant_id` = $id";

//parse and execute the statement
$query = mysqli_query($connect,$sql);

$data = array();
while($row = mysqli_fetch_array($query)){
	array_push($data, $row);
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>Booking Form HTML Template</title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="css/bootstrap.css" />

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="css/form.css" />

</head>
<body>
	<div class="container">
  <h2>Book Information</h2>
             
  <table class="table table-bordered">
    
  
      <tr>
        <td>Book Id</td>
        <td><?php print_r($data[0]['book_id']); ?></td>
        
      </tr>
      <tr>
        <td>Page No.</td>
        <td><?php print_r($data[0]['pageno']); ?></td>
       
      </tr>
      <tr>
        <td>Registration Number</td>
        <td><?php print_r($data[0]['regnum']); ?></td>
        
      </tr>
      <tr>
        <td>Registration Number</td>
        <td><?php print_r($data[0]['regdate']); ?></td>
        
      </tr>
  
  </table>
</div>

<div class="container">
  <h2>New Born Child Information</h2>
             
  <table class="table table-bordered">
    
  
      <tr>
        <td>First Name</td>
        <td><?php print_r($data[0]['fname']); ?></td>
        
      </tr>
      <tr>
        <td>Middle Name</td>
        <td><?php print_r($data[0]['mname']); ?></td>
       
      </tr>
      <tr>
        <td>Last Name</td>
        <td><?php print_r($data[0]['lname']); ?></td>
        
      </tr>
      <tr>
        <td>Gender</td>
        <td><?php print_r($data[0]['gender']); ?></td>
        
      </tr>
      <tr>
        <td>DateOfBirth</td>
        <td><?php print_r($data[0]['dob']); ?></td>
        
      </tr>
      <tr>
        <td>Birth Place</td>
        <td><?php print_r($data[0]['bplace']); ?></td>
        
      </tr>
  
  </table>
</div>

<div class="container">
  <h2>Family Information</h2>
             
  <table class="table table-bordered">
    
  
      <tr>
        <td>Grand Father Name</td>
        <td><?php print_r($data[0]['gfname']); ?></td>
        
      </tr>
      <tr>
        <td>Father Name</td>
        <td><?php print_r($data[0]['faname']); ?></td>
       
      </tr>
      <tr>
        <td>Mother Name</td>
        <td><?php print_r($data[0]['moname']); ?></td>
        
      </tr>
      
  
  </table>
</div>
<div class="container">
  <h2>Registrar Information</h2>
             
  <table class="table table-bordered">
    
  
      <tr>
        <td>Full Name</td>
        <td><?php print_r($data[0]['regname']); ?></td>
        
      </tr>
      
      
  
  </table>

  <form method="post" action="index.php">
		
									
									<button class="cancel-btn" onclick="window.location.href='index.php'">Home</button>
							
		
	

		
	</form>
</div>	
</body>
</html>