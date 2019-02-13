<?php

class GuestController {
	protected $dbh;

	public function __construct() {
		// connect to db via PDO
		// and get db handle
		$this->dbh = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=utf8mb4", DB_USERNAME, DB_PASSWORD);
	}

	public function createGuest($name, $email, $phone) {
		$query = $this->dbh->prepare("INSERT INTO guests (name, email, phone) VALUES (:name, :email, :phone)");
		$query->bindParam(':name', $name);
		$query->bindParam(':email', $email);
		$query->bindParam(':phone', $phone);
		return $query->execute();
	}

	public function getGuest($id) {
		$query = $this->dbh->prepare("SELECT * FROM guests WHERE id = :id");
		$query->bindParam(':id', $id);
		$query->execute();

		return $query->fetchObject('Guest');
	}

	public function getGuests() {
		$query = $this->dbh->prepare("SELECT * FROM guests");
		$query->execute();

		return $query->fetchAll(PDO::FETCH_CLASS, 'Guest');
	}
}
