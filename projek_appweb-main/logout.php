<?php
	session_start();
	$_SESSION=[];
	session_unset();
	session_destroy();

	setcookie('wkwk', '', time() - 3600);
	setcookie('awokwok', '', time() - 3600);

	header("Location: login.php");
	exit;
?>