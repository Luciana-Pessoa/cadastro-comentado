<?php 

class Conexao { // Classe Conexao
    private $pdo;

    public function __construct() { // Função construtora
        try {
            $this->pdo = new PDO("mysql:host=minas;dbname=onboarding", 'estagiario', 'estagio123');
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Erro ao conectar ao banco de dados: " . $e->getMessage());
        }
    }

    public function getPdo() { // Função getPdo
        return $this->pdo;
    }
}
?>
