<?php
require_once 'dbconnect.php';

mysqli_query($con, "DELETE FROM list_team WHERE nama_acara = '$_GET[id]' ") or die (mysqli_error($con));
echo "<script>window.location = 'view_team.php'; </script>";
?>