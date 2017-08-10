<?php

require_once 'vendor/autoload.php';
 
class InitTest extends \PHPUnit\Framework\TestCase {

	/**
	 * @param $validValues
	 *
	 * @dataProvider dataProvider
	 */
    public function testCommon($class, $values)
    {
        $obj = new $class('Foo');
        foreach ($values as $value) {
        	$this->assertEquals(trim($obj->$value()), $value);
        }
    }

    public function dataProvider() {
        return [
        	[
        		'WaterVehicle',
        		[
        			'swim',
        			'stop',
        			'turnRight',
        			'turnLeft',
        		],
        	],
        	[
        		'TruckVehicle',
        		[
        			'move',
        			'stop',
        			'musicOn',
        			'emptyLoads',
        		],
        	],
        	[
        		'LandVehicle',
        		[
        			'move',
        			'stop',
        			'musicOn',
        		],
        	],
        	[
        		'AirVehicle',
        		[
        			'fly',
        			'takeOff',
        			'landing',
        		],
        	],
        ];
    }
}
