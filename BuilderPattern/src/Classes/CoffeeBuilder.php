<?php

namespace MyNamespace\Classes;

use MyNamespace\Classes\Coffee;

class CoffeeBuilder
{
    private $coffee;

    public function __construct()
    {
        $this->coffee = new Coffee();
    }

    public function setType($type)
    {
        $this->coffee->setType($type);
        return $this;
    }

    public function setSize($size)
    {
        $this->coffee->setSize($size);
        return $this;
    }

    public function setMilk($milk)
    {
        $this->coffee->setMilk($milk);
        return $this;
    }

    public function setSugar($sugar)
    {
        $this->coffee->setSugar($sugar);
        return $this;
    }

    public function setPrice($price)
    {
        $this->coffee->setPrice($price);
        return $this;
    }

    public function build()
    {
        return $this->coffee;
    }
}
