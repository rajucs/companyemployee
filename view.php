<?php 
	include 'db.php';
	$query="SELECT * FROM employee ORDER BY id DESC";
	$result=mysqli_query($connection, $query);
	if(!$result){die("Database query failed");}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>view page</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/style2.css">
</head>
<body>
	<nav class="nav navbar-inverse">
		<div class="container-fluid">
			<ul class="nav navbar-nav">
				<li><a href="view.php">Home</a></li>
				<li><a href="about.php">About</a></li>
				<li><a href="contact.php">Contact</a></li>
			</ul>
		</div>
	</nav>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-9 content">

			<?php while ($row=mysqli_fetch_assoc($result)) { ?>


				 <div class="col-md-7">
				 	<h3><a href="#"><?php echo $row["title"];?></a></h3>
					<p><?php echo $row["description"]; ?></p>				 	
				 </div>
				 <div class="col-md-5">
					<?php
							$file 	= 	explode('.',$row['employ_file']);

							if (($file['1']=='avi') || ($file['1']== 'mp4')) {
							
								echo "<div align=center><video style='width:100%;height:100%;' controls><source src='images/".$row['employ_file']."' >
								</video></div>";
							}

							else if(($file['1']=='png') || ($file['1']== 'jpg') || ($file['1']=='JPG') || ($file['1']== 'PSD')){
								echo	"<a href='images/".$row['employ_file']."' download><img  class='thumbnail img-responsive' src='images/".$row['employ_file']."'></a>";
							}

							else if($file['1']== 'pdf'){
								echo "<iframe style='width:100%;height:100%;' src='images/".$row['employ_file']."'>
								</iframe>";
							}

						?>
				 </div>



			
				<?php	}
				 ?>

			
			</div>
			<div class="col-md-3">
				<ul class="nav nav-pills nav-stacked pull-right">
					<li><a href="#" data-toggle="pill">Web Design</a></li>
					<li><a href="#" data-toggle="pill">Web Developement</a></li>
					<li><a href="#" data-toggle="pill">Graphics Design</a></li>
					<li><a href="#" data-toggle="pill">Android Developer</a></li>
				</ul>
			</div>
		</div>
	</div>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12 footer">
				<h3 class="text-center">RIRO IT LIMITED</h3>
				<p class="text-center">&copy; RIRO IT. 2017</p>
			</div>
		</div>

	</div>


<script type="text/javascript" src="js/jquery-3.2.1.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html>
