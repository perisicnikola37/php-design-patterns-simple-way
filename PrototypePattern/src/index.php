<?php

use MyNamespace\Classes\ClientPrototype;

require __DIR__ . '/../vendor/autoload.php';

// Creating a new instance of ClientPrototype
$client = new ClientPrototype('John', 30);
echo "Original client instance: {$client->name}, {$client->age}" . "<br/><br/>";

// Cloning the original ClientPrototype instance
$client2 = $client->clone();
$client2->name = 'Mark';
echo "Cloned client instance with updated name: {$client2->name}, {$client2->age}";
