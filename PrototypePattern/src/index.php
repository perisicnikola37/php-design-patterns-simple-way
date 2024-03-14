<?php

use MyNamespace\Classes\ClientPrototype;

require __DIR__ . '/../vendor/autoload.php';

// Creating a new instance of ClientPrototype
$client = new ClientPrototype('John', 30);
echo "Original client: {$client->name}, {$client->age}" . "<br/>";

// Cloning the original ClientPrototype instance
$client2 = $client->clone();
$client2->name = 'Mark';
$client2->age = "18";
echo "Cloned client: {$client2->name}, {$client2->age}";
