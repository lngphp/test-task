<?php

class WaterVehicle extends VehicleBasic implements WaterInterface {

	public function swim(): string {
		return "\t".__FUNCTION__.PHP_EOL;
	}
	
	public function stop(): string {
		return "\t".__FUNCTION__.PHP_EOL;
	}

	public function turnRight(): string {
		return "\t".__FUNCTION__.PHP_EOL;
	}

	public function turnLeft(): string {
		return "\t".__FUNCTION__.PHP_EOL;
	}
}