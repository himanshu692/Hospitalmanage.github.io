<?php 
	include('func.php');
	include('Check_login.php');
	check_login();
	
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
 			<?php 

 					

 					$ids = $_GET['id'];

 					$showquery = "select * from staffdb where id={$ids}";

 					$showdata = mysqli_query($con,$showquery);

 					$arraydata = mysqli_fetch_array($showdata);

 					if(isset($_POST['update']))
						{
							
							$idupdate = $_GET['id'];

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

						

								// $insertquery = " insert into staffdb(fstname, lstname,gnder,Age,dateofbirth,mobileno,localaddress,permanent,emal,image,city,state,pincode) values('$fstname','$lstname','$gnder','$Age','$dateofbirth','$mobileno','$localaddress','$permanent','$emal','$destfile','$city','$state','$pincode')";

								$updatequery = "update staffdb set id='$ids', name='$fstname',lstname='$lstname', gnder='$gnder', Age='$Age', dateofbirth='$dateofbirth', mobileno='$mobileno', localaddress='$localaddress' , permanent='$permanent',emal='$emal',  city='$city', state='$state',pincode='$pincode' where id=$idupdate";

								$query = mysqli_query($con,$updatequery);
								if($query)
									{
									?>
										<script>
											alert(' Updated Successfully!');

										</script>
										<?php
										{
											echo"<script>window.open('addstaffdetails.php', '_self')</script>";
										} 
										}
							
						}


 			 ?>
 			<h2 style="text-align: center; font-weight: bold; font-size:40px;">Register New Staff</h2>
 			<div class="row jumbotron">
 				<div class="col-md-6">
 					<label for="inputname"> First Name</label>
 					<input type="text" class="form-control" placeholder="First name" value=" <?php echo $arraydata['fstname']; ?>" name="fstname">
 				</div>

 				<div class="col-md-6">
 					<label for="inputname"> Last Name</label>
 					<input type="text" class="form-control" placeholder="Last name" value=" <?php echo $arraydata['lstname']; ?>" name="lstname">
 				</div>

 				<div class="col-md-6">
 					<label for="gender"> Gender</label>
 					<select class="form-control" value=" <?php echo $arraydata['gnder']; ?>"  name="gnder">
 						<option>Male</option>
 						<option>Female</option>
 					</select>
 				</div>

 				<div class="col-md-6">
 					<label for="age"> Age </label>
 					<input type="text" class="form-control" value=" <?php echo $arraydata['Age']; ?>" placeholder="Age"   name="Age">
 				</div>

 				<div class="col-md-6">
 					<label for="age"> Date of Birth </label>
 					<input type="text" class="form-control"  value=" <?php echo $arraydata['dateofbirth']; ?>" placeholder="DOB" name="dateofbirth">
 				</div>

 				<div class="col-md-6">
 					<label for="Phone"> Mobile </label>
 					<input type="text"  maxlength="13" value=" <?php echo $arraydata['mobileno']; ?>" class="form-control" placeholder="mobile" name="mobileno">
 				</div>


 				<div class="col-md-6">
 					<label for="address1"> Local Address</label>
 					<input type="text" style="height:55px;" class="form-control" value=" <?php echo $arraydata['localaddress']; ?>" name="localaddress" placeholder="Address line 1">
 				</div>

 				<div class="col-md-6">
 					<label for="address2">Permanent Address</label>
 					 <input type="text" style="height:55px;" class="form-control" value=" <?php echo $arraydata['permanent']; ?>" name="permanent" placeholder="Address line 2">
 				</div>

 				<div class="col-md-6">
 					<label for="email"> Email </label>
 					<input type="email" class="form-control" value=" <?php echo $arraydata['emal']; ?>" placeholder="Email" name="emal">
 				</div>

 				<div class="col-md-6">
 					<label for="image"> Image </label>
 					<input type="file"  class="form-control" value=" <?php echo $arraydata['image']; ?>" placeholder="image" name="image">
 				</div>

 				<div class="col-md-6">
 					<label for="city">City</label>
 					<input type="text" class="form-control" value=" <?php echo $arraydata['city']; ?>" name="city" placeholder="city">
 				</div>

 				<div class="col-md-4">
 					<label for="stste">States</label>
 					<input type="text" class="form-control" value=" <?php echo $arraydata['state']; ?>" placeholder="State" name="state">
 				</div>

 				<div class=" col-md-2">
 					<label for="zipcode">Pincode</label>
 					<input type="text" class="form-control" value=" <?php echo $arraydata['pincode']; ?>" placeholder="Pincode" name="pincode">
 				</div>

 				<div class="col-md-12" style="text-align: center; margin-top: 20px;">
 					<input type="submit" class="btn btn-danger" value="Update"  name="udate">
 					<a href="staff_details.php" class="btn btn-primary">Go Back</a>
 				</div>

 			</div>
 		</form>
 	</div>
		


		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

</body>
</html>