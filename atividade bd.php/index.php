<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Produtos e Clientes</title>

    <h1>Cadastro de Produtos e Clientes</h1>
    <div class="container">
        <div class="form">
            <h2>Cadastro de Produtos</h2>
            <form action="insertionProduto.php" method="post">
                <label for="nome_produto">Nome do Produto:</label>
                <input type="text" id="nome_produto" name="nome_produto" required>


                <label for="preco_produto">Preço do Produto:</label>
                <input type="number" id="preco_produto" name="preco_produto" required>

                <label for="estoque_produto">Estoque do Produto:</label>
                <input type="number" id="estoque_produto" name="estoque_produto" required>


                <button type="submit">Cadastrar Produto</button>
            </form>
        </div>
        <?php
    
    include_once('conexao.php');
    

$sql = "SELECT * FROM produto";
$resultado = mysqli_query($conexao, $sql);

// Verificar se há registros
if (mysqli_num_rows($resultado) > 0) {
    while ($linha = mysqli_fetch_assoc($resultado)) {
    echo "ID: " . $linha['id'] . " - Nome: " . $linha['nome'] . "<br>";
    }
} else {
echo "Nenhum registro encontrado.";
}


?>
        <div class="form">
            <h2>Cadastro de Clientes</h2>
            <form action="insertionCliente.php" method="post">
                <label for="nome_cliente">Nome do Cliente:</label>
                <input type="text" id="nome_cliente" name="nome_cliente" required>
                
                <label for="email_cliente">E-mail:</label>
                <input type="email" id="email_cliente" name="email_cliente" required>

                <button type="submit">Cadastrar Cliente</button>
            </form>
        </div>
        <?php
    
    include_once('conexao.php');
    

$sql = "SELECT * FROM cliente";
$resultado = mysqli_query($conexao, $sql);

// Verificar se há registros
if (mysqli_num_rows($resultado) > 0) {
    while ($linha = mysqli_fetch_assoc($resultado)) {
    echo "ID: " . $linha['id'] . " - Nome: " . $linha['nome'] . "<br>";
    }
} else {
echo "Nenhum registro encontrado.";
}


?>
        <style>

        body {
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            background: rgb(167, 246, 220);
        }
        h1 {
            margin-top: 20px;
            color: rgb(167, 246, 220);
        }
        .container {
            display: flex;
	        justify-content: space-between;
            margin-top: 20px;
            width: 90%;
            max-width: 1200px;
        }
        .form {
            background:  rgb(142, 255, 155);;
            padding: 20px;
            border-radius: 8px;
            width: 45%;
        }
        .form h2 {
            margin-bottom: 15px;
        }
        .form label {
            display: block;
            margin: 10px 0 5px;
        }
        .form input {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }
        .form button {
            width: 100%;
            padding: 10px;
            background: rgb(167, 246, 220);
            color: black;
            border: none;
            border-radius: 4px;
        }
        .form button:hover {
            background: white;
        }
        
    </style>
</body>
</html>