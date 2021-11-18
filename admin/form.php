<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; -->

	<title>VRS</title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="css/bootstrap.css" />

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="css/form.css" />

</head>
<body>
	<h1>New Birth Data Entry</h1>

	<form method="post" action="insert_data.php">
		<div class="container">
			<h3>Book Information</h3>
			<div class="row">
				<div class="col-sm-3">
					<div class="form-group">
						<span class="form-label">Book Id</span>
							<input name="book_id" id="book_id" class="form-control" type="number" >
					</div>
				</div>
			<div class="col-sm-3">
				<div class="form-group">
					<span class="form-label">Page No.</span>
						<input name="pageno" id="pageno" class="form-control" type="number" >
				</div>
			</div>
				<div class="col-sm-3">
					<div class="form-group">
						<span class="form-label">Registration Number </span>
						<input name="regnum" id="regnum" class="form-control" type="number" >
					</div>
				</div>
				<div class="col-sm-3">
					<div class="form-group">
						<span class="form-label">Registration Date</span>
						<input name="regdate" id="regdate" class="form-control" type="date" >
					</div>
				</div>
			</div>
		<div class="container">
			<h3>New Born Child Details</h3>
			<div class="row">
				<div class="col-sm-4">
					<div class="form-group">
						<span class="form-label">First Name</span>
							<input name="fname" id="fname" class="form-control" type="text" >
					</div>
				</div>
			<div class="col-sm-4">
				<div class="form-group">
					<span class="form-label">Middle Name</span>
						<input name="mname" id="mname" class="form-control" type="text" >
				</div>
			</div>
				<div class="col-sm-4">
					<div class="form-group">
						<span class="form-label">Last Name</span>
						<input name="lname" id="lname" class="form-control" type="text" >
					</div>
				</div>
			</div>
			<div class="radio">
  				<label><input type="radio" name="gender" id="gender" value="Male" checked>Male</label>


  				<label><input type="radio" name="gender" id="gender" value="Female" >Female</label>
				</div>
			<div class="row">
				<div class="col-sm-6">
					<div class="form-group">
						<span class="form-label">Date Of Birth</span>
							<input name="dob" id="dob" class="form-control" type="date" required>
						</div>
					</div>
				<div class="col-sm-6">
					<div class="form-group">
						<span class="form-label">Birth Place</span>
							<input name="bplace" id="bplace" class="form-control" type="text" required>
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
							<input name="gfname" id="gfname" class="form-control" type="text" >
					</div>
				</div>
			<div class="col-sm-4">
				<div class="form-group">
					<span class="form-label">Father Name</span>
						<input name="faname" id="faname" class="form-control" type="text" >
				</div>
			</div>
				<div class="col-sm-4">
					<div class="form-group">
						<span class="form-label">Mother Name</span>
						<input name="moname" id="moname" class="form-control" type="text" >
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
							<input name="regname" id="regname" class="form-control" type="text" >
					</div>
				</div>
			
				
		</div>
		<div class="container">
			<div class="form-btn">
									<button class="submit-btn" type="submit">Submit</button>
									<button class="cancel-btn" onclick="window.location.href='index.php'">Cancel</button>
								</div>
		
		</div>

		
	</form>
	
</body>
</html>