<?php

abstract class VehicleBasic
{
	protected $name;

    public function __construct($name)
    {
        $this->name = $name;
    }
    
    public function getName()
    {
        return $this->name;
    }
    
    public function refuel() {
    	return "\t".__FUNCTION__.PHP_EOL;
    }
}
