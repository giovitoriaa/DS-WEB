<?php

if ($_SERVER ["REQUEST_METHOD"] != 'POST');{
    echo" <script> alert('Esta faltando o metodo post');
        window.location.href = 'produto.php';         
    /<script> ";

}

$nome= $_POST['nome'];
$codigo = $_POST['codigo'];
$estoque = $_POST['estoque'];
$preco = $_POST['preco'];

include "produtoValida.php";
if (validaProduto($nome, $codigo, $estoque, $preco)){

    include "conexao.php";


    echo "<h2>Inserindo dados</h2>";
    $statement = $db->prepare("INSERT INTO produtos (nome, codigo, estoque, preco) VALUES (:nome, :codigo, :estoque, :preco)");

    $statement->bindParam(':nome', $nome);
    $statement->bindParam(':codigo', $codigo);
    $statement->bindParam(':estoque', $estoque);
    $statement->bindParam(':preco', $preco);
    $statement->execute();
}

header("Location: produto.php"); //Redirecionando com o PHP



?>