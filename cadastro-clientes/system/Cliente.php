<?php
class Cliente {
    private $pdo;

    public function __construct($pdo) { // Função construtora
        $this->pdo = $pdo; 
    }

    public function salvar(  // Função salvar
        $name,
        $razaoSocial,
        $cnpj,
        $logradouro,
        $numero,
        $bairro,
        $cidade,
        $estado
    ) {
        try {
            $query = "INSERT INTO tbl_lu_clientes (nome_fantasia, razao_social, cnpj, logradouro, 
                                                    numero, bairro, cidade, estado) 
                      VALUES (:name, :razaoSocial, :cnpj, :logradouro, :numero, :bairro, :cidade, :estado)";
            $stmt = $this->pdo->prepare($query);
            $stmt->bindParam(':name', $name);
            $stmt->bindParam(':razaoSocial', $razaoSocial);
            $stmt->bindParam(':cnpj', $cnpj);
            $stmt->bindParam(':logradouro', $logradouro);
            $stmt->bindParam(':numero', $numero);
            $stmt->bindParam(':bairro', $bairro);
            $stmt->bindParam(':cidade', $cidade);
            $stmt->bindParam(':estado', $estado);
            return $stmt->execute();
        } catch (PDOException $e) {
            error_log("Erro ao salvar o cliente: " . $e->getMessage());
            return false;
        }
    }

    public function exibirClientes() { // Função exibirClientes
        try {
            $query = "SELECT id, nome_fantasia, razao_social, cnpj, logradouro, numero, bairro, cidade, estado FROM tbl_lu_clientes";
            $stmt = $this->pdo->prepare($query);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            error_log("Erro ao exibir os clientes: " . $e->getMessage());
            return [];
        }
    }

    public function buscarPorCnpj($cnpj) {
        try {
            $query = "SELECT * FROM tbl_lu_clientes WHERE cnpj = :cnpj";
            $stmt = $this->pdo->prepare($query);
            $stmt->bindParam(':cnpj', $cnpj);
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            error_log("Erro ao buscar cliente por CNPJ: " . $e->getMessage());
            return false;
        }
    }

    public function buscarPorNome($nome) { // Função buscarPorNome
        try {
            $query = "SELECT * FROM tbl_lu_clientes WHERE nome_fantasia = :nome";
            $stmt = $this->pdo->prepare($query);
            $stmt->bindParam(':nome', $nome);
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            error_log("Erro ao buscar cliente por nome: " . $e->getMessage());
            return false;
        }
    }

    public function buscarPorId($id) {  // Função buscarPorId
        try {
            $query = "SELECT * FROM tbl_lu_clientes WHERE id = :id";
            $stmt = $this->pdo->prepare($query);
            $stmt->bindParam(':id', $id);
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            error_log("Erro ao buscar cliente por ID: " . $e->getMessage());
            return false;
        }
    }

    public function editar( // Função editar
        $id,
        $name,
        $razaoSocial,
        $cnpj,
        $logradouro,
        $numero,
        $bairro,
        $cidade,
        $estado
    ) {
        try {
            $query = "UPDATE tbl_lu_clientes SET 
                        nome_fantasia = :name, 
                        razao_social = :razaoSocial, 
                        cnpj = :cnpj, 
                        logradouro = :logradouro, 
                        numero = :numero, 
                        bairro = :bairro, 
                        cidade = :cidade, 
                        estado = :estado 
                      WHERE id = :id";
            $stmt = $this->pdo->prepare($query);
            $stmt->bindParam(':id', $id);
            $stmt->bindParam(':name', $name);
            $stmt->bindParam(':razaoSocial', $razaoSocial);
            $stmt->bindParam(':cnpj', $cnpj);
            $stmt->bindParam(':logradouro', $logradouro);
            $stmt->bindParam(':numero', $numero);
            $stmt->bindParam(':bairro', $bairro);
            $stmt->bindParam(':cidade', $cidade);
            $stmt->bindParam(':estado', $estado);
            return $stmt->execute();
        } catch (PDOException $e) {
            error_log("Erro ao editar cliente: " . $e->getMessage());
            return false;
        }
    }
}

