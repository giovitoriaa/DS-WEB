<?php 
//Incluo a minha conexão com o banco de dados
include_once('connection.php');

if(isset($_POST['senha'])){
    
    $user = $_POST['user'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    //Inicio a inserção dos dados no Banco
    $sql = "INSERT INTO usuario (user, email, senha) VALUES ('$user', '$email', '$senha')";

    if (mysqli_query($conexao, $sql)) {
        echo "Novo registro inserido com sucesso!";
        header('Location: login.php');
    } else {
        echo "Erro ao inserir: " . mysqli_error($conexao);
    }
}


///////////////


if(isset($_POST['preco'])){
    $nome = $_POST['nome'];
    $descricao = $_POST['descricao'];
    $preco = $_POST['preco'];

    //Inicio a inserção dos dados no Banco
    $sql = "INSERT INTO produtos (nome, descricao, preco) VALUES ('$nome', '$descricao', '$preco')";

    if (mysqli_query($conexao, $sql)) {
        echo "Novo registro inserido com sucesso!";
        header('Location: login.php');
    } else {
        echo "Erro ao inserir: " . mysqli_error($conexao);
    }
}
?>