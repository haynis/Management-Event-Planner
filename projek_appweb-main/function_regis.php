<?php
require 'dbconnect.php';

function registrasi($data){
	global $con;

	$username = strtolower(stripslashes($data["username"]));
	$password = mysqli_real_escape_string($con, $data["password"]);
	$password2 = mysqli_real_escape_string($con, $data["password2"]);

	//cek username sdh ada atau belum
	$result = mysqli_query($con, "SELECT username FROM users WHERE username = '$username'");
	if (mysqli_fetch_assoc($result)) {
		echo "<script>
			alert('Maaf Username sudah terdaftar!')
		</script>";
		return false;
	}


	//cek konfirmasi pass
	if($password !== $password2){
		echo "<script>
				alert('Konfirmasi password tidak sesuai!');
			</script>";
		return false;
	}
	//enkripsi password
	$password = password_hash($password, PASSWORD_DEFAULT);

	//tambah db
	mysqli_query($con, "INSERT INTO users VALUES ('', '$username', '$password')");
	return mysqli_affected_rows($con);
}
?>
