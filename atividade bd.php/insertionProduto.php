<?php
include_once('conexao.php');

$nome = $_POST['nome_produto'];
$valor = $_POST['preco_produto'];
$estoque = $_POST['estoque_produto'];


$sql = "INSERT INTO produto (nome, valor, estoque) VALUES ('$nome', '$valor', '$estoque')";

if (mysqli_query($conexao, $sql)) {
    echo "Novo registro inserido com sucesso!";
    header('Location: index.php');
} else {
echo "Erro ao inserir: " . mysqli_error($conexao);
}
?>