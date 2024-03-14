<?php

use MyNamespace\Classes\President;

require __DIR__ . '/../vendor/autoload.php';

$president1 = President::getInstance();
echo "First president: " . $president1->name . "<br/>";

$president2 = President::getInstance();
echo "Second president: " . $president2->name . "<br/>";

echo "Just one president instance was created. Both variables point to the same instance";
