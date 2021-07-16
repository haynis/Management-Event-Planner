<?php
	require 'dbconnect.php';
	
	//koneksi tabel
	$result=$con->query("DELETE FROM list_anggota WHERE id_anggota='$_GET[id]'");

	if ($con->errno) {
		die('Query Error : '.$con->errno.' - '.$con->error);
	}
	
	if($result){
		?>
		<script>
			alert ("Data Berhasil Dihapus");
			window.location.href="index.php";
		</script>
		<?php
	}else{
		?>
		<script>
			alert ("Data Tidak Berhasil Dihapus");
			window.location.href="index.php";
		</script>
		<?php
	}
?>