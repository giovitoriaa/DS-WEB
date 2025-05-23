<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Business System</title>
    <link rel="shortcut icon" type="imagex/png" href="./assets/img/ico.svg">
    <link rel="stylesheet" href="./assets/style/style.css">

</head>
<body>
<div class="css">  
<div class="container">
 
    <div class="menu">
        <ul>
            <li><a href="index.php" class="meumenu" title="Home">Home</a></li>
            <li><a href="cliente.php" class="meumenu" title="Clientes">Clientes</a></li>
            <li><a href="produto.php" class="meumenu" title="Produtos">Produtos</a></li>
            <li><a href="venda.php" class="meumenu meumenu-active" title="Vendas">Vendas</a></li>
        </ul>
    </div>
    
        <hr>
        <div class="carrinho">
            <div><h2>Carrinho de compras</h2></div>  
            <button type="button" onclick="window.location.href='vendaHistorico.php'">Registro de vendas</button>
           
            <p id="aviso"></p>
            <p id="dadosCliente">Cliente: </p>
            <table id="tabelaCarrinho"></table>
            <div id="rodapeCarrinho"></div>
        </div>
    <?php  
        include 'conexao.php';

        echo "<h2>Selecione um cliente</h2>";
        $dados = $db->query("SELECT * FROM clientes");
        $todos = $dados->fetchAll(PDO::FETCH_ASSOC); //Todos os registros retornados
        echo "<table id='clientes'>";
        echo "
            <tr>
                <th>Selecione</th>
                <th>Nome</th>
                <th>E-mail</th>
                <th>Observacao</th>
                <th>Editar</th>
            </tr>
        ";
        foreach($todos as $linha){
            extract($linha);
            echo "<tr>";
            echo "<td><i onclick=\"selecionaCliente($id,'$nome')\" class='fa-solid fa-user'></i></td>"; 
            echo "<td>".$nome."</td>";
            echo "<td>".$email."</td>";
            echo "<td>".$observacao."</td>";
            echo "<td><a href='clientesAlteracao.php?id=$id'><i class='fa-solid fa-pencil'></i></a></td>";
            echo "</tr>";
        }
        echo "</table>";


        /* ==================== FIM DO CLIENTE E INICIO DO PRODUTO ==================== */

        echo "<h2>Selecione os Produtos</h2>";
        $dados = $db->query("SELECT * FROM produtos");
        $todos = $dados->fetchAll(PDO::FETCH_ASSOC); //Todos os registros retornados
        echo "<table id='clientes'>";
        echo "
            <tr>
                <th>Selecione</th>
                <th>Código</th>
                <th>Nome</th>
                <th>Estoque</th>
                <th>Preço</th>
                <th>Editar</th>
            </tr>
        ";
        foreach($todos as $linha){
            extract($linha);
            echo "<tr>";
            echo "<td><i onclick=\"selecionaProduto($id,'$nome', $codigo, $estoque, $preco)\"class='fa-solid fa-cart-plus'></td>";
            echo "<td>".$codigo."</td>";
            echo "<td>".$nome."</td>";
            echo "<td>".$estoque."</td>";
            echo "<td>".$preco."</td>";
            echo "<td><a href='produtoAlteracao.php?id=$id'><i class='fa-solid fa-pencil'></i></a></td>";
            echo "</tr>";
        }
        echo "</table>";
     
    ?>
    </div>
    </div>  
</body>
<script src="./assets/js/venda.js"></script>
<script src="https://kit.fontawesome.com/8403ba6cce.js" crossorigin="anonymous"></script>
</html>