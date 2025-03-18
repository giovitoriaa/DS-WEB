<?php
// Inicializa as variáveis de erro
$erroNome = $erroCodigo = $erroEstoque = $erroPreco = ""; 

// Função para limpar os dados de entrada
function limpaEntrada($dado) {     
    $dado = trim($dado);  // Remove espaços extras
    $dado = stripslashes($dado); // Remove barras invertidas
    $dado = htmlspecialchars($dado); // Converte caracteres especiais
    return $dado; 
}

function validaProduto($nome, $codigo, $estoque, $preco) {
    // Validação do Nome
    if (empty($nome)) {
        $erroNome = "O nome é obrigatório";
    } else {
        $nome = limpaEntrada($nome);
        if (strlen($nome) < 3) {
            $erroNome = "O campo nome precisa possuir no mínimo 3 caracteres";
        }
    }

    // Validação do Código
    if (empty($codigo)) {
        $erroCodigo = "O código é obrigatório";
    } else {
        $codigo = limpaEntrada($codigo);
        if (!is_numeric($codigo)) {
            $erroCodigo = "O código precisa ser um número válido";
        }
    }

    // Validação do Estoque
    if (empty($estoque)) {
        $erroEstoque = "O estoque é obrigatório";
    } else {
        $estoque = limpaEntrada($estoque);
        if (!filter_var($estoque, FILTER_VALIDATE_INT) || $estoque < 0) {
            $erroEstoque = "O estoque precisa ser um número inteiro maior ou igual a 0";
        }
    }

    // Validação do Preço
    if (empty($preco)) {
        $erroPreco = "O preço é obrigatório";
    } else {
        $preco = limpaEntrada($preco);
        if (!filter_var($preco, FILTER_VALIDATE_FLOAT) || $preco <= 0) {
            $erroPreco = "O preço precisa ser um número positivo";
        }
    }

    // Se tudo estiver correto, processa os dados
    if (empty($erroNome) && empty($erroCodigo) && empty($erroEstoque) && empty($erroPreco)) {
        echo "Dados validados com sucesso!";
        return true;
    } else {
        session_start();
        $_SESSION['erroNome'] = $erroNome;
        $_SESSION['erroCodigo'] = $erroCodigo;
        $_SESSION['erroEstoque'] = $erroEstoque;
        $_SESSION['erroPreco'] = $erroPreco;
        return false;
    }
}
?>