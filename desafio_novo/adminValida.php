<?php

$erroNome = $erroCargo = $erroEmail = $erroSenha = "";

// Função para limpar os dados de entrada
function limpaEntrada($dado) {
    $dado = trim($dado);   // Remove espaços extras
    $dado = stripslashes($dado); // Remove barras invertidas
    $dado = htmlspecialchars($dado); // Converte caracteres especiais
    return $dado;
}

function validaFormulario($nome, $cargo, $email, $senha) {

    global $erroNome, $erroCargo, $erroEmail, $erroSenha;

    // Validação do nome
    if (empty($nome)) {
        $erroNome = "O nome é obrigatório";
    } else {
        $nome = limpaEntrada($nome);
        if (strlen($nome) < 3) {
            $erroNome = "O campo precisa possuir no mínimo 3 caracteres";
        }
    }

    // Validação do cargo
    if (empty($cargo)) {
        $erroCargo = "O cargo é obrigatório";
    } else {
        $cargo = limpaEntrada($cargo);
    }

    // Validação do email
    if (empty($email)) {
        $erroEmail = "O e-mail é obrigatório";
    } else {
        $email = limpaEntrada($email);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $erroEmail = "Formato de e-mail inválido";
        }
    }

    // Validação da senha
    if (empty($senha)) {
        $erroSenha = "A senha é obrigatória";
    } else {
        if (strlen($senha) < 6) {
            $erroSenha = "A senha deve ter no mínimo 6 caracteres";
        }
    }

    // Se tudo estiver correto, processa os dados
    if (empty($erroNome) && empty($erroCargo) && empty($erroEmail) && empty($erroSenha)) {
        echo "Dados validados com sucesso!";
        return true;
    } else {
        
        $_SESSION['erroNome'] = $erroNome;
        $_SESSION['erroCargo'] = $erroCargo;
        $_SESSION['erroEmail'] = $erroEmail;
        $_SESSION['erroSenha'] = $erroSenha;

        // Valores dos campos
        $_SESSION['valorNome'] = $nome;
        $_SESSION['valorCargo'] = $cargo;
        $_SESSION['valorEmail'] = $email;
        $_SESSION['valorSenha'] = $senha;

        return false;
    } 
}
?>

