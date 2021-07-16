<?php
require_once 'dbconnect.php';

if (isset($_POST['add'])) {
	$nama_acara = $_POST['nama_acara'];
	$tipe_acara = $_POST['tipe_acara'];
	$tim =$_POST['anggota'];
    $chk="";  
    foreach($tim as $chk1)  
       {  
          $chk.= $chk1."<br>";  
       }  
	mysqli_query($con, "INSERT INTO list_team
								(nama_acara, tipe_acara, tim) 
						VALUES ( '$nama_acara', '$tipe_acara', '$chk')") or die (mysqli_error($con));
	echo "<script>window.location = 'view_team.php'; </script>";

}else if(isset($_POST['edit'])){
	$nama_acara = $_POST['nama_acara'];
	$tipe_acara = $_POST['tipe_acara'];
	$tim =$_POST['anggota'];
    $chk="";  
    foreach($tim as $chk1)  
       {  
          $chk.= $chk1."<br>";  
       }  
	mysqli_query($con, "UPDATE list_team SET
											  tipe_acara = '$tipe_acara',
											  $tim = '$chk', WHERE  nama_acara = '$nama_acara'")
								 or die (mysqli_error($con));
	echo "<script>window.location = 'view_team.php'; </script>";

}
?>



