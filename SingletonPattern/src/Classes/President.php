<?php

namespace MyNamespace\Classes;

class President
{
    private static $instance;
    public $name = 'Donald Trump';

    private function __construct()
    {
    }

    public static function getInstance(): President
    {
        if (self::$instance === null) {
            self::$instance = new President();
        }

        return self::$instance;
    }
}
