<?php
	//header ("Content-Type: text/html; charset=utf-8");
	session_start();
	ini_set('session.auto_start', '1');
	$_SESSION['nom']=$_GET['nom'];
	echo $_SESSION['nom'];
?>
