<?php
include_once('conexao.php');

$nome = $_POST['nome_cliente'];
$email = $_POST['email_cliente'];



$sql = "INSERT INTO cliente (nome, email) VALUES ('$nome', '$email')";

if (mysqli_query($conexao, $sql)) {
    echo "Novo registro inserido com sucesso!";
    header('Location: index.php');
} else {
echo "Erro ao inserir: " . mysqli_error($conexao);
}
?>