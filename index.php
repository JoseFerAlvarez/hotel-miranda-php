<?php
include "./src/db/db.php";
require "vendor/autoload.php";

use eftec\bladeone\BladeOne;

$blade = new BladeOne();

$sql = "SELECT * FROM rooms ORDER BY RAND() LIMIT 3;";
$result = $conn->query($sql);

echo $blade->run("index", ["rooms" => $result->fetch_all()]);

$conn->close();
