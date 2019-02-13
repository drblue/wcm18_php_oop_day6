<?php

class Vehicle {
	protected $type = "Vehicle";
	protected $manufacturer;
	protected $model;
	protected $floats = false;
	protected $wheels = false;

	public function __construct($manufacturer, $model) {
		$this->manufacturer = $manufacturer;
		$this->model = $model;
	}

	public function getType() {
		return $this->type;
	}

	public function getManufacturer() {
		return $this->manufacturer;
	}

	public function getModel() {
		return $this->model;
	}

	public function doesFloat() {
		return $this->floats;
	}

	public function hasWheels() {
		return ($this->wheels > 0);
	}

	public function getNumberOfWheels() {
		return $this->wheels;
	}
}
