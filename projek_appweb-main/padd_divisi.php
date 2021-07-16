<?php
	require_once 'dbconnect.php';

	// buat prepared statements
	$stmt = $con->prepare("INSERT INTO list_divisi VALUES (?, ?, ?, ?)");

	// hubungkan "data" dengan prepared statements
	$stmt->bind_param("isss",$id_divisi,$nama_divisi,$pic,$nama_acara);
	
	//reciever
	if (isset($_POST['id_divisi']) AND isset($_POST['nama_divisi'])) {

		/*$target_dir = "assets/images/";
		$target_file = $target_dir . basename($_FILES["profilepicture"]["name"]);
		$profilepicture="assets/images/".$_FILES["profilepicture"]["name"];
		move_uploaded_file($_FILES["profilepicture"]["tmp_name"], $target_file);*/
		
		$id_divisi=$_POST['id_divisi'];
		$nama_divisi=$_POST['nama_divisi'];
		$pic=$_POST['pic'];
		$nama_acara=$_POST['nama_acara'];
		$nama_divisi=htmlspecialchars($nama_divisi);
		$pic=htmlspecialchars($pic);
		$nama_acara=htmlspecialchars($nama_acara);
	
	} else {
		
		?>
			<script>
				alert ("Maaf, variabel belum di set");
				window.location.href="add_divisi.php";
			</script>
		<?php
	
	} if(empty($id_divisi)) {
		
		?>
			<script>
				alert ("Maaf, ID Divisi belum diisi");
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
	
	} else if (empty($nama_acara)){

		?>
			<script>
				alert ("Maaf, Acara belum diisi");
				window.location.href="view_divisi.php";
			</script>
		<?php
		die();

	}else {
		
		if (is_numeric($nama_divisi)) {
			
			?>
				<script>
					alert ("Maaf, Nama divisi harus berupa huruf");
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

	// jalankan query
	$stmt->execute();

	// cek query
	if (!$stmt) {
		?>
		<script>
			alert ("Data Tidak Berhasil Ditambah");
			window.location.href="add_divisi.php";
		</script>
		<?php
	} else {
		?>
		<script>
			alert ("Data Berhasil Ditambah");
			window.location.href="view_divisi.php";
		</script>
		<?php
	}
?>