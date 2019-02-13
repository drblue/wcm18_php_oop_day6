<?php

class Guest {
	protected $id;
	protected $name;
	protected $email;
	protected $phone;

	public function getId() {
		return $this->id;
	}

	public function getName() {
		return $this->name;
	}

	public function getEmail() {
		return $this->email;
	}

	public function getPhone() {
		return $this->phone;
	}
}
