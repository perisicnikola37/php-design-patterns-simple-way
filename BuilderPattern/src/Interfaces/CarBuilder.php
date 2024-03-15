<?php

namespace MyNamespace\Interfaces;

interface CarBuilder
{
    public function setModel();
    public function setEngine();
    public function setTransmission();
    public function setColor();
    public function getResult(): Car;
}
