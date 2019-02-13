<?php

class GuestController {
	protected $dbh;

	public function __construct() {
		// connect to db via PDO
		// and get db handle
		$this->dbh = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=utf8mb4", DB_USERNAME, DB_PASSWORD);
	}

	public function getGuests() {
		$query = $this->dbh->prepare("SELECT * FROM guests");
		$query->execute();

		return $query->fetchAll();
	}
}
