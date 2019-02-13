<?php

class Boat extends Vehicle {
	protected $floats = true;
	public static $type = "Boat";

	public function __construct($manufacturer, $model) {
		$this->manufacturer = $manufacturer;
		$this->model = $model;
	}
}
