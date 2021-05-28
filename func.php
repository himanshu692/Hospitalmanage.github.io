<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
		*{
			font-family: 'Andika New Basic', sans-serif;
		}
	</style>
	 <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Andika+New+Basic&family=Roboto&display=swap" rel="stylesheet">
    
</head>
<body>



<?php
session_start();
$con=mysqli_connect("localhost","root","","hmsdb");
if(isset($_POST['login_submit'])){
	$username=$_POST['username'];
	$username = filter_var($username,FILTER_SANITIZE_STRING);
	$password=$_POST['password'];
	$password = filter_var($password,FILTER_SANITIZE_STRING);
$query="select * from logindb where username='$username' and password='$password'";
$result=mysqli_query($con, $query);
if(mysqli_num_rows($result)==1)
{
	$_SESSION['username']=$username;
	header("Location:admin-panel.php");
}
else 
		?>
	<script>
		alert('Login Error! ');
    </script>
	<?php
	{
		echo"<script>window.open('index.php', '_self')</script>";
	} 
}

// insert data of Appointment in database

if(isset($_POST['pat_submit']))
{
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$pgender=$_POST['pgender'];
	$email=$_POST['email'];
	$contact=$_POST['contact'];
	$docapp=$_POST['docapp'];
	$payment = $_POST['payment'];
	$date = $_POST['date'];
	$query="insert into doctorappdb(fname,lname,pgender,email,contact,docapp,payment,date)values('$fname','$lname','$pgender','$email','$contact','$docapp','$payment','$date')";
	$result= mysqli_query($con,$query);
	if($result)
	{
			?>
	

	<script>
		alert('Appointment Registered. ');

	</script>
	<?php
	{
		echo"<script>window.open('admin-panel.php', '_self')</script>";
	} 
	}
}

// show patient details

function get_patient_details()
{
	global $con;
	$query="select * from doctorappdb";
	$result= mysqli_query($con,$query);
	while ($row=mysqli_fetch_array($result)) {
		
	$fname=$row['fname'];
	$lname=$row['lname'];
	$pgender=$row['pgender'];
	$email=$row['email'];
	$contact=$row['contact'];
	$docapp=$row['docapp'];
	$payment = $row['payment'];
	$date = $row['date'];

	echo "<tr>
       
      <td>$fname</td>
      <td>$lname</td>
      <td>$pgender</td>
	  <td>$email</td>
       <td>$contact</td>
      <td>$docapp</td>
      <td>$date</td>
      <td>$payment</td>
	</tr>";
	}
}


// display doctor name from database

function display_docs()
{
	global $con;
	$query="select * from docdb";
	$result = mysqli_query($con, $query);
	while($row= mysqli_fetch_array($result))
	{
		$name = $row['name'];
		echo'<option value="'.$name.'">'.$name.'</option>';
	}
}


// doctors name added to database 

if(isset($_POST['doc_sub']))
{
	$name = $_POST['name'];
	$degree = $_POST['degree'];
	$query = "insert into docdb(name,degree) values('$name','$degree')";
	$result = mysqli_query($con, $query);
	if($result)
	{
		 header("Location:doctoradded.php");

	}
	 
}

// udate payment status

if(isset($_POST['update_payment']))
{
	$contact= $_POST['contact'];
	$payment = $_POST['payment'];
	$query = "update doctorappdb set payment='$payment' where contact='$contact';";
	$result = mysqli_query($con, $query);
	if($result)
	{
		?>
	<script>
		alert('Successfully Updated. ');

	</script>
	<?php
	{
		echo"<script>window.open('paymentstatus.php', '_self')</script>";
	} 
	}
}

// Covid Patient Detail insert

if(isset($_POST['submit_details']))
{
	$firstname=$_POST['firstname'];
	$lastname=$_POST['lastname'];
	$fathername=$_POST['fathername'];
	$age=$_POST['age'];
	$gender=$_POST['gender'];
	$bdgroup=$_POST['bdgroup'];
	$contact1 = $_POST['contact1'];
	$address = $_POST['address'];
	$docapp1 = $_POST['docapp1'];
	$dateadd = $_POST['dateadd'];
	$query="insert into covidpdb(firstname,lastname,fathername,age,gender,bdgroup,contact1,address,docapp1,dateadd)values('$firstname','$lastname','$fathername','$age','$gender','$bdgroup','$contact1','$address','$docapp1','$dateadd')";
	$result= mysqli_query($con,$query);
	if($result)
	{
			?>
	

	<script>
		alert(' Registered Successfully ');

	</script>
	<?php
	{
		echo"<script>window.open('covidpatientdetail.php', '_self')</script>";
	} 
	}
}

// Display covid patient details 

function get_patient_details_covid(){
	global $con;
	$query="select * from covidpdb";
	$result= mysqli_query($con,$query);
	while ($row=mysqli_fetch_array($result)) {
		
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
}

// Session start and destroy

function display_admin_panel(){
	echo '
<!DOCTYPE html>
<html lang="en">
<head>
	<?php include("search_patient.php"); ?>
	<title>Admin-panel</title>

			 <meta charset="utf-8">
		  <meta name="viewport" content="width=device-width, initial-scale=1">
			<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
			<link rel="preconnect" href="https://fonts.gstatic.com">
			<link href="https://fonts.googleapis.com/css2?family=Andika+New+Basic&family=Roboto&display=swap" rel="stylesheet">
			<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
            <link rel ="stylesheet" href="style1.css">

<style type="text/css">
	*{
		box-sizing: border-box;
	 
	}
</style>
</head>
<body style="font-family: "Andika New Basic", sans-serif; ">
	<div >
		<nav class="navbar  fixed-top navbar-expand-lg navbar-light bg-light" >
			
  		<div class="container-fluid" >
  			 
  			<a  class="navbar-brand text-danger" href="#"><i class="fa fa-user-plus" aria-hidden="true" ></i>SK Hospital </a>
  			
  			 <div class="collapse navbar-collapse" id="navbarSupportedContent">
		      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
		    	<li class="nav-item"> <a class=" btn btn-outline-primary" href="logout.php">Log out</a> </li>
		   
		    
      			</ul> 
        
        <form class="d-flex" action="search_patient.php" method="post">
	        <input class="form-control me-2" type="search" placeholder="Enter Date " aria-label="Search" name="search">
	        <div class="col-md-3"><input type="submit" name="patient_search_submit" class="btn btn-outline-primary" value="Search"></div>
      </form>
    </div>
  </div>
</nav>
	</div>
	<hr>
	<div class="jumbotron"  id="page_image"  ></div>
	<div class="container-fluid">
	<div class="row">
		<div class="col-md-3">
			<div class="list-group">
				<a href="" class="list-group-item active" style="background-color:#3498DB; color: #ffffff; border-color: #3498DB">Patients</a>
				<a href="patient_details.php" class="list-group-item"> Patients Details</a>
				 
			</div>
			<hr>
			
			<div class="list-group">
				<a href="" class="list-group-item active" style="background-color:#3498DB; color: #ffffff; border-color: #3498DB">Payment </a>
				<a href="paymentstatus.php" class="list-group-item"> Payment Status</a>
				 
			</div>
				<hr>
				<div class="list-group">
				<a href="" class="list-group-item active" style="background-color:#3498DB; color: #ffffff; border-color: #3498DB">Covid-19 Patients</a>
				<a href="covidpatientdetail.php" class="list-group-item"> Add Patients </a>
			 	<a href="patient_detail_covid.php" class="list-group-item"> Covid Patient Details </a>
			</div>
			 
			<hr>

			<div class="list-group" style="margin-bottom: 5px;">
				<a href="" class="list-group-item active" style="background-color:#3498DB; color: #ffffff; border-color: #3498DB">Doctors </a>
				 
				<a href="addnewdoc.php" class="list-group-item"> Add new doctor name</a>
			</div>

			<hr>

			<div class="list-group" style="margin-bottom: 5px;">
				<a href="" class="list-group-item active" style="background-color:#3498DB; color: #ffffff; border-color: #3498DB">Staff</a>
				 
				<a href="addstaffdetails.php" class="list-group-item"> Add new staff member</a>
				<a href="staff_details.php" class="list-group-item"> Staff Details</a>

			</div>


		</div>
		
		<div class="col-md-8">
			<div class="card">
				<div class="card-body" style="background-color: #3498DB; color:#ffffff; border-radius: 2px;">
			  Book an Appointment 
				</div>
				<div class="card-body">
					<form class="form-group" action="func.php" method="post">
						<label> First Name: </label>
						<input type="text" name="fname" class="form-control" required>
						<label> Last Name: </label>
						<input type="text" name="lname" class="form-control" required>
						<label> Gender:</label>
						<select class="form-control" name="pgender">
							<option></option>
							<option> Male </option>
							<option> Female</option>
							<option> other</option>

						</select>
						<label> Email id: </label>
						<input type="text" name="email" class="form-control" required>

						<label> Contact: </label>
						<input type="text" name="contact" class="form-control" required>

						<label > Doctor Appointment : </label>
						<select class="form-control" name="docapp" required>
							 <option> </option>
							 <option>Dr. Sharma</option>
						 		
							<?php display_docs(); ?>
						</select>

						<label> Payment:</label>
						<select class="form-control" name="payment">
							<option></option>
							<option> Paid </option>
							<option> Pay later</option>

						</select><br>

						<label>Date of  Appointment</label>
						<input type="date" name="date" class="form-control" required>	<br>

						<input type="submit" name="pat_submit" value="Take Appointment" class="btn btn-danger">

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
</html>';
}

?>

</body>
</html>
