<?php

include(dirname(__FILE__) . "/../system/buscarcliente.php.inc");
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
    <script src="../js/buscarcliente.js"></script>

    <title>Buscar Cliente/Editar</title>
</head>

<body bgcolor="#008B8B">
    <main class="container">
        <div class="row">
            <div class="col-7">
                <br> <br>
                <div class="mb-4" id="buscar-container">
                    <h1>Buscar ou Editar cliente: </h1>
                </div>
                <div class="row d-flex " id="buscar">
                    <div class="input-group mb-3">
                        <label class=" input-group-text" for="nome">NOME: </label>
                        <input type="text" name="nome" class="input-nome" id="nome">
                        <br>
                    </div>
                    <br>
                    <div class="d-grid d-md-flex w-75 ">
                        <button class="btn btn-primary btn-lg" id="btn-buscar-nome" type="button"> Buscar por Nome
                        </button>
                    </div>
                    <br>
                    <div class="row d-flex mt-5" id="buscar-cnpj">

                        <div class="input-group mb-3">
                            <label class=" input-group-text" for="cnpj">CNPJ: </label>
                            <input type="text" name="cnpj" class="input-cnpj" id="cnpj">
                            <br>
                        </div>
                        <br>
                        <div class="d-grid d-md-flex w-75">
                            <button class="btn btn-primary btn-lg" id="btn-buscar-cnpj" type="button"> Buscar por CNPJ
                            </button>
                            
                         
                        </div>
                    </div>
                </div>
                <br>
                <br>
                <div> 
                            <button onclick="window.location.href='cadastro.php'" class="btn btn-warning">IR A PAGINA CADASTRAR</button>     
                            
                        </div>
            </div>

            <div class="col p-5 visually-hidden" id="res-busca">
                <h3 id="title">Cliente: </h3>
                <div class="row mb-3">
                    <div class="d-flex align-items-end bd-highlight">
                        <label class="col-md-5" for="res-id">id: </label>
                        <div class="flex-fill bd-highlight" id="res-id"></div>
                    </div>
                    <div class="d-flex align-items-end bd-highlight">
                        <label class="col-md-5" for="res-name">Nome Fantasia: </label>
                        <span class="flex-fill bd-highlight" id="res-name"></span>
                    </div>
                    <br>
                    <div class="d-flex align-items-end bd-highlight">
                        <label class="col-md-5" for="res-razaoSocial">Razao Social: </label>
                        <span id="res-razaoSocial"></span>
                    </div>
                    <br>
                    <div class="d-flex align-items-end bd-highlight">
                        <label class="col-md-5" for="res-cnpj">CNPJ: </label>
                        <span id="res-cnpj"></span>
                    </div>
                    <br>
                    <div class="d-flex align-items-end bd-highlight">
                        <label class="col-md-5" for="res-logradouro">Logradouro: </label>
                        <span id="res-logradouro"></span>
                    </div>
                    <br>
                    <div class="d-flex align-items-end bd-highlight">
                        <label class="col-md-5" for="res-numero">Numero: </label>
                        <span id="res-numero"></span>
                    </div>
                    <br>
                    <div class="d-flex align-items-end bd-highlight">
                        <label class="col-md-5" for="res-bairro">Bairro: </label>
                        <span id="res-bairro"></span>
                    </div>
                    <br>
                    <div class="d-flex align-items-end bd-highlight">
                        <label class="col-md-5" for="res-cidade">Cidade: </label>
                        <span id="res-cidade"></span>
                    </div>
                    <br>
                    <div class="d-flex align-items-end bd-highlight">
                        <label class="col-md-5" for="res-estado">Estado: </label>
                        <span id="res-estado"></span>
                    </div>

                    <div class="d-grid d-md-flex p-5">
                        <button class="btn btn-primary btn-lg" id="btn-buscar-editar-cliente" type="button"> Editar cliente
                        </button>
                    </div>
                </div>
            </div>

        </div>
    </main>
    <script src="../js/buscarcliente.js"></script>
</body>

</html>