  
<?php
session_start();

if(isset($_SESSION["login"])){
	header("Location: index.php");
	exit;
}

require 'dbconnect.php';

if ( isset($_POST["login"]) ) {

	$username=$_POST["username"];
	$password=$_POST["password"];

	$result = mysqli_query($con, "SELECT * FROM security WHERE username = '$username'");

	//cek username
	if (mysqli_num_rows($result) === 1){

		//cek password
		$row = mysqli_fetch_assoc($result);
		if( $password == $row["password"]){
			//set session
			$_SESSION["login"] = true;

			$_SESSION["name"] = $row["username"];

			header("Location: index.php");
			exit;
		}
	}
}else if(isset($_POST['signup'])){
	echo "<script>window.location = 'registrasi.php'; </script>";

}
?>


<!DOCTYPE html>
<html>
	<head>
		<title>Login</title>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="assets/gaya.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	</head>

	<body>
		<div class="card altaboutus altcard" id="aboutus">
		  <center><div class="card-body alteraboutus">
		    <section>
		    	<form action="" method="post">
		    	  <div class="form-group">
		    	    <label for="username">Username</label>
		    	    <input type="text" class="form-control" name="username" id="username">
		    	  </div>

		    	  <div class="form-group">
		    	    <label for="exampleInputPassword1">Password</label>
		    	    <input type="password" class="form-control" name="password" id="password">
		    	  </div>
		    	  <button type="submit" class="btn btn-primary" name="login">Login</button>
		    	  <button type="submit" class="btn btn-warning" name="signup" >Sign Up</button>
		    	</form>
		    </section>
		  </div></center>
		</div>
	</body>
</html>
