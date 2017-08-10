<?php

class AirVehicle extends VehicleBasic implements AirInterface {

	public function fly(): string {
		return "\t".__FUNCTION__.PHP_EOL;
	}
	
	public function takeOff(): string {
		return "\t".__FUNCTION__.PHP_EOL;
	}

	public function landing(): string {
		return "\t".__FUNCTION__.PHP_EOL;
	}
}