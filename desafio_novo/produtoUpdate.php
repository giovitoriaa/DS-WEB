<?php

if ($_SERVER ["REQUEST_METHOD"] != 'POST');{
    echo" <script> alert('Esta faltando o metodo post');
        window.location.href = 'produto.php';         
    <script> ";

}

$nome= $_POST['nome'];
$codigo = $_POST['codigo'];
$estoque = $_POST['estoque'];
$preco = $_POST['preco'];
$id = $_GET['id'];



include "conexao.php";


$statement = $db->prepare("UPDATE produtos SET nome = :nome, codigo = :codigo, estoque = :estoque, preco = :preco WHERE id = :id");
$statement->bindParam(':nome', $nome);
$statement->bindParam(':codigo', $codigo);
$statement->bindParam(':estoque', $estoque);
$statement->bindParam(':preco', $preco);
$statement->bindParam(':id', $id);
$statement->execute();

header("Location: produto.php"); //Redirecionando com o PHP



?>