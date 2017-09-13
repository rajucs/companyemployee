<?php 
	$dbhost="localhost";
	$dbuser="root";
	$dbpass="";
	$dbname="riroit";
	$connection=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
	if (mysqli_connect_errno()) {
		die("connection failed".mysqli_connect_error()."(".mysqli_connect_errno().")");
	}
	
	if(isset($_POST['emplsubmit'])){

		$user_name	=	$_POST['employen'];
		$upass		=	$_POST['emplpass'];
		$sql		=	"SELECT * FROM tbl_login WHERE user_name= '$user_name' and password = '$upass'";
		$result		=	mysqli_query($connection,$sql);

		if(mysqli_num_rows($result)==1){
			session_start();
			$_SESSION['password']=$upass;
			header('Location: home.php');
		}
		else {
			 echo '<script language="javascript">';
		      echo 'alert("Invalid username or Password"); location.href="index.php"';
			  echo '</script>';
		}

		// 	$sql="INSERT INTO employee(user_name, password) VALUES('$_POST[employen]', '$_POST[emplpass]')";
		// if (mysqli_query($connection,$sql)) {

	 //        echo '<script language="javascript">';
	 //        echo 'alert("Successfully Registered")';
	 //        echo '</script>';
	        
		// }
		// else{
		// 	echo "ERROR: ".$sql."<br>".mysqli_error($conn);
		// }
	}


		if (isset($_POST['emplpost'])) {
			
			$title			=	$_POST['title'];
			$description	=	$_POST['description'];
			$destination	=	"images/".basename($_FILES['emplfile']['name']);
			$filename		=	$_FILES['emplfile']['name'];


			$sql			=	"INSERT INTO employee(title,description,employ_file) VALUES('$title','$description','$filename')";
			mysqli_query($connection,$sql);
			
			if(move_uploaded_file($_FILES['emplfile']['tmp_name'],$destination)){
			     echo '<script language="javascript">';
		        echo 'alert("post submitted successfully"); location.href="home.php"';
		        echo '</script>';		
		       	}

			else{
			     echo '<script language="javascript">';
		        echo 'alert("There is problem . Please Try again"); location.href="home.php"';
		        echo '</script>';			}

		}


	// 	$sql="INSERT INTO employee(title,description,employ_file) VALUES('$_POST[title]','$_POST[description]',$destination)";
	// 	if (mysqli_query($connection,$sql)) {
	// 	     echo '<script language="javascript">';
	//         echo 'alert("post submitted successfully"); location.href="home.php"';
	//         echo '</script>';
	// 	}
	// }

 ?>