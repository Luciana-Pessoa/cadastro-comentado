<?php
require_once (dirname(__FILE__)."/../includes/xajax/xajax.inc.php");
require_once("Conexao.php");
require_once("Cliente.php");

$xajax = new xajax("", "xajax_", 'ISO-8859-1');

function buscarClienteCnpj($cnpj) { // Função para buscar cliente por CNPJ
    $response = new xajaxResponse('ISO-8859-1');
    $conexao = new Conexao();
    $cliente = new Cliente($conexao->getPdo());

    $result = $cliente->buscarPorCnpj($cnpj);

    if ($result) {
        resultado(
            $result['id'],
            $result['nome_fantasia'],
            $result['razao_social'],
            $result['cnpj'],
            $result['logradouro'],
            $result['numero'],
            $result['bairro'],
            $result['cidade'],
            $result['estado'],
            $response
        );
    } else {
        $response->addAlert("CLIENTE NAO ENCONTRADO.");
    }

    return $response->getXML();
}

function buscarClienteNome($nome) { // Função para buscar cliente por nome
    $response = new xajaxResponse('ISO-8859-1');
    $conexao = new Conexao();
    $cliente = new Cliente($conexao->getPdo());

    $result = $cliente->buscarPorNome($nome);

    if ($result) {
        resultado(
            $result['id'],
            $result['nome_fantasia'],
            $result['razao_social'],
            $result['cnpj'],
            $result['logradouro'],
            $result['numero'],
            $result['bairro'],
            $result['cidade'],
            $result['estado'],
            $response
        );
    } else {
        $response->addAlert("CLIENTE NAO ENCONTRADO.");
    }

    return $response->getXML();
}

function resultado( // Função para exibir o resultado da busca
    $id,
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
    $response->addScript("$('#res-busca').removeClass('visually-hidden');");
    $response->addScript("$('#res-id').html(`$id`);");
    $response->addScript("$('#res-name').html(`$name`);");
    $response->addScript("$('#res-razaoSocial').html(`$razaoSocial`);");
    $response->addScript("$('#res-cnpj').html(`$cnpj`);");
    $response->addScript("$('#res-logradouro').html(`$logradouro`);");
    $response->addScript("$('#res-numero').html(`$numero`);");
    $response->addScript("$('#res-bairro').html(`$bairro`);");
    $response->addScript("$('#res-cidade').html(`$cidade`);");
    $response->addScript("$('#res-estado').html(`$estado`);");
}

$xajax->registerFunction("buscarClienteCnpj");
$xajax->registerFunction("buscarClienteNome");  
$xajax->registerFunction("resultado");
$xajax->processRequests();
?>
