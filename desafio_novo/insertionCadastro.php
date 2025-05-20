<?php

if ($_SERVER ["REQUEST_METHOD"] != 'POST');{
    echo" <script> alert('Esta faltando o metodo post');
        window.location.href = 'adminCadastro.php';         
    /<script> ";

}


$nome= $_POST['nome'];
$cargo= $_POST['cargo'];
$email = $_POST['email'];
$senha = $_POST['senha'];


include "clienteValida.php";
if (validaCliente($nome, $cargo, $email, $senha)){

    include "conexao.php";

    $statement = $db->prepare("INSERT INTO administador (nome, cargo, email, senha) VALUES (:nome, :cargo, :email, :senha)");
    $statement->bindParam(':nome', $nome);
    $statement->bindParam(':cargo', $cargo);
    $statement->bindParam(':email', $email);
    $statement->bindParam(':senha', $senha);
    $statement->execute();

}


header("Location: adminCadastro.php"); //Redirecionando com o PHP


/*$retorno = $statement->execute(array($nome, $email)); 
if ($retorno == true){
    echo "Deu certo";
}*/

?>