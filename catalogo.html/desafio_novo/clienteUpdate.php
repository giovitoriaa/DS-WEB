<?php

if ($_SERVER ["REQUEST_METHOD"] != 'POST');{
    echo" <script> alert('Esta faltando o metodo post');
        window.location.href = 'cliente.php';         
    <script> ";

}

$nome= $_POST['nome'];
$email = $_POST['email'];
$observacao = $_POST['observacao'];
$id = $_GET['id'];


include "conexao.php";


$statement = $db->prepare("UPDATE clientes SET nome = :nome, email = :email, observacao = :observacao WHERE id = :id");
$statement->bindParam(':nome', $nome);
$statement->bindParam(':email', $email);
$statement->bindParam(':observacao', $observacao);
$statement->bindParam(':id', $id);
$statement->execute();

header("Location: cliente.php"); 



//Redirecionando com o PHP


/*$retorno = $statement->execute(array($nome, $email)); 
if ($retorno == true){
    echo "Deu certo";
}*/

?>