<?php 
	include 'db.php';
	$query="SELECT * FROM employee ORDER BY id DESC";
	$result=mysqli_query($connection, $query);
	if(!$result){die("Database query failed");}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Result</title>
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
			    <div class="row">
			        <div class="col-md-2"><br></div>
			        <div class="col-md-10">
			            <h2 style="color:Blue; text-align: center;">Published One Week Exam Results</h2>
			            <br>
			            <br>
<h4>Candidate Name: Syed Mohd. Golam Mostakin</h4>
<strong>ID: WOBRIRO11-SMGM</strong>
<p>Design Total Number of Logo: 10<br>
5 Star Rating: 0<br>
4 Star Rating: 3<br>
3 Star Rating: 4</p>
<h5 style="color:red;">Result: Not passed 1 week exam.</h5>
<hr/>
<br>
<br>

<h4>Candidate Name: Md Rifat Innas Auvik</h4>
<strong>ID: WOBRIRO11-MRIA</strong>
<p>Design Total Number of Logo: 12<br>
5 Star Rating: 0<br>
4 Star Rating: 3<br>
3 Star Rating: 3</p>
<h5 style="color:red;">Result: Not passed 1 week exam.</h5>
<hr/>
<br>
<br>

<h4>Candidate Name: Rezwana Rahman Richa</h4>
<strong>ID: WOBRIRO11-RRR</strong>
<p>Design Total Number of Logo: 16<br>
5 Star Rating: 0<br>
4 Star Rating: 0<br>
3 Star Rating: 4</p>
<h5 style="color:red;">Result: Not passed 1 week exam.</h5>
<hr/>
<br>
<br>

<h4>Candidate Name: Shule Akter Nipa</h4>
<strong>ID: WOBRIRO11-SAN</strong>
<p>Design Total Number of Logo: 19<br>
5 Star Rating: 0<br>
4 Star Rating: 0<br>
3 Star Rating: 0</p>
<h5 style="color:red;">Result: Not passed 1 week exam.</h5>
<hr/>
<br>
<br>

<h4>Candidate Name: Shariful Islam Nahid</h4>
<strong>ID: WOBRIRO11-SIN</strong>
<p>Design Total Number of Logo: 26<br>
5 Star Rating: 0<br>
4 Star Rating: 0<br>
3 Star Rating: 0</p>
<h5 style="color:red;">Result: Not passed 1 week exam.</h5>
<br>
<br>
<br>
<br>

		        	</div>
			        <div class="col-md-2"><br></div>
			     </div>       
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

<?php 
	mysqli_close($conn);
 ?>