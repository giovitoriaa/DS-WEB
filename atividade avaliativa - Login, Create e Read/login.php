<!DOCTYPE html> 
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade Final</title>
    <link rel="stylesheet" href="estilo.css" type="text/css">
   
</head> 
<body>
    
    <div class="container">
        <div>
            
            <form action="insertion.php" method="POST">
                <h1>Formulario Cadastro:</h1>
                <label>Nome: </label>
                <input type="text" name="user">
                <br>
                <label>Email:</label>
                <input type="text" name="email">
                <br>
                <label>Senha:</label>
                <input type="text" name="senha">
                <br><br>
                <input type="submit">
                <a href="dashboard.php"> Voltar</a>
            </form>
            <br><br><br>
            
            
            <?php
                include_once('connection.php');
                echo '<br>';
                $sql = "SELECT * FROM usuario ORDER BY user ASC";
                $resultado = mysqli_query($conexao, $sql);
                
                // Verificar se há registros
                if (mysqli_num_rows($resultado) > 0) {
                    while ($linha = mysqli_fetch_assoc($resultado)) {
                        echo  " - Nome: " . $linha['user'] . "<br>";
                    }
                } else {
                    echo "Nenhum registro encontrado.";
                }
            ?>
        </div>
        <div>
            
        <div>
            
            <form action="insertion.php" method="POST">
                <h1>Produtos:</h1>
                <label>Nome:    </label>
                <input type="text" name="nome">
                <br>
                <label>Descrição:</label>
                <input type="text" name="descricao">
                <br>
                <label>Preço:</label>
                <input type="text" name="preco">
                <br><br>
                <input type="submit">
                <a href="dashboard.php"> Voltar</a>
            </form>
            <br><br><br>
            
            
            <?php
                include_once('connection.php');
                echo '<br>';
                $sql = "SELECT * FROM produtos ORDER BY nome ASC";
                $resultado = mysqli_query($conexao, $sql);
                
                
                // Verificar se há registros
                if (mysqli_num_rows($resultado) > 0) {
                    while ($linha = mysqli_fetch_assoc($resultado)) {
                        echo  " - Nome: " . $linha['nome'] . "<br>";
                    }
                } else {
                    echo "Nenhum registro encontrado.";
                }
            ?>
        </div>
    </div>
</body>
</html>