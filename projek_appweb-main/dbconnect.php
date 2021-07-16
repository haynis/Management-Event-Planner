<?php
	//koneksi server dan database
	$servername="localhost";
	$username="root";
	$password="";
	$dbname="event_mande";
	$con=new mysqli($servername,$username,$password,$dbname);
	
	// cek koneksi
	if ($con->connect_errno) {
		die('Koneksi gagal: ' .$con->connect_errno.' - '.$con->connect_error);
	}
?>