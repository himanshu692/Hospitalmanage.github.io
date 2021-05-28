<?php
       include("func.php");
      include("Check_login.php");
      check_login();
 ?>

 <!DOCTYPE html>

<html>
<head>
	<title>Patients Details</title>
     <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Andika+New+Basic&family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="print.css" media="print">
</head>
<body style=" font-family: 'Andika New Basic', sans-serif;">
	<div class="container-fluid">
		
    <div class="card-body" style="background-color: #3498DB; color:#ffffff">
      <div class="row">
          
          <div class="col-md-1">
          <a href="patient_details.php" class="btn btn-light">Back</a>
          </div>
  			 
          <div class="col-md-3"><h3>Patient Details</h3> </div>
 
          </div>
  		</div>
    </div>
		
    <div class="card-body">

		<table class="table table-hover">
  <thead>
    <tr>
       
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Email id</th>
      <th scope="col">Contact</th>
      <th scope="col">Doctor Appointment</th>
     <th scope="col">Date</th>
      <th scope="col">Payment</th>
    </tr>
  </thead>
  <tbody>
    <?php get_patient_details();    ?>
     
  </tbody>
</table>
</div class="">

	
    <center>    
    <button onclick=window.print(); class="btn btn-outline-primary" id="print-btn"> Print Data</button>
</center>





	</div>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>
</html>