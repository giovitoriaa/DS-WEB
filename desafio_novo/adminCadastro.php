<?php
    session_start();
    
    ?>
    
    
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="shortcut icon" type="imagex/png"href="./assets/img/ico.svg">
    <link rel="stylesheet" href="./assets/style/style.css">
</head>
<body>

    <div class="container">
        <div class="formulario">
            <form action="adminCadastro.php" method="POST" name="formulario">
                <h1>Cadastro:</h1>
                <label for="nome">Nome: </label>
        <input type="text" name="nome" id="nome" value="<?= isset($_SESSION['valorNome'])? $_SESSION['valorNome']: ""; ?>">
        <p class="erro-input" id="erro-nome"><?= isset($_SESSION['erroNome'])? $_SESSION['erroNome']: ""; ?></p>
        <br>
        <label for="nome">Cargo: </label>
        <input type="text" name="cargo" id="cargo" value="<?= isset($_SESSION['valorCargo'])? $_SESSION['valorCargo']: ""; ?>">
        <p class="erro-input" id="erro-cargo"><?= isset($_SESSION['erroCargo'])? $_SESSION['erroCargo']: ""; ?></p>
        <br>
        <label for="nome">Email: </label>
        <input type="email" name="email" id="email" value="<?= isset($_SESSION['valorEmail'])? $_SESSION['valorEmail']: ""; ?>">
        <p class="erro-input" id="erro-email"><?= isset($_SESSION['erroEmail'])? $_SESSION['erroEmail']: ""; ?></p>
        <br>
        <label for="nome">Senha: </label>
        <input type="password" name="senha" id="senha" value="<?= isset($_SESSION['valorSenha'])? $_SESSION['valorSenha']: ""; ?>">
        <p class="erro-input" id="erro-senha"><?= isset($_SESSION['erroSenha'])? $_SESSION['erroSenha']: ""; ?></p>
        <br>     
                <input type="submit" value="Cadastrar">
            </form>
        </div>
    </div>


<?php
        include 'conexao.php';
        
        unset($_SESSION['erroNome']);
        unset($_SESSION['erroCargo']);
        unset($_SESSION['erroEmail']);
        unset($_SESSION['erroSenha']);

        // Valores dos campos
        unset($_SESSION['valorNome']);
        unset($_SESSION['valorCargo']);
        unset($_SESSION['valorEmail']);
        unset($_SESSION['valorSenha']);
if ($_SERVER['REQUEST_METHOD'] == 'POST') {


    $nome = $_POST['nome'];
    $cargo = $_POST['cargo'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];


    include "adminValida.php";
    if (validaFormulario($nome, $cargo, $email, $senha)) {

            $statement = $db->prepare("INSERT INTO administrador (nome, cargo, email, senha) VALUES (:nome, :cargo, :email, :senha)");
            $statement->bindParam(':nome', $nome);
            $statement->bindParam(':cargo', $cargo);
            $statement->bindParam(':email', $email);
            $statement->bindParam(':senha', $senha);
            $statement->execute();

            header("Location: login.php");
        }}
?>


    <script src="./assets/js/script.js"></script>
    <script src="https://kit.fontawesome.com/b1a26aa984.js" crossorigin="anonymous"></script>
</body>
</html>