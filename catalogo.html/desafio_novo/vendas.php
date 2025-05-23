<?php
    session_start();

    ?>
    
    
    <!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário e BD</title>
    <link rel="stylesheet" href="./assets/style/style.css">
</head>
<body>


<div class="menu">
<ul>
       
        <li><a href="index.php" class="meumenu" title="Home">Home</a></li>
        <li><a href="cliente.php" class="meumenu" title="Clients">Clientes </a></li>
        <li><a href="produto.php" class="meumenu" title="Products">Produtos </a></li>
        <li><a href="vendas.php" class="meumenu  " title="Sales">Vendas </a></li>

    </ul>
</div>



<?php
include 'conexao.php';
        
        $dados  = $db->query("SELECT * FROM clientes");
        echo "Quantidade de clientes cadastrados: " .$dados->rowCount();//Conta a quantidade de linhas que vai vir da função acima

        echo "<br><br>";

        $dados  = $db->query("SELECT * FROM produtos");
        echo "Quantidade de produtos cadastrados: " .$dados->rowCount();//Conta a quantidade de linhas que vai vir da função acima
