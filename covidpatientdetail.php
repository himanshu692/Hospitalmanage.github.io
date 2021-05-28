<?php 
	include("func.php");
	include("Check_login.php");
	check_login();

 	// include("search_patient.php"); 
 	?>
<!DOCTYPE html>
 <html>
 <head>

 	<title> Covid Patients</title>
 	
 	 <meta charset="utf-8">
		  <meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=Andika+New+Basic&family=Roboto&display=swap" rel="stylesheet">

 </head>
 <body style="font-family: 'Andika New Basic', sans-serif; " class="container">
 	
		 

					<div class="card-body " style="background-color: #3498DB; color:#ffffff; height:; align-items: center;">
			     	 <div class="row">
			          
			          <div class="col-sm-4">
			          <a href="admin-panel.php" class="btn btn-danger">Back</a>
			          </div>
			  			 
			          <div class="col-sm-4" style="margin-left: 100px;"><h3> Covid Patient Details</h3> </div>
          </div>
          </div> 

		 


 				<div class="card " style=" margin-top: 1.5rem;" >
			 
				<div class="card-body ">
					<form class="form-group" action="" method="post">
						<label> First Name: </label>
						<input type="text" name="firstname" class="form-control" required>
						
						<label> Last Name: </label>
						<input type="text" name="lastname" class="form-control" required>

						<label> father's Name: </label>
						<input type="text" name="fathername" class="form-control" required>
						<label> Age: </label>
						<input type="text" name="age" class="form-control" required>
						<label> Gender:</label>
						<select class="form-control" name="gender" required>
							<option></option>
							<option> Male </option>
							<option> Female</option>
							<option> Other</option>

						</select> 

						<label> Blood group: </label>
						<input type="text" name="bdgroup" class="form-control" required>

						<label> Contact: </label>
						 <div class="input-group mb-3">
						  <span class="input-group-text">+91</span>
							 <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" name="contact1" maxlength="10">
						   
						</div>
						<label> Address: </label>
						 <textarea class="form-control" name="address"></textarea>
						<label > Doctor: </label>
						  <select class="form-control" name="docapp1">
						  	<option></option>
						  	<option>Dr. Himanshu</option>
						  	 

						  </select>

						
						 <label>Date of Admission:</label>
						<input type="date" name="dateadd" class="form-control" required>	<br>

						<input type="submit" name="submit_details" value="Save Details" class="btn btn-danger">

					</form>


				</div>
			</div>
		</div>




		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

 </body>
 </html>