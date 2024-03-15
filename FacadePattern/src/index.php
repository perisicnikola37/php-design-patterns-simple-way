<?php

require __DIR__ . '/../vendor/autoload.php';

use MyNamespace\Classes\CarFacade;

$car = new CarFacade();

echo "Turning on the car:" . "<br/>";
$car->turnOnCar();

echo "<br/>";
echo "<br/>";

echo "Turning off the car:" . "<br/>";
$car->turnOffCar();

echo "<br/>";
echo "<br/>";

echo "Note: Ideally client would not see printed values.. instead operations will be performed in the background.";
