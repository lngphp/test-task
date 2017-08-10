<?php

class LandVehicle extends VehicleBasic implements LandInterface {

	public function move(): string {
		return "\t".__FUNCTION__.PHP_EOL;
	}
	
	public function stop(): string {
		return "\t".__FUNCTION__.PHP_EOL;
	}

	public function musicOn(): string {
		return "\t".__FUNCTION__.PHP_EOL;
	}
}