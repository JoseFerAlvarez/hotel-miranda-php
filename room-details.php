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

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $checkin = explode("-", $_POST["checkin"]);
    $checkout = explode("-", $_POST["checkout"]);
    $checkin = $checkin[2] . "/" . $checkin[1] . "/" . $checkin[0];
    $checkout = $checkout[2] . "/" . $checkout[1] . "/" . $checkout[0];

    $sql = "SELECT bookings.status FROM bookings INNER JOIN rooms ON bookings.numroom = rooms.numroom WHERE rooms.idroom = ".$id." AND bookings.checkin BETWEEN '".$checkin."' AND '".$checkout."' AND bookings.checkout BETWEEN '".$checkin."' AND '".$checkout."';";
    $result3 = $conn->query($sql);

    if ($result3->fetch_array()[0] == null || $result3->fetch_array()[0] == 0) {
        echo $blade->run("room-details", ["room" => $result->fetch_array(), "related" => $result2->fetch_all(), "available" => 1]);
    }else{
        echo $blade->run("room-details", ["room" => $result->fetch_array(), "related" => $result2->fetch_all(), "available" => 2]);
    }
} else {
    echo $blade->run("room-details", ["room" => $result->fetch_array(), "related" => $result2->fetch_all(), "available" => 0]);
}

$conn->close();
