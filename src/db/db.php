<?php
$servername = "localhost";
$username = "hotel";
$password = "hotelmiranda";
$dbname = "hotelmiranda";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

var_export($conn);
?>
