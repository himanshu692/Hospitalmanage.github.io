<?php 
include('func.php');
include('Check_login.php');
check_login();
			

if(isset($_POST['register']))
{
	$fstname = $_POST['fstname'];
	$lstname = $_POST['lstname'];
	$gnder = $_POST['gnder'];
	$Age = $_POST['Age'];
	$dateofbirth = $_POST['dateofbirth'];
	$mobileno = $_POST['mobileno'];
	$localaddress = $_POST['localaddress'];
	$permanent = $_POST['permanent'];
	$emal = $_POST['emal'];
	$file = $_FILES['image'];
	$city = $_POST['city'];
	$state = $_POST['state'];
	$pincode = $_POST['pincode'];

	$filename = $file['name'];
	$filepath = $file['tmp_name'];
	$fileerror = $file['error'];

	if($fileerror == 0)
	{
		$destfile = 'uploaded images/'.$filename;
		move_uploaded_file($filepath, $destfile);

		$insertquery = " insert into staffdb(fstname, lstname,gnder,Age,dateofbirth,mobileno,localaddress,permanent,emal,image,city,state,pincode) values('$fstname','$lstname','$gnder','$Age','$dateofbirth','$mobileno','$localaddress','$permanent','$emal','$destfile','$city','$state','$pincode')";

		$query = mysqli_query($con,$insertquery);
		if($query)
			{
			?>
				<script>
					alert(' Details Registerd');

				</script>
				<?php
				{
					echo"<script>window.open('addstaffdetails.php', '_self')</script>";
				} 
				}
	}
}


 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Andika+New+Basic&family=Roboto&display=swap" rel="stylesheet">
</head>
<body style="font-size:20px;">
 	<div class="container">
 		<form name="myform" action="" method="POST" class="form-group" enctype="multipart/form-data">
 			<h2 style="text-align: center; font-weight: bold; font-size:40px;">Register New Staff</h2>
 			<div class="row jumbotron">
 				<div class="col-md-6">
 					<label for="inputname"> First Name</label>
 					<input type="text" class="form-control" placeholder="First name" name="fstname">
 				</div>

 				<div class="col-md-6">
 					<label for="inputname"> Last Name</label>
 					<input type="text" class="form-control" placeholder="Last name" name="lstname">
 				</div>

 				<div class="col-md-6">
 					<label for="gender"> Gender</label>
 					<select class="form-control" name="gnder">
 						<option>Male</option>
 						<option>Female</option>
 					</select>
 				</div>

 				<div class="col-md-6">
 					<label for="age"> Age </label>
 					<input type="number" class="form-control" placeholder="Age"   name="Age">
 				</div>

 				<div class="col-md-6">
 					<label for="age"> Date of Birth </label>
 					<input type="date" class="form-control" placeholder="DOB" name="dateofbirth">
 				</div>

 				<div class="col-md-6">
 					<label for="Phone"> Mobile </label>
 					<input type="text"  maxlength="13" class="form-control" placeholder="mobile" name="mobileno">
 				</div>


 				<div class="col-md-6">
 					<label for="address1"> Local Address</label>
 					<textarea class="form-control" name="localaddress" placeholder="Address line 1"></textarea>
 				</div>

 				<div class="col-md-6">
 					<label for="address2">Permanent Address</label>
 					<textarea class="form-control" name="permanent" placeholder="Address line 2"></textarea>
 				</div>

 				<div class="col-md-6">
 					<label for="email"> Email </label>
 					<input type="email" class="form-control" placeholder="Email" name="emal">
 				</div>

 				<div class="col-md-6">
 					<label for="image"> Image </label>
 					<input type="file"  class="form-control" placeholder="image" name="image">
 				</div>

 				<div class="col-md-6">
 					<label for="city">City</label>
 					<input type="text" class="form-control" name="city" placeholder="city">
 				</div>

 				<div class="col-md-4">
 					<label for="stste">States</label>
 					<input type="text" class="form-control" placeholder="State" name="state">
 				</div>

 				<div class=" col-md-2">
 					<label for="zipcode">Pincode</label>
 					<input type="text" class="form-control" placeholder="Pincode" name="pincode">
 				</div>

 				<div class="col-md-12" style="text-align: center; margin-top: 20px;">
 					<input type="submit" class="btn btn-danger" value="Register"  name="register">
 					<a href="admin-panel.php" class="btn btn-primary">Go Back</a>
 				</div>

 			</div>
 		</form>
 	</div>
		


		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

</body>
</html>