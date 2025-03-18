<?php

if ($_SERVER ["REQUEST_METHOD"] != 'POST');{
    echo" <script> alert('Esta faltando o metodo post');
        window.location.href = 'cliente.php';         
    /<script> ";

}

$nome= $_POST['nome'];
$email = $_POST['email'];
$observacao = $_POST['observacao'];


include "clienteValida.php";
if (validaCliente($nome, $email, $observacao)){

    include "conexao.php";

    $statement = $db->prepare("INSERT INTO clientes (nome, email, observacao) VALUES (:nome, :email, :observacao)");
    $statement->bindParam(':nome', $nome);
    $statement->bindParam(':email', $email);
    $statement->bindParam(':observacao', $observacao);
    $statement->execute();

}


header("Location: cliente.php"); //Redirecionando com o PHP


/*$retorno = $statement->execute(array($nome, $email)); 
if ($retorno == true){
    echo "Deu certo";
}*/

?>