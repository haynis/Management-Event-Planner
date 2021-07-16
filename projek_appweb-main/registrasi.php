<?php
require 'function_regis.php';

if( isset($_POST["register"])){
	if(Registrasi($_POST) > 0){
		echo "<script>window.location = 'login.php';
			alert('user baru berhasil ditambahkan!');
			
		</script>";
	} else {
		echo mysqli_error($con);
	}
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
		    	    <label for="password">Password</label>
		    	    <input type="password" class="form-control" name="password" id="password">
		    	  </div>

		    	   <div class="form-group">
		    	  <label for="password2">Konfirmasi Password</label>
		    	    <input type="password" class="form-control" name="password2" id="password2">
		    	  </div>

		    	 <button type="submit" name="register">Register</button>
		    	</form>
		    </section>
		  </div></center>
		</div>

	</body>
</html>
