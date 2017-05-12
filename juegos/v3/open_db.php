<?php
$conn = mysqli_connect("localhost", "alumne", "keiL2lai");
if (!$conn) {
    $log->error('Could not connect: ' . mysql_error());
    die('Could not connect: ' . mysql_error());
}
mysqli_select_db($conn, "jbalmes") or die('Could not select jbalmes database.');
mysqli_set_charset('utf8',$conn);
?>

