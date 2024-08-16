<?php
class Database { 
	private $pdo;

	public function __construct() { 
		try {
			$this->pdo = new PDO("mysql:host=localhost;dbname=onboarding", 'estagiario', 'estagio123');
		} catch (PDOException $e) {
			die("Erro ao abrir a base: " . $e->getMessage());
		}
	}

	public function getConnection() {
		return $this->pdo;
	}
}

$database = new Database();
$conn = $database->getConnection();



