<?php
include 'connection.php';
$id = $_GET['applicant_id'];
$sql = "SELECT * FROM `birth` WHERE `birth`.`applicant_id` = $id";
$query = mysqli_query($connect,$sql);
$data = array();
while($row = mysqli_fetch_array($query)){
	array_push($data, $row);
}

 echo "<pre>";
print_r($data);
   echo "</pre>";



?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>VRS</title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="css/bootstrap.css" />

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="css/form.css" />

</head>
<body>
	<h1>New Data Entry</h1>

	<form method="post" action="edit_process.php">
		<div class="container">
			<h3>Book Information</h3>
			<div class="row">
				<div class="col-sm-3">
					<div class="form-group">
						<span class="form-label">Book Id</span>
							<input name="book_id" id="book_id" class="form-control" type="number" placeholder="<?php print_r($data[0]['book_id']); ?>" >
					</div>
				</div>
			<div class="col-sm-3">
				<div class="form-group">
					<span class="form-label">Page No.</span>
						<input name="pageno" id="pageno" class="form-control" type="number" placeholder="<?php print_r($data[0]['pageno']); ?>" >
				</div>
			</div>
				<div class="col-sm-3">
					<div class="form-group">
						<span class="form-label">Registration Number </span>
						<input name="regnum" id="regnum" class="form-control" type="number" placeholder="<?php print_r($data[0]['regnum']); ?>">
					</div>
				</div>
				<div class="col-sm-3">
					<div class="form-group">
						<span class="form-label">Registration Date</span>
						<input name="regdate" id="regdate" class="form-control" type="date" placeholder="<?php print_r($data[0]['regdate']); ?>" >
					</div>
				</div>
			</div>
		<div class="container">
			<h3>New Born Child Details</h3>
			<div class="row">
				<div class="col-sm-4">
					<div class="form-group">
						<span class="form-label">First Name</span>
							<input name="fname" id="fname" class="form-control" type="text" placeholder="<?php print_r($data[0]['fname']); ?>" value="<?php $data[0]['fname']; ?>"  >
					</div>
				</div>
			<div class="col-sm-4">
				<div class="form-group">
					<span class="form-label">Middle Name</span>
						<input name="mname" id="mname" class="form-control" type="text" placeholder="<?php print_r($data[0]['mname']); ?>" >
				</div>
			</div>
				<div class="col-sm-4">
					<div class="form-group">
						<span class="form-label">Last Name</span>
						<input name="lname" id="lname" class="form-control" type="text" placeholder="<?php print_r($data[0]['lname']); ?>" >
					</div>
				</div>
			</div>
			<div class="radio">
  				<label><input type="radio" name="gender" id="gender" value="Male">Male</label>


  				<label><input type="radio" name="gender" id="gender" value="Female" >Female</label>
				</div>
			<div class="row">
				<div class="col-sm-6">
					<div class="form-group">
						<span class="form-label">Date Of Birth</span>
							<input name="dob" id="dob" class="form-control" type="date" placeholder="<?php print_r($data[0]['dob']); ?>" >
						</div>
					</div>
				<div class="col-sm-6">
					<div class="form-group">
						<span class="form-label">Birth Place</span>
							<input name="bplace" id="bplace" class="form-control" type="text" placeholder="<?php print_r($data[0]['bplace']); ?>" >
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<h3>Family Details</h3>
			<div class="row">
				<div class="col-sm-4">
					<div class="form-group">
						<span class="form-label">GrandFather Name</span>
							<input name="gfname" id="gfname" class="form-control" type="text" placeholder="<?php print_r($data[0]['gfname']); ?>" >
					</div>
				</div>
			<div class="col-sm-4">
				<div class="form-group">
					<span class="form-label">Father Name</span>
						<input name="faname" id="faname" class="form-control" type="text" placeholder="<?php print_r($data[0]['faname']); ?>" >
				</div>
			</div>
				<div class="col-sm-4">
					<div class="form-group">
						<span class="form-label">Mother Name</span>
						<input name="moname" id="moname" class="form-control" type="text" placeholder="<?php print_r($data[0]['moname']); ?>" >
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<h3>Registrar Details</h3>
			<div class="row">
				<div class="col">
					<div class="form-group">
						<span class="form-label">Full Name</span>
							<input name="regname" id="regname" class="form-control" type="text" placeholder="<?php print_r($data[0]['regname']); ?>" >
					</div>
				</div>
			
				
		</div>
		<div class="container">
			<div class="form-btn">
									<button class="submit-btn" type="submit">Update</button>
									<input type="hidden" name="applicant_id" id="applicant_id" value="<?php echo $data[0]['applicant_id']; ?>">
									<button class="cancel-btn" onclick="window.location.href='index.php'">Cancel</button>
								</div>
		
		</div>

		
	</form>
	
</body>
</html>