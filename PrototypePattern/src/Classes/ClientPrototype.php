<?php

namespace MyNamespace\Classes;

class ClientPrototype
{
    public $name;
    public $age;

    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function clone ()
    {
        // Creating a new instance of ClientPrototype with the same properties
        return new static($this->name, $this->age);
    }
}
