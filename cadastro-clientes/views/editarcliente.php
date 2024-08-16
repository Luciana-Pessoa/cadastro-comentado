<?php

// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

require_once(dirname(__FILE__) . '/../includes/xajax/xajax.inc.php');

$xajax = new xajax();

include(dirname(__FILE__) . "/../system/editarcliente.php.inc");

$xajax->printJavascript(dirname(__FILE__) . '/../includes/xajax/');

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

    <title>Editar Cliente</title>
</head>

<body bgcolor="#008B8B">
    <main class="container ">
        <div class="row">
            <div class="col-6 ">
                <div class="mt-4" id="cadastro-container">
                    <h1>Editar cliente: </h1>
                </div>
                <form action="">
                    <div class="row d-flex justify-content-center" id="editar">
                        <div class="input-group mb-3">
                            <label class="col-md-4  input-group-text" for="name">Nome Fantasia:</label>
                            <input type="text" name="name" class="flex-fill bd-highlight" id="name">
                        </div>
                        <br>
                        <div class="input-group mb-3">
                            <label class="col-md-4 input-group-text" for="razao_social">Razao Social: </label>
                            <input type="text" name="razao_social" class="flex-fill bd-highlight" id="razao_social">
                        </div>
                        <br>
                        <div class="input-group mb-3">
                            <label class="col-lg-2 input-group-text" for="cnpj">CNPJ: </label>
                            <input type="text" name="cnpj" class="flex-fill bd-highlight" id="cnpj">
                        </div>
                        <br>
                        <div class="input-group mb-3">
                            <label class="col-lg-2 input-group-text" for="logradouro">Logradouro: </label>
                            <input type="text" name="logradouro" class="flex-fill bd-highlight" id="logradouro">
                        </div>
                        <br>
                        <div class="input-group mb-3">
                            <label class="col-lg-2 input-group-text" for="numero">Numero: </label>
                            <input type="number" name="numero" class="flex-fill bd-highlight" id="numero">
                        </div>
                        <br>
                        <div class="input-group mb-3">
                            <label class="col-lg-2 input-group-text" for="bairro">Bairro: </label>
                            <input type="text" name="bairro" class="flex-fill bd-highlight" id="bairro">
                        </div>
                        <br>
                        <div class="input-group mb-3">
                            <label class="col-lg-2 input-group-text" for="cidade">Cidade: </label>
                            <input type="text" name="cidade" class="flex-fill bd-highlight" id="cidade">
                        </div>
                        <br>
                        <div class="input-group mb-3">
                            <label class="col-lg-2 input-group-text" for="estado">Estado: </label>
                            <input type="estado" name="estado" class="flex-fill bd-highlight" id="estado">
                        </div>
                    </div>
                    <br>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <button class="btn btn-primary btn-lg" id="btn-editar" type="button">Editar</button>
                        <button class="btn btn-primary btn-lg" id="btn-limpar" type="button">Limpar</button>
    
</div>

                </form>
                <div>
                    <button onclick="window.location.href='cadastro.php'" class="btn btn-warning">IR A PAGINA CADASTRAR</button>
</div>
            </div>

            <div class="col p-5" id="res-editado">
                <h3 id="res-editou"></h3>
                
            </div>
        </div>
    </main>
    <script src="../js/editarcliente.js"></script>
    <script>
        <?php 
        if($_GET['id'] != ''){
            echo 'preCliente()';
        }
        ?>
    </script>



</body>

</html>