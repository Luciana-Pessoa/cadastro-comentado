<?php

// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

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
    <title>Clientes Cadastrados</title>
</head>

<body style="background-color: #008B8B;">
    <main class="container">
        <div class="row">
            <div class="col-6">
                <div class="m-40" id="clientes-container">
                    <h1 style="text-align: center;">Tabela de Clientes Cadastrados:</h1>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>NOME FANTASIA</th>
                                <th>RAZAO SOCIAL</th>
                                <th>CNPJ</th>
                            </tr>
                        </thead>
                        <tbody id="clientes-body">
                            <!-- Clientes serão inseridos aqui -->
                        </tbody>
                        
                    </table>
                        <div>  <button onclick="window.location.href='https://minas/xajax/luciana/cadastro-clientes/views/cadastro.php'
                        " class="btn btn-warning btn-lg" type="button">IR A PAGINA DE CADASTRAR</button> 
                     
                          <button class="btn btn-primary btn-lg" onclick="window.location.href='https://minas/xajax/luciana/cadastro-clientes/views/buscarcliente.php'
                        " class="btn btn-warning" type="button">BUSCAR PARA EDITAR
                        </button> 
                     </div> 
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script>
        // Chama a função para exibir os clientes ao carregar a página
        $(document).ready(function() {
            exibirClientes();
        });
    </script>
    
  
</body>

</html>