<?php
require "vendor/autoload.php";

use eftec\bladeone\BladeOne;

$blade = new BladeOne();

echo $blade->run("room-details", []);
