<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Business System</title>
    <link rel="shortcut icon" type="imagex/png"href="./assets/img/ico.svg">
    <link rel="stylesheet" href="./assets/style/style.css">
</head>
<body>

<div class="menu">
<ul>
        <li><a href="index.php" class="meumenu" title="Home">Home</a></li>
        <li><a href="cliente.php" class="meumenu" title="Clients">Clientes</a></li>
        <li><a href="produto.php" class="meumenu meumenu-active" title="Products">Produtos </a></li>
        <li><a href="#" class="meumenu" title="Sales">Vendas </a></li>
       
    </ul>
</div>

    <div class ="container">  <!-- para criar um divisão, guardar tudo junto e facilitar o css-->
    <hr> <!--linha embaixo-->

    <?php

        if($_SERVER['REQUEST_METHOD'] != 'GET' OR !isset($_GET['id'])){
            header("Location: produto.php");
        }
        include 'conexao.php';

        $id = $_GET['id'];
       
        $stmt = $db->prepare("SELECT * FROM produtos WHERE id = :id");
        $stmt -> bindParam(':id', $id);
        $stmt -> execute();
        $dados = $stmt->fetch(PDO::FETCH_ASSOC);//Todos os registros retornados

       
            $idCliente = $dados['id'];
            $nomeProduto = $dados['nome'];
            $codigoProduto = $dados['codigo'];
            $estoqueProduto = $dados['estoque'];
            $precoProduto = $dados['preco'];


        ?> 
         <div class="formulario">
        <form action="produtoUpdate.php?id=<?=$idCliente;?>" method="POST" name="formulario" onsubmit="return validarDadosClientes()">
            <h1>CADASTRO PRODUTOS:</h1>

                <label for="nome">Nome do Produto: </label>
                <input type="text" name="nome" id="nome" value=" <?= $nomeProduto;?>">
                <p class="erro-input" id="erro-nome"></p>


                <label for="codigo">Codigo de produto: </label>
                <input type="" name="codigo" id="codigo" value=" <?= $codigoProduto;?>">
                <p class="erro-input" id="erro-codigo"></p>

                <label for="estoque">Estoque:</label>
                <input type="" name="estoque" id="estoque" value=" <?= $estoqueProduto;?>">
                <p class="erro-input" id="erro-estoque"></p>
                

                <label for="preco">Preço:</label>
                <input type="" name="preco" id="preco" value=" <?= $precoProduto;?>">
                <p class="erro-input" id="erro-preco"></p>

                <input type="Submit" >
        </form>
        </div>


</div>
<script src="./assets/js/script.js"></script>
<script src="https://kit.fontawesome.com/b1a26aa984.js" crossorigin="anonymous"></script>
</body>
</html>
    
>
    
