<?php
date_default_timezone_set('Asia/Kolkata');
// error_reporting(E_ALL);
// ini_set('display_errors',1);
$servername = "localhost";
$username = "root";
$password = "";
$dbname="matka_booking";
// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>