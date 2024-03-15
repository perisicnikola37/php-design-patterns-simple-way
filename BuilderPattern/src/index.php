<?php

require __DIR__ . '/../vendor/autoload.php';

use MyNamespace\Classes\CoffeeBuilder;

$title = "Builder pattern";
include_once "../../header.html";

$coffeBuilder = new CoffeeBuilder();
$coffee = $coffeBuilder
    ->setType('Espresso')
    ->setSize('Small')
    ->setMilk('No')
    ->setSugar('No')
    ->setPrice(1.10)
    ->build();

echo "Coffee type:" . $coffee->price . "<br/>";
echo "Coffee size:" . $coffee->size . "<br/>";
echo "Coffee milk:" . $coffee->milk . "<br/>";
echo "Coffee sugar:" . $coffee->sugar . "<br/>";
echo "Coffee price:" . $coffee->price . "<br/>";
