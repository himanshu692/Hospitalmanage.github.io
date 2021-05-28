<?php
 include("func.php");
 include("Check_login.php");
 check_login();
 include ("links.php");
 if(isset($_POST['patient_search_covid']))
 {
 	$dateadd = $_POST['search_patient_covid'];
 	$query = "select * from covidpdb where dateadd  = '$dateadd'";
 	$result = mysqli_query($con,$query);
 	echo "<div class='card-body'><a href='patient_detail_covid.php' class='btn btn-danger'>Go Back</a>   </div>
  <div class='container-fluid'   style=' font-family: 'Andika New Basic', sans-serif; backround=cover; '>
 	 <div class='card'>
 	 <img src='image/image1.jpg' class='card-img-top'>
    
 	 <div class='card-body'>
 			<table class='table table-hover'>
  <thead>
    <tr>
       
      <th scope='col'>First</th>
      <th scope='col'>Last</th>
      <th scope='col'>Father </th>

      <th scope='col'>Age id</th>
      <th scope='col'>Gender</th>
      <th scope='col'>Blood Group</th>
      <th scope='col'> Contact</th>
      <th scope='col'>Address</th>
      <th scope='col'>Doctor</th>
      <th scope='col'>Date of Admission</th>

    </tr>
  </thead>
  <tbody>";
 	while ($row = mysqli_fetch_array($result)) {
 		$firstname=$row['firstname'];
	$lastname=$row['lastname'];
  $fathername=$row['fathername'];

	$age=$row['age'];
	$gender=$row['gender'];
	$bdgroup=$row['bdgroup'];
  $contact1 = $row['contact1'];
  $address = $row['address'];
  $docapp1 = $row['docapp1'];
  $dateadd = $row['dateadd'];

	echo "<tr>
      <td>$firstname</td>
      <td>$lastname</td>
      <td>$fathername</td> 

      <td>$age</td>
      <td>$gender</td>
      <td>$bdgroup</td>
       <td>$contact1</td>
        <td>$address</td>
        <td>$docapp1</td>
        <td>$dateadd</td>

    </tr>";
 	}
 	echo "</tbody></table></div></div></div>";
 }



?>