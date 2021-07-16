<?php
	session_start();

	if(!isset($_SESSION["login"])){
		header("Location: login.php");
		exit;
	}

	require_once 'dbconnect.php';
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Data Team</title>
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
			      <li class="nav-item">
			        <a class="nav-link" href="index.php">Home</a>
			      </li>
			      <li class="nav-item active">
			        <a class="nav-link" href="view_anggota.php">Data Anggota </a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link" href="view_acara.php">Data Acara <span class="sr-only">(current)</span> </a>
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

			    	<h5 class="card-title">Data Team</h5>

			    	<table class="table" style="text-align: center; display: inline-block; overflow: auto;">
			    	  <thead>
			    	    <tr>

			    	      <th scope="col">Nama Acara</th>
			    	      <th scope="col">Tipe Acara</th>
			    	      <th scope="col">Tim</th>
			    	   
			    	      <th scope="col" colspan="2"><a href="add_team.php">Add</a></th>
			    	    </tr>
			    	  </thead>
			    	  <tbody>
			    	  	<?php
			    	  		//koneksi tabel
			    	  		$result=$con->query("select*from list_team");

			    	  		//koneksi field
			    	  		while($row=$result->fetch_assoc()){

			    	  		if ($con->errno) {
			    	  			die('Query Error : '.$con->errno.' - '.$con->error);
			    	  		}
			    	  	?>
			    	    <tr>
			    	      <td><?php echo $row['nama_acara']; ?></td>
			    	      <td><?php echo $row['tipe_acara']; ?></td>
			    	      <td><?php echo $row['tim']; ?></td>

							<td>
								<?php
									echo "<a href='delete_team.php?id=$row[nama_acara]'>Delete</a>";
								?>
							</td>
			    	    </tr>
			    	    <?php 
			    			} 
			    		?>
			    	  </tbody>
			    	</table>
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


