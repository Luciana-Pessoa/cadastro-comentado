<?php

include(dirname(__FILE__) . "/../system/cadastro.php.inc");
$xajax->printJavascript(dirname(__FILE__) . "/../includes/xajax/");


?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="ISO-8859-1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../includes/xajax/xajax_js/xajax.js"></script>
    <script src="../js/cadastro.js"></script>
    


    <title>Cadastro Cliente</title>
</head>

<body style="background-color: #008B8B;">
    <main class="container">
        <div class="row">
            <div class="col-6">
                <div class="m-4" id="cadastro-container">
                    <h1 style="text-align: center;">Cadastro de cliente: </h1>
                </div>
                <form action="">
                    <div class="row d-flex" id="cadastro">
                        <div class="input-group mb-3 ">
                            <label class="col-md-4 input-group-text " for="name">Nome Fantasia: </label>
                            <input type="text" name="name" class="flex-fill bd-highlight" id="name">
                        </div>
                        <br>
                        <div class="input-group mb-3">
                            <label class="col-md-5 input-group-text " for="razao_social">Razao Social:</label>
                            <input type="text" name="razao_social" class="flex-fill bd-highlight" id="razao_social">
                        </div>
                        <br>
                        <div class="input-group mb-3">
                            <label class="col-md-5  input-group-text" for="cnpj">CNPJ:</label>
                            <input type="text" name="cnpj" class="flex-fill bd-highlight" id="cnpj">
                        </div>
                        <br>
                        <div class="input-group mb-3">
                            <label class="col-md-5 input-group-text" for="logradouro">Logradouro: </label>
                            <input type="text" name="logradouro" class="flex-fill bd-highlight" id="logradouro">
                        </div>
                        <br>
                        <div class="input-group mb-3">
                            <label class="col-md-5 input-group-text" for="numero">Numero: </label>
                            <input type="number" name="numero" class="flex-fill bd-highlight" id="numero">
                        </div>
                        <br>
                        <div class="input-group mb-3">
                            <label class="col-md-5 input-group-text" for="bairro">Bairro: </label>
                            <input type="text" name="bairro" class="flex-fill bd-highlight" id="bairro">
                        </div>
                        <br>
                        <div class="input-group mb-3">
                            <label class="col-md-5 input-group-text" for="cidade">Cidade: </label>
                            <input type="text" name="cidade" class="flex-fill bd-highlight" id="cidade">
                        </div>
                        <br>
                        <div class="input-group mb-3">
                            <label class="col-md-5 input-group-text" for="estado">Estado: </label>
                            <input type="text" name="estado" class="flex-fill bd-highlight" id="estado">
                        </div>
                    </div>
                    <br>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <button class="btn btn-primary btn-lg" id="btn-salvar" type="button"> Salvar </button>
                        <button class="btn btn-primary btn-lg" id="btn-limpar" type="button">Limpar</button>
                        <button class="btn btn-warning btn-lg" id="btn-ir-lista" type="button">IR A LISTA DE CLIENTES CADASTRADOS</button>
                    </div>
                </form>
            </div>

            <div class="col p-5 visually-hidden" id="res-cadastrado">
                <h3 id="title">Os Dados salvos abaixo:</h3>
                <div class="row mb-3">
                    <div class="d-flex align-items-end bd-highlight">
                        <label class="col-sm-5" for="res-name">Nome Fantasia: </label>
                        <span class="flex-fill bd-highlight" id="res-name"></span>
                    </div>
                    <br>
                    <div class="d-flex align-items-end bd-highlight">
                        <label class="col-sm-5" for="res-razaoSocial">Razao Social: </label>
                        <span id="res-razaoSocial"></span>
                    </div>
                    <br>
                    <div class="d-flex align-items-end bd-highlight">
                        <label class="col-sm-5" for="res-cnpj">CNPJ: </label>
                        <span id="res-cnpj"></span>
                    </div>
                    <br>
                    <div class="d-flex align-items-end bd-highlight">
                        <label class="col-sm-5" for="res-logradouro">Logradouro: </label>
                        <span id="res-logradouro"></span>
                    </div>
                    <br>
                    <div class="d-flex align-items-end bd-highlight">
                        <label class="col-sm-5" for="res-numero">Numero: </label>
                        <span id="res-numero"></span>
                    </div>
                    <br>
                    <div class="d-flex align-items-end bd-highlight">
                        <label class="col-sm-5" for="res-bairro">Bairro: </label>
                        <span id="res-bairro"></span>
                    </div>
                    <br>
                    <div class="d-flex align-items-end bd-highlight">
                        <label class="col-sm-5" for="res-cidade">Cidade: </label>
                        <span id="res-cidade"></span>
                    </div>
                    <br>
                    <div class="d-flex align-items-end bd-highlight">
                        <label class="col-sm-5" for="res-estado">Estado: </label>
                        <span id="res-estado"></span>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script>
    document.getElementById('btn-ir-lista').addEventListener('click', function() {
        window.location.href = '//minas/xajax/luciana/cadastro-clientes/views/clientes_cadastrados.php';
    });
</script>


</body>

</html>