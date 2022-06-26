<?php
$dbhost = "0.0.0.0";
$dbuser = "root";
$dbpass = "root";
$dbdb = "newdb";
$sql = mysqli_connect($dbhost, $dbuser, $dbpass, $dbdb);
if (!$sql) {
    die('cant connect ' . mysqli_connect_errno());
}
?>
