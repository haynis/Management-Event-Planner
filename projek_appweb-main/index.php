<?php
	session_start();

	if(!isset($_SESSION["login"])){
		header("Location: login.php");
		exit;
	}
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Home</title>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="assets/gaya.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	</head>

	<body>
		<header>
			<nav class="navbar navbar-expand-lg navbar-light bg-light">
			  <a class="navbar-brand" href="index.php">Event Manager</a>
			  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
			    <span class="navbar-toggler-icon"></span>
			  </button>

			  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
			    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
			      <li class="nav-item active">
			        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link" href="view_anggota.php">Data Anggota</a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link" href="view_acara.php">Data Acara</a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link" href="view_divisi.php">Data Divisi</a>
			      </li>
			       <li class="nav-item">
			        <a class="nav-link" href="view_jobdeks.php">Data Jobdeks</a>
			      </li>
			       <li class="nav-item">
			        <a class="nav-link" href="view_team.php">Data Team</a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link" href="logout.php">Logout</a>
			      </li>
			    </ul>
			  </div>
			</nav>
		</header>

		<main>
			<div class="card altaboutus altcard" id="aboutus">
			  <center><div class="card-body alteraboutus">
			    <section>

			    	<h5 class="card-title">Selamat Datang <?=$_SESSION['name']; ?></h5>

			    	<div class="card-deck altdeck">
    				  <div class="card alterdeck">
    				    <div class="card-body">
    				      <h5 class="card-title">Data Anggota</h5>
    				    </div>
    				    <div class="card-footer">
    				      <small class="text-muted"><a href="view_anggota.php">Jump In</a></small>
    				    </div>
    				  </div>
    				  <div class="card alterdeck">
    				    <div class="card-body">
    				      <h5 class="card-title">Data Acara</h5>
    				    </div>
    				    <div class="card-footer">
    				      <small class="text-muted"><a href="view_acara.php">Jump In</a></small>
    				    </div>
    				  </div>
    				  <div class="card alterdeck">
    				    <div class="card-body">
    				      <h5 class="card-title">Data Divisi</h5>
    				    </div>
    				    <div class="card-footer">
    				      <small class="text-muted"><a href="view_divisi.php">Jump In</a></small>
    				    </div>
    				  </div>
    				  <div class="card alterdeck">
    				    <div class="card-body">
    				      <h5 class="card-title">Data Jobdeks</h5>
    				    </div>
    				    <div class="card-footer">
    				      <small class="text-muted"><a href="view_jobdeks.php">Jump In</a></small>
    				    </div>
    				  </div>
    				   <div class="card alterdeck">
    				    <div class="card-body">
    				      <h5 class="card-title">Data Team</h5>
    				    </div>
    				    <div class="card-footer">
    				      <small class="text-muted"><a href="view_team.php">Jump In</a></small>
    				    </div>
    				  </div>
    				</div>
			    </section>
			  </div></center>
			</div>
		</main>

		<footer>
			<div class="card">
				<div class="card altbtmfooter">
					<p>CP: m.raihan.s@students.esqbs.ac.id (Han) | n.hayuningrum@students.esqbs.ac.id (Nisa)</p>
					<p>Menara 165 Lt. 18 & 19 Jl. TB Simatupang, Cilandak, Jakarta Timur</p>
				</div>

				<div class="altbtmfooter">
					<p>Copyright @2020, Event Management & Evaluation Design By &#169;HanSarwa</p>
				</div>
			</div>
		</footer>
	</body>
</html>
