<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário e BD</title>
    <link rel="stylesheet" href="./assets/style/style.css">
</head>
<body>

<div class="menu">
<ul>
        <li><a href="index.php" class="meumenu" title="Home">Home</a></li>
        <li><a href="cliente.php" class="meumenu meumenu-active" title="Clients">Clientes </a></li>
        <li><a href="produto.php" class="meumenu" title="Products">Produtos </a></li>
        <li><a href="vendas.php" class="meumenu" title="Sales">Vendas </a></li>
    </ul>
</div>

    <div class ="container">  <!-- para criar um divisão, guardar tudo junto e facilitar o css-->
    <hr> <!--linha embaixo-->
        <div class="formulario">
            <form action="insertion.php" method="POST" name="formulario" onsubmit="return validarDadosClientes()">
                <h1>FORMULÁRIO:</h1>
                <label for="nome">Nome: </label>
                <input type="text" name="nome" id="nome">
                <p class="erro-input" id="erro-nome"></p>


                <label for="email">E-mail: </label>
                <input type="text" name="email" id="email">
                <p class="erro-input" id="erro-email"></p>


                <label for="observacao">Observação do cliente:</label>
                <textarea name="observacao" cols="30" rows="4" id="observacao"></textarea>
                <p class="erro-input" id="erro-observacao"></p>
                <br><br>
                <input type="Submit" >
            </form>
        </div>


<table id="clientes">
    <tr>
       <th>Nome</th><!--titulo da tabela-->
       <th>E-mail</th>
       <th>Observacao</th>
       <th>Editar</th>
       <th>Excluir</th>
    </tr>



    <?php
        include 'conexao.php';

        echo "<a href";
        
        echo "<br><br><br>";
        $dados  = $db->query("SELECT * FROM clientes");
        $todos = $dados->fetchAll(PDO::FETCH_ASSOC);//Todos os registros retornados

        foreach($todos as $linha ){
            $idCliente = $linha['id'];
            $nomeCliente = $linha['nome'];
            $emailCliente = $linha['email'];
            $observacaoCliente = $linha['observacao'];



            /*td= dados da tabela*/
            echo"
                <tr>
                    <td>$nomeCliente</td>
                    <td>$emailCliente</td>
                    <td>$observacaoCliente</td>
                    <td> <a class= 'link-alteracao' href='clienteAlteracao.php?id=$idCliente'><i class='fa-solid fa-pencil'></i></a> </td>
                    <td> <a class= 'link-exclusao' href='delete.php?id=$idCliente'><i class='fa-solid fa-trash'></i></a> </td>
                </tr>
            ";
    
}

?>
</table>
</div>
<script src="./assets/js/script.js"></script>
<script src="https://kit.fontawesome.com/b1a26aa984.js" crossorigin="anonymous"></script>
</body>
</html>
    