<?php
session_start();

$host = "localhost";
$user = "root";
$password = "";
$dbname = "ppuapp";

$con = mysqli_connect($host, $user, $password, $dbname);

//Validate connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
