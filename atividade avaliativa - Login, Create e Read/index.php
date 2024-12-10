<?php
session_start();



if(isset($_POST['user'])){
    //Verifica se o login esta correto
    include_once ('connection.php');
    $login = $_POST['user'];
    $senha = $_POST['senha'];

    $sql = "SELECT * FROM usuario WHERE user = '$login' and senha = '$senha'";
    $resultado = mysqli_query($conexao, $sql);
    //Verificar se ha registro
    if (mysqli_num_rows($resultado) > 0){
        //Converte em Array Associativo
        $linha = mysqli_fetch_assoc($resultado);
        //Grava os dados na sessão
        $_SESSION['login'] = $linha['user'];
        $_SESSION['senha'] = $linha['senha'];
    }
    else {
        $_SESSION ['erro'] = "Login ou senha invalida";
    }
}
if(isset($_SESSION['login']) and isset($_SESSION['senha'])){
    header('Location: dashboard.php');
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Atividade Final:</title>
    <link rel="stylesheet" href="estilo.css" type="text/css">
</head>
<body>
   
    <?php if (isset($erro)) echo "<p>$erro</p>"; ?>
    <form method="post" action="index.php">
        <h1>Login</h1>
        <label for="user">Usuário:</label>
        <input type="text" name="user" id="user" required>
        <br>
        <label for="password">Senha:</label>
        <input type="password" name="senha" id="password" required>
        <br>
        <button type="submit">Entrar</button>
    </form>
</body>
</html>