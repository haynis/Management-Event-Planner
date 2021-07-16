<?php
	require_once 'dbconnect.php';

	// buat prepared statements
	$stmt = $con->prepare("INSERT INTO list_acara VALUES (?, ?, ?, ?, ?, ?)");

	// hubungkan "data" dengan prepared statements
	$stmt->bind_param("isssss",$id_acara,$nama_acara,$tipe_acara,$lokasi,$start_date,$end_date);
	
	//reciever
	if (isset($_POST['id_acara']) AND isset($_POST['nama_acara'])) {

		/*$target_dir = "assets/images/";
		$target_file = $target_dir . basename($_FILES["profiletipe_acarature"]["name"]);
		$profiletipe_acarature="assets/images/".$_FILES["profiletipe_acarature"]["name"];
		move_uploaded_file($_FILES["profiletipe_acarature"]["tmp_name"], $target_file);*/
		
		$id_acara=$_POST['id_acara'];
		$nama_acara=$_POST['nama_acara'];
		$tipe_acara=$_POST['tipe_acara'];
		$lokasi=$_POST['lokasi'];
		$start_date=$_POST['start_date'];
		$end_date=$_POST['end_date'];
		$nama_acara=htmlspecialchars($nama_acara);
		$tipe_acara=htmlspecialchars($tipe_acara);
		$lokasi=htmlspecialchars($lokasi);
	
	} else {
		
		?>
			<script>
				alert ("Maaf, variabel belum di set");
				window.location.href="add_acara.php";
			</script>
		<?php
	
	} if(empty($id_acara)) {
		
		?>
			<script>
				alert ("Maaf, ID acara belum diisi");
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

	} else if (empty($tipe_acara)) {
		
		?>
			<script>
				alert ("Maaf, tipe_acara belum diisi");
				window.location.href="view_acara.php";
			</script>
		<?php
		die();
	
	} else if (empty($lokasi)){

		?>
			<script>
				alert ("Maaf, lokasi belum diisi");
				window.location.href="view_acara.php";
			</script>
		<?php
		die();

	}else {
		
		if (is_numeric($nama_acara)) {
			
			?>
				<script>
					alert ("Maaf, Nama acara harus berupa huruf");
					window.location.href="view_acara.php";
				</script>
			<?php
			die();
		
		} else if(is_numeric($tipe_acara)) {
			
			?>
				<script>
					alert ("Maaf, tipe_acara harus berupa huruf");
					window.location.href="view_acara.php";
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
			window.location.href="add_acara.php";
		</script>
		<?php
	} else {
		?>
		<script>
			alert ("Data Berhasil Ditambah");
			window.location.href="view_acara.php";
		</script>
		<?php
	}
?>