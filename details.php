<?php
include "./src/db/db.php";
require "vendor/autoload.php";
use eftec\bladeone\BladeOne;
$blade = new BladeOne();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $contact = [
        "date" => date("d-m-Y"),
        "customer" => $_POST["customer"],
        "email" => $_POST["email"],
        "phone" => $_POST["phone"],
        "header" => $_POST["header"],
        "comment" => $_POST["comment"]];

    $sql = "INSERT INTO contacts(date, customer, email, phone, header, comment) VALUES ('".$contact["date"]."', '".$contact["customer"]."', '".$contact["email"]."', '".$contact["phone"]."', '".$contact["header"]."', '".$contact["comment"]."');";

    $conn->query($sql);

    $conn->close();
}

echo $blade->run("details");


