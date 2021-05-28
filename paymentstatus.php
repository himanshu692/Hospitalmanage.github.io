<?php
session_start();
include('func.php');
include('Check_login.php');
check_login();

  ?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Payment Status</title>
		  <meta charset="utf-8">
		  <meta name="viewport" content="width=device-width, initial-scale=1">
 		 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=Andika+New+Basic&family=Roboto&display=swap" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="style.css">
  
</head>
<body style="font-family: 'Andika New Basic', sans-serif; align-items: center;  " >
 

 		<div >
		<nav class="navbar  fixed-top navbar-expand-lg navbar-light bg-light" >
			
  		<div class="container-fluid" >
  			<a  class="navbar-brand text-danger" href="#"><i class="fa fa-user-plus" aria-hidden="true" ></i>SK Hospital </a>
  			
  			 <div class="collapse navbar-collapse" id="navbarSupportedContent">
		      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
		    	<li class="nav-item"> <a class=" btn btn-outline-primary" href="logout.php">Log out</a> </li>
		   
		    
      			</ul> 
        
        <form class="d-flex" action="search_patient.php" method="post">
	        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="search">
	        <div class="col-md-3"><input type="submit" name="patient_search_submit" class="btn btn-outline-primary" value="Search"></div>
      </form>
    </div>
  </div>
</nav>
	</div>
	<hr>
	<div class="jumbotron"  id="page_image"></div>
	<div class="container-fluid">
	<div class="row">
		<div class="col-md-3">
			<div class="list-group">
				<a href="" class="list-group-item active" style="background-color:#3498DB; color: #ffffff; border-color: #3498DB">Patients</a>
				<a href="patient_details.php" class="list-group-item"> Patients Details</a>
			 </div>
				
				<hr>
		 
		 		<div class="list-group" style="margin-bottom: 5px;">
				<a href="" class="list-group-item active" style="background-color:#3498DB; color: #ffffff; border-color: #3498DB">Doctors </a>
				 
				<a href="addnewdoc.php" class="list-group-item"> Add new doctor name</a>
			</div>
		</div>
		
		<div class="col-md-8">
			<div class="card">
				<div class="card-body" style="background-color: #3498DB; color:#ffffff; border-radius: 2px;">
			  Payment Status
				</div>
				<div class="card-body">
					<form class="form-group" action="func.php" method="post">
						<label>  Enter contact: </label>
						<input type="text" name="contact" class="form-control"><br>

						<label>Status</label>
						<select  class="form-control" name="payment">
							<option></option>
							<option value="Paid">Paid</option>
							<option value="Pay Later">Pay later</option>

						</select><br>
						 
						<input type="submit" name="update_payment" value="Udate" class="btn btn-danger">
						<a href="admin-panel.php" class="btn btn-primary " tabindex="-1" role="button" aria-disabled="true">Go Back</a>
					</form>


				</div>
			</div>
		</div>
		
		<div class="col-md-1"></div>
	</div>
	</div>


	 

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>
</html>