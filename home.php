<?php 

	session_start();
	if (empty($_SESSION['password'])) {
		header('Location: index.php');
	}
	
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>employee</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/style2.css">

</head>
<body>
			<nav class="navbar navbar-inverse" role="navigation">
				<div class="container-fluid">
					<ul class="nav navbar-nav navbar-right">
						<li  class="dropdown">
						<a href="" class="dropdown-toggle" data-toggle="dropdown">Profile <span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="#">Edit Profile</a></li>
								<li><a href="logout.php">Logout</a></li>
							</ul>
						</li>
					</ul>
				</div>
			</nav>
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-3 sidebar">
						<ul class="nav nav-tabs nav-stacked">
							<li><a href="#Dashboard" data-toggle="tab">Dashboard</a></li>
							<li><a href="#services" data-toggle="tab">Services</a></li>
							<li><a href="" data-toggle="tab">Events</a></li>
							<li><a href="" data-toggle="tab">Teams</a></li>
							<li><a href="" data-toggle="tab">Employer</a></li>
							<li><a href="" data-toggle="tab">Users</a></li>
						</ul>
					</div>
					<div class="col-md-9">
						<div class="tab-content">
							<div id="Dashboard" class="tab-pane fade">
								dfhadfn
							</div>
							<div id="services" class="tab-pane fade in active">
								 <div class="container-fluid">
								 	<div class="row">
								 		<div class="col-md-9 ">
								 			<form action="db.php" method="post" enctype="multipart/form-data" class="form-horizontal">

								 				<div class="form-group">
								 					<label >Title : </label>
								 					<input type="text" name="title" placeholder="Enter post title">
								 				</div>
								 				<div class="form-group">
								 					<label>Description :</label>
								 					<textarea class="form-control" rows="5" name="description"></textarea>
								 				</div>
								 				<div class="form-group">
								 					<label></label>
								 					<input type="file" name="emplfile">
								 				</div>

								 				<div class="form-group">
								 					<label></label>
								 					<input type="submit"  name="emplpost" value="SUBMIT">
								 				</div>
								 			</form>
								 		</div>
								 		<div class="col-md-3">
								 			
								 		</div>
								 	</div>
								 </div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12 footer">
						<h3 class="text-center">RIRO IT LTD.</h3>
					</div>
				</div>

			</div>


<script type="text/javascript" src="js/jquery-3.2.1.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html>
