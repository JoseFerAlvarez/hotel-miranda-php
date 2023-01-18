<?php
include "./src/db/db.php";
require "vendor/autoload.php";
use eftec\bladeone\BladeOne;
$blade = new BladeOne();

$id = $_GET["id"];

$sql = "SELECT * FROM rooms WHERE idroom = ".$id.";";
$result = $conn->query($sql);

$sql = "SELECT * FROM rooms ORDER BY RAND() LIMIT 2;";
$result2 = $conn->query($sql);

echo $blade->run("room-details", ["room" => $result->fetch_array(), "related" => $result2->fetch_all()]);
