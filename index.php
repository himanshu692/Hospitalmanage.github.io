<!DOCTYPE html>
<html>
<head>
	<title>Admin-panel-Login</title>
</head>
		 <meta charset="utf-8">
		  <meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=Andika+New+Basic&family=Roboto&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">



</head>
<style type="text/css">
	#ab1:hover{cursor: pointer;}
	
</style>
<body style="background:url('image/image7.jpg') no-repeat; background-size: cover; height: 84vh; font-family: 'Andika New Basic', sans-serif;">
	<h3 class="text-danger" style="background-color: white; width:160px; margin-left: 10px;">SK HOSPITAL</h3>
<div class="col-md-3">
<div class="container" style=" width: 400px; margin-top: 75px; margin-left: 80px;">
	<center><h3 style="text-transform: uppercase; color:black;">Administration</h3></center>
<div class="card">
 <img src="image/image 2.jpg" class="card-img-top">	
<div class="card-body">
	<form class="form-group" action="func.php" method="post">
		<label> Username :</label><br>
		<input type="text" name="username" class="form-control" Placeholder="Enter username"><br>

		<label> Password:</label><br>
		<input type="password" name="password" class="form-control" Placeholder="Enter password"><br>
		<input type="submit" name="login_submit" class="btn btn-danger" id="ab1">
	</form>
</div>
</div>
</div>
</div>

	<div class="col-md-6">
		<div class="container" style=" width: 400px; margin-top: 75px; margin-left: 170px;">
			<center><h3 style="text-transform: uppercase; color:black;">blood bank</h3></center>
<div class="card">
 <img src="blood img/bd1.jpg" style="height:200px;" class="card-img-top">	
<div class="card-body">
	<form class="form-group" action="blood bank/function.php" method="post">
		<label> Username :</label><br>
		<input type="text" name="uname" class="form-control" Placeholder="Enter username"><br>

		<label> Password:</label><br>
		<input type="password" name="pass" class="form-control" Placeholder="Enter password"><br>
		<input type="submit" name="sub" class="btn btn-danger" id="ab1">
	</form>
</div>
</div>
</div>
</div>


		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

</body>
</html>