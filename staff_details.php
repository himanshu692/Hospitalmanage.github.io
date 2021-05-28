<?php 
include ('func.php');
include ('Check_login.php');
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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

</head>
<body style="font-family: 'Andika New Basic', sans-serif; font-size: 16.5px;">

<div class="container">
		<h1 style="text-align: center; font-size: 55px; ">Staff Details</h1>
	</div>
<div class="container-fluid " style="margin-top: 10px;">
	
	<table class="table table-hover">
		  <thead>
		    <tr>
		         <th scope="col">Id</th>
		          <th scope="col">First name</th>
			      <th scope="col">Last name</th>
			      <th scope="col">Gender</th>
			      <th scope="col">Age</th>
			      <th scope="col">DOB</th>
			      <th scope="col">Mobile</th>
			      <th scope="col">Local address</th>
			      <!-- <th scope="col">Permanent</th> -->
			      <!-- <th scope="col">Email</th> -->
			      <th scope="col">City</th>
			      <th scope="col">State</th>
			      <th scope="col">Pincode</th>
			      <th scope="col">Image</th>
			      <th scope="col">Operation</th>
			      
			  </tr>
		 	 </thead>
		 	 <tbody>
		 	 		<?php 

		 	 		$selectquery = " select * from staffdb";
		 	 		$query = mysqli_query($con,$selectquery);

		 	 		//$result = mysqli_fetch_array($query);
		 	 		while($result = mysqli_fetch_array($query)){
		 	 			?>
		 	 			<tr>
		 	 				<td> <?php echo $result['id']; ?> </td>
		 	 				<td> <?php echo $result['fstname']; ?> </td>
		 	 				<td> <?php echo $result['lstname']; ?> </td>
		 	 				<td> <?php echo $result['gnder']; ?> </td>
		 	 				<td> <?php echo $result['Age']; ?> </td>
		 	 				<td> <?php echo $result['dateofbirth']; ?> </td>
		 	 				<td> <?php echo $result['mobileno']; ?> </td>
		 	 				<td> <?php echo $result['localaddress']; ?> </td>
		 	 				<!-- <td> <?php echo $result['permanent']; ?> </td> -->
		 	 				<!-- <td> <?php echo $result['emal']; ?> </td> -->
		 	 				<td> <?php echo $result['city']; ?> </td>
		 	 				<td> <?php echo $result['state']; ?> </td>
		 	 				<td> <?php echo $result['pincode']; ?> </td>
		 	 				<td> <img src="<?php echo $result['image']; ?>" width="100" height="80">  </td>
		 	 				<td> <a href="updatestaff.php?id=<?php echo $result['id']; ?>" data-toggle="tooltip" style="margin-left:23px;" data-placement="top" title="Udate"><i class="fas fa-edit"></i></a></td>
		 	 			</tr>

		 	 			<?php
		 	 		}

		 	 		 ?>
		 	 </tbody>
 
		</table>
		<div class="" style="align-items: center;">
				<a href="admin-panel.php" style="text-align: center;  " class="btn btn-danger">Go Back</a>
			</div>
	</div>

			
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
		<script >
					$(document).ready(function(){
					  $('[data-toggle="tooltip"]').tooltip();
						});
		</script>

</body>
</html>