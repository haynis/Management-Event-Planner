<?php
	require_once 'dbconnect.php';

	// buat prepared statements
	$stmt = $con->prepare("INSERT INTO list_anggota VALUES (?, ?, ?, ?, ?)");

	// hubungkan "data" dengan prepared statements
	$stmt->bind_param("issss",$id_anggota,$nama,$jurusan,$email,$resize_image);
	
	//reciever
	if (isset($_POST['id_anggota']) AND isset($_POST['nama'])) {

		/*$target_dir = "assets/images/";
		$target_file = $target_dir . basename($_FILES["profilepicture"]["name"]);
		$profilepicture="assets/images/".$_FILES["profilepicture"]["name"];
		move_uploaded_file($_FILES["profilepicture"]["tmp_name"], $target_file);*/

		$folder = "assets/images/";
		$upload_image = $_FILES['profilepicture']['name'];
		
			// tentukan ukuran width yang diharapkan
			$width_size = 144;
			
			// tentukan di mana image akan ditempatkan setelah diupload
			$filesave = $folder . $upload_image;
			move_uploaded_file($_FILES['profilepicture'] ['tmp_name'], $filesave);

			// menentukan nama image setelah dibuat
			$resize_image = $folder . "resize_" . uniqid(rand()) . ".jpg";
			
			// mendapatkan ukuran width dan height dari image
			list( $width, $height ) = getimagesize($filesave);
			
			// mendapatkan nilai pembagi supaya ukuran skala image yang dihasilkan sesuai dengan aslinya
			$k = $width / $width_size;

			// menentukan width yang baru
			$newwidth = $width / $k;
			
			// menentukan height yang baru
			$newheight = $height / $k;
			
			// fungsi untuk membuat image yang baru
			$thumb = imagecreatetruecolor($newwidth, $newheight);
			$source = imagecreatefromjpeg($filesave);

			
			// men-resize image yang baru
			imagecopyresized($thumb, $source, 0, 0, 0, 0, $newwidth, $newheight, $width, $height);
			
			// menyimpan image yang baru
			imagejpeg($thumb, $resize_image);
			imagedestroy($thumb);
			imagedestroy($source);
		
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
				window.location.href="add_anggota.php";
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
	
	} else if (empty($email)){

		?>
			<script>
				alert ("Maaf, email belum diisi");
				window.location.href="index.php";
			</script>
		<?php
		die();

	} else if (empty($resize_image)) {
		
		?>
			<script>
				alert ("Maaf, gambar belum diupload");
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

	// jalankan query
	$stmt->execute();

	// cek query
	if (!$stmt) {
		?>
		<script>
			alert ("Data Tidak Berhasil Ditambah");
			window.location.href="add_anggota.php";
		</script>
		<?php
	} else {
		?>
		<script>
			alert ("Data Berhasil Ditambah");
			window.location.href="index.php";
		</script>
		<?php
	}
?>