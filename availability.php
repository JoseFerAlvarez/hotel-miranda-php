<?php
include "./src/db/db.php";
require "vendor/autoload.php";
use eftec\bladeone\BladeOne;
$blade = new BladeOne();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $checkin = explode("-", $_POST["checkin"]);
    $checkout = explode("-", $_POST["checkout"]);
    $checkin = $checkin[2] . "/" . $checkin[1] . "/" . $checkin[0];
    $checkout = $checkout[2] . "/" . $checkout[1] . "/" . $checkout[0];

    $sql = "SELECT rooms.* FROM rooms LEFT JOIN bookings ON rooms.numroom = bookings.numroom WHERE bookings.checkin NOT BETWEEN '".$checkin."' AND '".$checkout."' AND bookings.checkout NOT BETWEEN '".$checkin."' AND '".$checkout."';";
    $result = $conn->query($sql);

    echo $blade->run("room-list", ["rooms" => $result->fetch_all()]);

    $conn->close();
} else {
    $sql = "SELECT * FROM rooms ORDER BY RAND() LIMIT 3;";
    $result = $conn->query($sql);

    echo $blade->run("index", ["rooms" => $result->fetch_all()]);

    $conn->close();
}
