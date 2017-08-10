<?php

class TruckVehicle extends VehicleBasic implements TruckInterface {
	
	public function move(): string {
		return "\t".__FUNCTION__.PHP_EOL;
	}
	
	public function stop(): string {
		return "\t".__FUNCTION__.PHP_EOL;
	}

	public function musicOn(): string {
		return "\t".__FUNCTION__.PHP_EOL;
	}

	public function emptyLoads(): string {
		return "\t".__FUNCTION__.PHP_EOL;
	}
}