<?php

namespace MyNamespace\Classes;

class Car
{
    private $model;
    private $engine;
    private $transmission;
    private $color;

    public function setModel($model)
    {
        $this->model = $model;
    }

    public function setEngine($engine)
    {
        $this->engine = $engine;
    }

    public function setTransmission($transmission)
    {
        $this->transmission = $transmission;
    }

    public function setColor($color)
    {
        $this->color = $color;
    }

    public function getDetails()
    {
        $details = "Model: " . $this->model . "\n";
        $details .= "Engine: " . $this->engine . "\n";
        $details .= "Transmission: " . $this->transmission . "\n";
        $details .= "Color: " . $this->color . "\n";
        return $details;
    }
}
