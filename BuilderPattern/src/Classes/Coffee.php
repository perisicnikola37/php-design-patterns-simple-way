<?php

namespace MyNamespace\Classes;

class Coffee
{
    public $type;
    public $size;
    public $milk;
    public $sugar;
    public $price;

    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    public function setSize($size)
    {
        $this->size = $size;
        return $this;
    }

    public function setMilk($milk)
    {
        $this->milk = $milk;
        return $this;
    }

    public function setSugar($sugar)
    {
        $this->sugar = $sugar;
        return $this;
    }

    public function setPrice($price)
    {
        $this->price = $price;
        return $this;
    }
}
