<?php
function selectAllByField($field, $value)  
{  
    return "Select * from tbl_lu_clientes WHERE " . $field . " = '" . $value . "';";
}
function insertClientTable(
    $name,
    $razaoSocial,
    $cnpj,
    $logradouro,
    $numero,
    $bairro,
    $cidade,
    $estado
) {
    return "INSERT INTO tbl_lu_clientes (nome_fantasia, razao_social, cnpj, logradouro, 
                                            numero, bairro, cidade, estado) 
             VALUES('" . $name
        . "','" . $razaoSocial
        . "','" . $cnpj
        . "','" . $logradouro
        . "','" . $numero
        . "','" . $bairro
        . "','" . $cidade
        . "','" . $estado
        . "');";
}

function updateCliente(
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
    return "UPDATE tbl_lu_clientes SET nome_fantasia = '" . $name .
        "', razao_social = '" . $razaoSocial .
        "', cnpj = '" . $cnpj .
        "', logradouro = '" . $logradouro .
        "', numero = '" . $numero .
        "', bairro = '" . $bairro .
        "', cidade = '" . $cidade .
        "', estado = '" . $estado . "'
            WHERE id = '" . $id . "';";
}

