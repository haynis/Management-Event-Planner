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
		<title>Tambah Anggota</title>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="assets/gaya.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	</head>

	<body>
		<header>
			<nav class="navbar navbar-expand-lg navbar-light bg-light">
			  <a class="navbar-brand" href="view_anggota.php">Event Manager</a>
			  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
			    <span class="navbar-toggler-icon"></span>
			  </button>

			  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
			    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
			      <li class="nav-item active">
			        <a class="nav-link" href="view_anggota.php">Home <span class="sr-only">(current)</span></a>
			      </li>
			    </ul>
			  </div>
			</nav>
		</header>

		<main>
			<div class="card altaboutus altcard" id="aboutus">
			  <center><div class="card-body alteraboutus">
			    <section>

			    	<h5 class="card-title">Tambah Anggota</h5>

			    	<form action="padd_anggota.php" enctype="multipart/form-data" method="post">
			    		<div class="input-group mb-3">
			    			<div class="input-group-prepend">
			    				<label class="input-group-text"><b>ID Anggota*</b></label>
			    			</div>
			    			<input class="form-control" type="number" placeholder="NIM/NIK anggota" name="id_anggota" id="id_anggota" required>
			    		</div>

			    		<div class="input-group mb-3">
			    			<div class="input-group-prepend">
			    				<label class="input-group-text"><b>Nama Anggota*</b></label>
			    			</div>
			    			<input class="form-control" type="text" maxlength="50" size="50" placeholder="Nama Lengkap" name="nama" id="nama" required>
			    		</div>

			    		<div class="input-group mb-3">
			    			<div class="input-group-prepend">
			    				<label class="input-group-text"><b>Jurusan*</b></label>
			    			</div>
			    			<input class="form-control" type="text" size="30" maxlength="30" placeholder="Jurusan" name="jurusan" id="jurusan" required>
			    		</div>

			    		<div class="input-group mb-3">
			    			<div class="input-group-prepend">
			    				<label class="input-group-text"><b>Email*</b></label>
			    			</div>
			    			<input class="form-control" type="email" placeholder="Email" name="email" id="email" required>
			    		</div>

			    		<div class="input-group mb-3">
			    			<div class="input-group-prepend">
			    		    	<label for="exampleFormControlFile1">Insert Profile Picture</label>
			    		    </div>
			    		    <input type="file" class="form-control-file" id="profilepicture" name="profilepicture" required="">
			    		</div>

			    		<input class="btn btn-primary" type="submit" value="Daftar">

			    		<p class="card-text altjustify">Keterangan:<br>
			    			*Formulir isian tidak boleh kosong
			    		</p>
			    	</form>
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