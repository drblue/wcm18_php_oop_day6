<?php

class Boat extends Vehicle {
	protected $floats = true;
	protected $type = "Boat";

	public function __construct($manufacturer, $model) {
		parent::__construct($manufacturer, $model);
	}
}
