<?php

class Car extends Vehicle {
	protected $type = "Car";
	protected $wheels = 4;

	public function __construct($manufacturer, $model, $wheels = null) {
		parent::__construct($manufacturer, $model);

		if (!is_null($wheels)) {
			$this->wheels = $wheels;
		}
	}
}
