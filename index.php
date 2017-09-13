<?php 
	session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">

</head>
<body class="bg-img">
	<div class="col-md-offset-4 col-md-4 text-center col-md-offset-4"> 
		<div class="jumbotron">
			<ul class="nav nav-pills nav-justified">
			  <li class="active"><a data-toggle="pill" href="#employee">Employee</a></li>
			  <li><a data-toggle="pill" href="#admin">Admin</a></li>
			</ul>

			<div class="tab-content">
			  <div id="employee" class="tab-pane fade in active">
			  	<form action="db.php" method="post">
				  	<div class="form-group">
				  		<label for="">User Name: </label>
				  		<input type="text" name="employen">
				  	</div>
				  	<div class="form-group">
				  		<label>Password: </label>
				  		<input type="password" name="emplpass">
				  	</div>
				  	<div class="form-group submitbtn">
				  		<label></label>
				  		<input type="submit" value="SUBMIT" class="btn btn-primary" name="emplsubmit">
				  	</div>
			  	</form>
			  </div>
			  <div id="admin" class="tab-pane fade">
			  	<form action="index3.php" method="post">
				  	<div class="form-group">
				  		<label>User Name : </label>
				  		<input type="text" name="adminn">
				  	</div>
				  	<div class="form-group">
				  		 <label>Password : </label>
				  		 <input type="password" name="adminpass">
				  	</div>
				  	<div class="form-group"> 
				  		 <label></label>
				  		 <input type="submit" name="adminsubmit" class="btn btn-primary" value="SUBMIT">
				  	</div>
			  	</form>
			  </div>
			</div>

		</div>
	</div>

	<script type="text/javascript" src="js/jquery-3.2.1.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html>

