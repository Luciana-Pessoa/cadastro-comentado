<?php

require_once("Cliente.php");

class ClienteController { // Classe ClienteController
    private $cliente;

    public function __construct($pdo) { // Função construtora
        $this->cliente = new Cliente($pdo);
    }

    public function salvar_cliente($name, $razao_social, $cnpj, $logradouro, $numero, $bairro, $cidade, $estado) { // Função salvar_cliente
        return $this->cliente->salvar($name, $razao_social, $cnpj, $logradouro, $numero, $bairro, $cidade, $estado);
    }

    public function editar_cliente($id, $name, $razao_social, $cnpj, $logradouro, $numero, $bairro, $cidade, $estado) { // Função editar_cliente
        return $this->cliente->editar($id, $name, $razao_social, $cnpj, $logradouro, $numero, $bairro, $cidade, $estado);
    }

    public function exibir_clientes() { // Função exibir_clientes
        $clientes = $this->cliente->exibirClientes();
        error_log(print_r($clientes, true)); // Adiciona log para verificar os dados retornados
        return $clientes;
    }
}
?>
