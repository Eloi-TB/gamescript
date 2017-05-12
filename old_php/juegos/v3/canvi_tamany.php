<?php
	//header ("Content-Type: text/html; charset=utf-8");
	session_start();
	ini_set('session.auto_start', '1');
	$_SESSION['size']=$_GET['size'];
	echo $_SESSION['size'];
?>
