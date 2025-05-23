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

<button type="button" onclick="window.location.href='venda.php'">Voltar</button>
</html>

<?php
include 'conexao.php';

echo "<table id='produtos'>";
echo "
    <tr>
        <th>Nome do cliente</th>
        <th>Email</th>
        <th>Observação</th>
        <th>Nome dos produtos</th>
        <th>Codigo</th>
        <th>Estoque</th>
        <th>Preço</th>
    </tr>
";


echo "<h4>Vendas</h4>";
$dados = $db->query("SELECT * FROM vendas");
$vendas = $dados->fetchAll(PDO::FETCH_ASSOC);


foreach($vendas as $vendas){
    extract($vendas);
    $stmt = $db->prepare("SELECT * FROM clientes WHERE id = :id");
    $stmt->bindParam(":id", $idCliente);
    $stmt->execute();
    $cliente = $stmt->fetch(PDO::FETCH_ASSOC);
    /*echo $cliente['nome']."</BR>".$cliente['email']."</BR>".$cliente['observacao']."</BR>";*/

    $dados = $db->query("SELECT * FROM produtosvendas");
    $vendas = $dados->fetchAll(PDO::FETCH_ASSOC);



    foreach($vendas as $produtosvendas){
        extract($produtosvendas);
        $stmt = $db->prepare("SELECT * FROM produtos WHERE id = :id");
        $stmt->bindParam(":id", $idProduto);
        $stmt->execute();
        $produtos = $stmt->fetch(PDO::FETCH_ASSOC);
        /*echo $produtos['nome']."</BR>".$produtos['codigo']."</BR>".$produtos['estoque']."</BR>".$produtos['preco']."</BR>";*/
    

                    extract($vendas);
                    echo "<tr>";
                    echo "<td>".$cliente['nome']."</td>";
                    echo "<td>".$cliente['email']."</td>";
                    echo "<td>".$cliente['observacao']."</td>";
                    echo "<td>".$produtos['nome']."</td>";
                    echo "<td>".$produtos['codigo']."</td>";
                    echo "<td>".$produtos['estoque']."</td>";
                    echo "<td>".$produtos['preco']."</td>";
                    
                    echo "</tr>";
        }}
    
        
        echo "</table>";




   
?>