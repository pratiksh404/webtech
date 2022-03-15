<?php

abstract class ATMCard implements Card
{
    public $name = "Not Available";
    public $limit = 0;
    public $charge = 0;

    public function __construct($name, $limit, $charge)
    {
        $this->name = $name;
        $this->limit = $limit;
        $this->charge = $charge;
    }

    abstract public function info();

    abstract public static function branches();
}
