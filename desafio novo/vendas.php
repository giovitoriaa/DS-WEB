<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário e BD</title>
    <link rel="stylesheet" href="./assets/style/style.css">
</head>
<body>




<?php
include 'conexao.php';
        
        $dados  = $db->query("SELECT * FROM clientes");
        echo "Quantidade de clientes cadastrados: " .$dados->rowCount();//Conta a quantidade de linhas que vai vir da função acima

        echo "<br><br>";

        $dados  = $db->query("SELECT * FROM produtos");
        echo "Quantidade de produtos cadastrados: " .$dados->rowCount();//Conta a quantidade de linhas que vai vir da função acima
