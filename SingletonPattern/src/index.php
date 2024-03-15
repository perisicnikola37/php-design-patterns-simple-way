<?php

use MyNamespace\Classes\President;

require __DIR__ . '/../vendor/autoload.php';

$title = "Singleton pattern";
include_once "../../header.html";

$president1 = President::getInstance();
echo "First president: " . $president1->name . "<br/><br/>";

$president2 = President::getInstance();
echo "Second president is same because no new instance is made: " . $president2->name . "<br/><br/>";

echo "Just one president instance was created. Both variables point to the same instance";
