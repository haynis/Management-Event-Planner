<?php
	require_once 'dbconnect.php';
	
	// buat prepared statements
	$stmt = $con->prepare("UPDATE list_anggota SET nama=?, jurusan=?, email=?, profilepicture=? WHERE id_anggota=?");
	// hubungkan "data" dengan prepared statements
	$stmt->bind_param("ssssi",$nama,$jurusan,$email,$profilepicture_save,$id_anggota);
	//reciever
	if (isset($_POST['id_anggota']) AND isset($_POST['nama'])) {
		if (isset($_FILES['profilepicture']['tmp_name'])) {
			$file=$_FILES['profilepicture']['tmp_name'];
			$profilepicture= addslashes(file_get_contents($_FILES['profilepicture']['tmp_name']));
			$profilepicture_name= addslashes($_FILES['profilepicture']['name']);
			move_uploaded_file($_FILES["profilepicture"]["tmp_name"],"assets/images/" . $_FILES["profilepicture"]["name"]);
			$profilepicture_save ="assets/images/" . $_FILES["profilepicture"]["name"];
		}

		/*$target_dir = "assets/images/";
		$target_file = $target_dir . basename($_FILES["profilepicture"]["name"]);
		$profilepicture="assets/images/".$_FILES["profilepicture"]["name"];
		move_uploaded_file($_FILES["profilepicture"]["tmp_name"], $target_file);*/
		
		$id_anggota=$_POST['id_anggota'];
		$nama=$_POST['nama'];
		$jurusan=$_POST['jurusan'];
		$email=$_POST['email'];
		$nama=htmlspecialchars($nama);
		$jurusan=htmlspecialchars($jurusan);
		$email=strip_tags($email);
	
	} else {
		
		?>
			<script>
				alert ("Maaf, variabel belum di set");
				window.location.href="index.php";
			</script>
		<?php
	
	} if(empty($id_anggota)) {
		
		?>
			<script>
				alert ("Maaf, ID Anggota belum diisi");
				window.location.href="index.php";
			</script>
		<?php
		die();
	} else if(empty($nama)) {
		?>
			<script>
				alert ("Maaf, nama belum diisi");
				window.location.href="index.php";
			</script>
		<?php
		die();
	} else if (empty($jurusan)) {
		
		?>
			<script>
				alert ("Maaf, jurusan belum diisi");
				window.location.href="index.php";
			</script>
		<?php
		die();
	} else if(empty($email)) {
		?>
			<script>
				alert ("Maaf, email belum diisi");
				window.location.href="index.php";
			</script>
		<?php
		die();
	} else {
		
		if (is_numeric($nama)) {
			?>
				<script>
					alert ("Maaf, nama harus berupa huruf");
					window.location.href="index.php";
				</script>
			<?php
			die();
		
		} else if(is_numeric($jurusan)) {
			
			?>
				<script>
					alert ("Maaf, jurusan harus berupa huruf");
					window.location.href="index.php";
				</script>
			<?php
			die();
		}
	}
	// jalankan query 1
	$stmt->execute();
	
	/*//koneksi tabel
	$result=$con->query("UPDATE list_anggota SET nama='$nama',jurusan='$jurusan',email='$email' WHERE id_anggota='$id_anggota'");*/
	// cek query 1
	if (!$stmt) {
		?>
		<script>
			alert ("Data Tidak Berhasil Diedit");
			window.location.href="index.php";
		</script>
		<?php
	} else {
		?>
		<script>
			alert ("Data Berhasil Diedit");
			window.location.href="index.php";
		</script>
		<?php
	}
?> 