
<?php
	session_start();

	if(!isset($_SESSION["login"])){
		header("Location: login.php");
		exit;
	}

	require_once 'dbconnect.php';
?>

<?php
	//ambil nilai variabel error
	if (isset($_GET['error']))
	{
		$error=$_GET['error'];
	}
	else
	{
		$error="";
	}
	//siapkan pesan kesalahan
		$pesan="";
	if ($error=="variabel_belum_diset")
	{
		$pesan="<h3>Maaf, anda harus mengakses halaman ini dari form.php</h3>";
	}
	if ($error=="id_acara_kosong")
	{
		$pesan="<h3>Maaf, anda harus memilih acara</h3>";
	}
	if ($error=="acara_harus_tersedia_di_pilihan")
	{
		$pesan="<h3>Maaf, harap pilih acara yang tesedia </h3>";
	}
	if ($error=="tipe_acara_kosong")
	{
		$pesan="<h3>Maaf, harap pilih tipe acara yang tersedia</h3>";
	}
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Pilih Team</title>
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
			  <a class="navbar-brand" href="index.php">Event Manager</a>
			  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
			    <span class="navbar-toggler-icon"></span>
			  </button>

			  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
			    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
			      <li class="nav-item active">
			        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
			      </li>
			    </ul>
			  </div>
			</nav>
		</header>

		<main>
			<div class="card altaboutus altcard" id="aboutus">
			  <center><div class="card-body alteraboutus">
			    <section>
			    	<?php echo $pesan ?>

			    	<h5 class="card-title">Pilih Team</h5>

			    	<form action="padd_team.php" method="post">
			    		<div class="input-group mb-3">
			    			<div class="input-group-prepend">
			    				<label class="input-group-text"><b>Acara</b></label>
			    			</div>
			    			<select name="nama_acara" id="nama_acara" class="form-control"> 
			   			 <option value=""><?=@$nama_acara?></option>
				  <?php
			          	$sql_acara='SELECT * FROM list_acara';
			          	$query=mysqli_query($con,$sql_acara);
		          		while($row=mysqli_fetch_array($query))
		        	{ ?>

			        	<option value="<?php echo $row['id_acara']?> | <?php echo $row['nama_acara']?> "><?php echo $row['id_acara']?> | <?php echo $row['nama_acara']?></option>
	             <?php
	              }
	            ?>
			        </select>
			    		</div>

			    		<div class="input-group mb-3">
			    			<div class="input-group-prepend">
			    				<label class="input-group-text"><b>Tipe Acara*</b></label>
			    			</div>
			    			<select name="tipe_acara" id="tipe_acara" class="form-control"> 
			   			 <option value=""><?=@$tipe_acara?></option>
				  <?php
			          	$sql_acara='SELECT * FROM list_acara';
			          	$query=mysqli_query($con,$sql_acara);
		          		while($row=mysqli_fetch_array($query))
		        	{ ?>

			        	<option value="<?php echo $row['tipe_acara']?> "><?php echo $row['tipe_acara']?></option>
	             <?php
	              }
	            ?>
			        </select>
			    		</div>

			    		<div class="input-group mb-3">
			    			<div class="input-group-prepend">
			    				<label class="input-group-text"><b>Pilih Anggota*</b></label>
			    			</div>
			    			<div class="form-check">
			    				 <?php
			          	$sql_acara='SELECT * FROM list_anggota ORDER BY nama ASC';
			          	$query=mysqli_query($con,$sql_acara);
		          		while($row=mysqli_fetch_array($query))
		        	{ ?>
		        		<br>
							  <input class="form-check-input" name="anggota[]"  type="checkbox" value="<?php echo $row['nama']?>">
							
	           				  <label class="form-check-label" style="text-align: left;">
							  <?php echo $row['nama']?>
							  </label>
							     <?php
	              }
	            ?>
	            		</div>

			    		</div>
			    		<input class="btn btn-primary" type="submit" name="add" value="Simpan">
			    		

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