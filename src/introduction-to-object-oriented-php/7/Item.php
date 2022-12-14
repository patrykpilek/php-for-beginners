<?php

class Item
{
    public $name;

    public $description = 'This is the default';

    public static $count = 0;

    public function __construct($name, $description) {
        $this->name = $name;
        $this->description = $description;

        static::$count++;
    }

    public function sayHello()
    {
        echo "Hello";
    }

    public function getName()
    {
        return $this->name;
    }

    public static function showCount()
    {
        echo static::$count;
    }
}
