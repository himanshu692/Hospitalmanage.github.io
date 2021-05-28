<!DOCTYPE html>
<html>
<head>
  <title></title>
  <style type="text/css">
   
    }
  </style>
</head>
<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
<body>





<?php
include("func.php");
include('Check_login.php');
check_login();
include ("links.php");
 
 if(isset($_POST['patient_search_submit']))
 {
 	$date = $_POST['search'];
 	$query = "select * from doctorappdb where date  = '$date'";
 	$result = mysqli_query($con,$query);
 	echo "
  <div class='container-fluid'   style=' font-family: 'Andika New Basic', sans-serif; backround=cover; '>
 	 <div class='card'>
 	 <img src='image/image1.jpg' class='card-img-top'>
    <div class='card-body'><a href='patient_details.php' class='btn btn-danger'>Go Back</a>   </div>
 	 <div class='card-body'>
 			<table class='table table-hover'>
  <thead>
    <tr>
       
      <th scope='col'>First</th>
      <th scope='col'>Last</th>
      <th scope='col'>Email id</th>
      <th scope='col'>Contact</th>
      <th scope='col'>Doctor Appointment</th>
      <th scope='col'>Date of Appointment</th>
      <th scope='col'>Payment status</th>
      </tr>
  </thead>
  <tbody> ";
 	while ($row = mysqli_fetch_array($result)) {
 		$fname=$row['fname'];
	$lname=$row['lname'];
	$email=$row['email'];
	$contact=$row['contact'];
	$docapp=$row['docapp'];
  $date = $row['date'];
  $payment = $row['payment'];
	echo "<tr>
      <td>$fname</td>
      <td>$lname</td> 
      <td>$email</td>
      <td>$contact</td>
      <td>$docapp</td>
       <td>$date</td>
        <td>$payment</td>
       
    </tr>";
 	}
 	echo "</tbody></table></div></div></div>";
  echo "<br>";
  echo " <center>    
    <button onclick=window.print(); class='btn btn-danger' id='print-btn'> Print </button>
</center> ";
 }


?>

</body>
</html>