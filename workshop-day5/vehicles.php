<?php

require_once("includes/Vehicle.php");
require_once("includes/Boat.php");
require_once("includes/Car.php");

$vehicles = [];

$car = new Car("Tesla", "Model 3");
array_push($vehicles, $car);

$car = new Car("Nissan", "Qashqai");
array_push($vehicles, $car);

Car::$type = "Bil";

$car = new Car("Ford", "Escort");
array_push($vehicles, $car);


$boat = new Boat("Bertram", "63");
array_push($vehicles, $boat);

echo "<h1>Vehicles</h1>";
foreach ($vehicles as $vehicle) {
	echo "<h2>{$vehicle->getManufacturer()} {$vehicle->getModel()}</h2>";
	echo "<strong>Type</strong>: {$vehicle->getType()}<br>";
	if ($vehicle->hasWheels()) {
		echo "<em>I have {$vehicle->getNumberOfWheels()} wheels! THEY SEE ME ROLLIN'!</em><br>";
	}
	if ($vehicle->doesFloat()) {
		echo "<em>I can floats</em>";
	} else {
		echo "<strong><em>I do not float, I string</em></strong>";
	}
}
