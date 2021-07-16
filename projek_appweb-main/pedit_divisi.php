<?php
	require_once 'dbconnect.php';
	
	// buat prepared statements
	$stmt = $con->prepare("UPDATE list_divisi SET nama_divisi=?, pic=?, nama_acara=? WHERE id_divisi=?");

	// hubungkan "data" dengan prepared statements
	$stmt->bind_param("sssi",$nama_divisi,$pic,$nama_acara,$id_divisi);

	//reciever
	if (isset($_POST['id_divisi']) AND isset($_POST['nama_divisi'])) {
		
		$id_divisi=$_POST['id_divisi'];
		$nama_divisi=$_POST['nama_divisi'];
		$pic=$_POST['pic'];
		$nama_acara=$_POST['nama_acara'];
		$nama_divisi=htmlspecialchars($nama_divisi);
		$pic=htmlspecialchars($pic);
		$nama_acara=strip_tags($nama_acara);
	
	} else {
		
		?>
			<script>
				alert ("Maaf, variabel belum di set");
				window.location.href="view_divisi.php";
			</script>
			<?php
	
	} if(empty($id_divisi)) {
		
		?>
			<script>
				alert ("Maaf, ID Anggota belum diisi");
				window.location.href="view_divisi.php";
			</script>
		<?php
		die();

	} else if(empty($nama_divisi)) {

		?>
			<script>
				alert ("Maaf, nama_divisi belum diisi");
				window.location.href="view_divisi.php";
			</script>
		<?php
		die();

	} else if (empty($pic)) {
		
		?>
			<script>
				alert ("Maaf, pic belum diisi");
				window.location.href="view_divisi.php";
			</script>
		<?php
		die();

	} else if(empty($nama_acara)) {

		?>
			<script>
				alert ("Maaf, nama_acara belum diisi");
				window.location.href="view_divisi.php";
			</script>
		<?php
		die();

	} else {
		
		if (is_numeric($nama_divisi)) {
			?>
				<script>
					alert ("Maaf, nama_divisi harus berupa huruf");
					window.location.href="view_divisi.php";
				</script>
			<?php
			die();
		
		} else if(is_numeric($pic)) {
			
			?>
				<script>
					alert ("Maaf, pic harus berupa huruf");
					window.location.href="view_divisi.php";
				</script>
			<?php
			die();

		}
	}

	// jalankan query 1
	$stmt->execute();
	
	/*//koneksi tabel
	$result=$con->query("UPDATE list_anggota SET nama_divisi='$nama_divisi',pic='$pic',nama_acara='$nama_acara' WHERE id_divisi='$id_divisi'");*/

	// cek query 1
	if (!$stmt) {
		?>
		<script>
			alert ("Data Tidak Berhasil Diedit");
			window.location.href="add_divisi.php";
		</script>
		<?php
	} else {
		?>
		<script>
			alert ("Data Berhasil Diedit");
			window.location.href="view_divisi.php";
		</script>
		<?php
	}
?>