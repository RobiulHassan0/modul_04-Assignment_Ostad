<?php

// Parent Class for All child class
abstract class ParentVehicle{
    // Common properties for all vehicles
    protected $name;
    protected $type;
    protected $price;
    protected $image;

    public function __construct($name, $type, $price, $image)
    {
        $this->name = $name;
        $this->type = $type;
        $this->price = $price;
        $this->image = $image;
    }

    // Every child class must implemented this method 
    abstract public function getDetails();
}