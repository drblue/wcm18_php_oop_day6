<?php

class Vehicle {
	protected $manufacturer;
	protected $model;
	protected $floats = false;
	protected $wheels = false;

	public function __construct() {
		die("A Vehicle can't exist by itself.");
	}

	public function getType() {
		return static::$type;
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
