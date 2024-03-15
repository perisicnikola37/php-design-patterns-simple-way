<?php

namespace MyNamespace\Classes;

class CarFacade
{
    static $car;
    public function __construct()
    {
        $this->car = new Car();
    }

    public function turnOnCar()
    {
        $this->car->turnOffTheHandbrake();
        $this->car->turnTheKey();
        $this->car->putTheGear();
        $this->car->startTheCar();
    }

    public function turnOffCar()
    {
        $this->car->stopTheCar();
        $this->car->turnTheKeyOff();
        $this->car->turnOnTheHandbrake();
    }
}
