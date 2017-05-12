<?php
//sleep(1);
session_start();
include("open_db.php");
	
$victoria = $_GET["victoria"];
$temps = $_GET["temps"];
//echo $value;

$sql = "insert into minesweeper values ('".$_SESSION['size']."','".$_SESSION['nom']."', $victoria, $temps, now())";
//echo $sql;

$result = mysqli_query($conn, $sql);

if (!$result) {
    $message  = 'Invalid query: ' . mysqli_error() . "\n";
    die($message);
}

if ($victoria == 1) {
	echo "<b>Victòria</b>";
} else {
	echo "<b>Derrota</b>";
}

echo " (".$temps." sec)";

include("close_db.php");
?>