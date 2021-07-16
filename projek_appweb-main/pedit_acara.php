<?php
	require_once 'dbconnect.php';
	
	// buat prepared statements
	$stmt = $con->prepare("UPDATE list_acara SET nama_acara=?, lokasi=?, tipe_acara=?, start_date=?, due_date=? WHERE id_acara=?");

	// hubungkan "data" dengan prepared statements
	$stmt->bind_param("sssssi",$nama_acara,$lokasi,$tipe_acara,$start_date,$due_date,$id_acara);

	//reciever
	if (isset($_POST['id_acara']) AND isset($_POST['nama_acara'])) {
		
		$id_acara=$_POST['id_acara'];
		$nama_acara=$_POST['nama_acara'];
		$lokasi=$_POST['lokasi'];
		$tipe_acara=$_POST['tipe_acara'];
		$start_date=$_POST['start_date'];
		$due_date=$_POST['due_date'];
		$nama_acara=htmlspecialchars($nama_acara);
		$lokasi=htmlspecialchars($lokasi);
		$lokasi=strip_tags($lokasi);
	
	} else {
		
		?>
			<script>
				alert ("Maaf, variabel belum di set");
				window.location.href="view_acara.php";
			</script>
			<?php
	
	} if(empty($id_acara)) {
		
		?>
			<script>
				alert ("Maaf, ID Acara belum diisi");
				window.location.href="view_acara.php";
			</script>
		<?php
		die();

	} else if(empty($nama_acara)) {

		?>
			<script>
				alert ("Maaf, nama_acara belum diisi");
				window.location.href="view_acara.php";
			</script>
		<?php
		die();

	} else if (empty($lokasi)) {
		
		?>
			<script>
				alert ("Maaf, lokasi belum diisi");
				window.location.href="view_acara.php";
			</script>
		<?php
		die();

	} else if(empty($tipe_acara)) {

		?>
			<script>
				alert ("Maaf, tipe acara belum diisi");
				window.location.href="view_acara.php";
			</script>
		<?php
		die();

	} else {
		
		if (is_numeric($nama_acara)) {
			?>
				<script>
					alert ("Maaf, nama_acara harus berupa huruf");
					window.location.href="view_acara.php";
				</script>
			<?php
			die();
		
		} else if(is_numeric($lokasi)) {
			
			?>
				<script>
					alert ("Maaf, lokasi harus berupa huruf");
					window.location.href="view_acara.php";
				</script>
			<?php
			die();

		}
	}

	// jalankan query 1
	$stmt->execute();
	
	/*//koneksi tabel
	$result=$con->query("UPDATE list_anggota SET nama_acara='$nama_acara',lokasi='$lokasi',nama_acara='$nama_acara' WHERE id_acara='$id_acara'");*/

	// cek query 1
	if (!$stmt) {
		?>
		<script>
			alert ("Data Tidak Berhasil Diedit");
			window.location.href="add_acara.php";
		</script>
		<?php
	} else {
		?>
		<script>
			alert ("Data Berhasil Diedit");
			window.location.href="view_acara.php";
		</script>
		<?php
	}
?>