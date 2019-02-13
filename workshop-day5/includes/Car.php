<?php

class Car extends Vehicle {

	const LICENSE_PLATE_MIN_CHARS = 6;

	public static $type = "Car";
	protected $wheels = 4;
	protected $licensePlate = "";

	public function __construct($manufacturer, $model, $wheels = null) {
		$this->manufacturer = $manufacturer;
		$this->model = $model;

		if (!is_null($wheels)) {
			$this->wheels = $wheels;
		}
	}

	public function setLicensePlate($licensePlate) {
		if (strlen($licensePlate) < self::LICENSE_PLATE_MIN_CHARS) {
			trigger_error("To few characters in license plate number.", E_USER_ERROR);
			return false;
		}

		$this->licensePlate = $licensePlate;
		return true;
	}
}
