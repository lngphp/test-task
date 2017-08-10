<?php

spl_autoload_register('autoloader');
function autoloader($className)
{
    $path = 'classes/';
    require $path.$className.'.php';
}
$vehicles = [
    new WaterVehicle('Yacht'),
    new WaterVehicle('Tugboat'),
    new AirVehicle('Helicopter'),
    new AirVehicle('Plane'),
    new LandVehicle('SUV'),
    new TruckVehicle('Truck'),
];
foreach($vehicles as $vehicle) {
	if (!$vehicle instanceof VehicleBasic) {
		throw new Exception('Object is not of \'VehicleBasic\' judy_type(array)');
	}
	echo $vehicle->getName().':'.PHP_EOL;
	if ($vehicle instanceof WaterInterface) {
		echo $vehicle->swim();
		echo $vehicle->stop();
	} elseif ($vehicle instanceof AirInterface) {
		echo $vehicle->takeOff();
		echo $vehicle->fly();
		echo $vehicle->landing();
	} elseif ($vehicle instanceof TruckInterface) {
		echo $vehicle->move();
		echo $vehicle->stop();
		echo $vehicle->emptyLoads();
	} elseif ($vehicle instanceof LandInterface) {
		echo $vehicle->move();
		echo $vehicle->stop();
		echo $vehicle->musicOn();
	}
	echo $vehicle->refuel().PHP_EOL;
}
