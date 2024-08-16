<?php

$xajax->printJavascript(dirname(__FILE__) . "/../includes/xajax.inc.php");
require_once ("Conexao.php");
require_once ("Cliente.php");

class Cadastro { // Classe Cadastro
    private $xajax;
    private $conexao;
    private $cliente;

    public function __construct() {
        $this->xajax = new xajax("", "xajax_", 'ISO-8859-1');
        $this->conexao = new Conexao();
        $this->cliente = new Cliente($this->conexao->getPdo());
        $this->xajax->registerFunction([$this, 'salvar']);
        $this->xajax->registerFunction([$this, 'exibirClientes']);
        $this->xajax->registerFunction([$this, 'resultado']);
        $this->xajax->processRequests();
    }

    public function salvar(    // Função salvar
        $name, 
        $razaoSocial,
        $cnpj,
        $logradouro,
        $numero,
        $bairro,
        $cidade,
        $estado
    ) {
        $response = new xajaxResponse();
    
        if ($this->cliente->salvar($name, $razaoSocial, $cnpj, $logradouro, $numero, $bairro, $cidade, $estado)) {
            $this->resultado($name, $razaoSocial, $cnpj, $logradouro, $numero, $bairro, $cidade, $estado, $response);
            $cliente = $this->cliente->exibirClientes();
            $response->addScriptCall('atualizarTabelaClientes', $cliente);
        } else {
            $response->addAlert("Erro ao salvar os dados do cliente.");
        }
    
        return $response->getXML();
    }
    private function resultado(   // Função resultado
        $name,
        $razaoSocial,
        $cnpj,
        $logradouro,
        $numero,
        $bairro,
        $cidade,
        $estado,
        $response
    ) {
        $response->addScript("$('#res-cadastrado').removeClass('visually-hidden');");
        $response->addScript("$('#res-name').html(`$name`);");
        $response->addScript("$('#res-razaoSocial').html(`$razaoSocial`);");
        $response->addScript("$('#res-cnpj').html(`$cnpj`);");
        $response->addScript("$('#res-logradouro').html(`$logradouro`);");
        $response->addScript("$('#res-numero').html(`$numero`);");
        $response->addScript("$('#res-bairro').html(`$bairro`);");
        $response->addScript("$('#res-cidade').html(`$cidade`);");
        $response->addScript("$('#res-estado').html(`$estado`);");
    }
}

// Instancia a classe Cadastro
$cadastro = new Cadastro();
?>