<?php
include "./src/db/db.php";
require "vendor/autoload.php";

use eftec\bladeone\BladeOne;

$blade = new BladeOne();

$sql = "SELECT * FROM rooms WHERE offer > 0 AND status = 0;";
$result = $conn->query($sql);

$sql = "SELECT * FROM rooms;";
$result2 = $conn->query($sql);

echo $blade->run("room-offers", ["rooms" => $result->fetch_all(), "popular" => $result2->fetch_all()]);

$conn->close();
