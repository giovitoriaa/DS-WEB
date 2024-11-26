<?php


$frutas = array('fruta' => "banana", "maça", "pessego", "morango", "pera");

$frutasA = array('fruta' => "banana", "maça", "pessego", "morango", "pera", "amora");



//lista
echo 'lista';
echo '<br>';
foreach($frutas as $estadoLinha){
    echo 'Fruta: '. $estadoLinha.'<br>';
}
echo '<br><br><br><br>';



//atualizada
echo 'lista atualizada';
echo '<br>';
foreach($frutasA as $estadoLinha){
    echo 'Fruta: '. $estadoLinha.'<br>';
}
echo '<br><br><br><br>';



//ordem
echo 'lista em ordem alfabetica';
echo '<br>';
sort($frutasA);
foreach($frutasA as $estadoLinha){
    echo 'Fruta: '. $estadoLinha.'<br>';
}
echo '<br><br><br><br>';




// Criando o array associativo para armazenar informações do produto
echo 'MAIS INFORMAÇÕES:';
echo '<br>';

  $banana = array(
    "<br> Nome: " => " banana",
    "<br> Preco: " => 17.89,
    "<br> Estoque: " => 45);


    foreach ($banana as $chave => $valor) {
        echo   ($chave) . $valor . "</li>";
    }

    echo '<br><br>';

    $maça = array(
        "<br> Nome: " => " maça",
        "<br> Preco: " => 12.89,
        "<br> Estoque: " => 69);

        foreach ($maça as $chave => $valor) {
            echo   ($chave) . $valor . "</li>";
        }
        echo '<br><br><br>';




//Atualize o preço do produto para um novo valor.
echo 'ATUALIZAÇÕES MAÇA :';
echo '<br>';

$produto["Preco:"] = 8.99;

foreach ($produto as $chave => $valor) {
    echo   ($chave) . $valor . "</li>";
}
echo '<br><br><br><br>';




//Calcule a venda de 5 unidades do produto do array.

echo 'Valor total de 5 unidades da maça com seu valor atualizado';
$unidades = 5;
$valor_total = $produto["Preco:"] * $unidades;

echo "<br>Valor em R$: " . $valor_total . "<br>";
echo '<br><br><br><br>';




//Juntar dois arrays

$nomeproduto = ["pessego", "melancia", "manga"];
$precoproduto = [5.99, 8.00, 3.00];

$produtos_com_preco = array_combine($nomeproduto, $precoproduto);  // Junta os dois arrays em um associativo

echo "<br>Novos Array : <br>";
print_r($produtos_com_preco);

echo '<br><br><br><br>';



//Verifique se um elemento existe

$cores = ["verde", "amarelo", "azul", "branco"];
    foreach($cores as $estadoLinha){
        echo 'cor: '. $estadoLinha.'<br>';}
echo '<br>';
echo 'a cor verde ';
$variavelcor = 'verde';
if (is_array($cores)){
    echo "esta presente  <br><br><br><br>";
}else{
    echo "Não esta presente  <br><br><br><br>";}




// Soma e média de valores
echo 'SOMA E MEDIA DOS VALORES: <br><br>';
$numeros = [1,2,3,4,5];
$soma = array_sum($numeros);
$media = $soma / count($numeros);

echo "Soma dos números: " . $soma, '<br>'  ;
echo "Média dos números:" . $media ;

echo '<br><br><br><br><br>';


//ATIVIDADE2:
//Atividade - Uso de Array Bidimensional e Multidimensional
    echo "Uso de Array Bidimensional e Multidimensional", '<br><br>';
    echo "CATEGORIAS", '<br><br>';
    $categorias = array(
        array("nome" => "lapis", "preco" => 1.50, "estoque" => 150), 
        array("nome" => "borracha", "preco" => 1.0 , "estoque" => 250),
        array("nome" => "caneta", "preco" => 2.0, "estoque" => 200),
        );

        foreach ($categorias as $prod){
            $total = $prod['preco'] * $prod['estoque'];
            echo 'produto: ' . $prod ['nome'] . ' - Total: ' . $total . '<br><br><br>';
        }

        echo '<br><br><br><br><br>';



///NOTAS
    echo 'NOTAS <BR>';
    $alunos = array(
            array('nome' => 'Claudio', 'matematica' => 8, 'portugues' => 7),
            array('nome' => 'Giovanna', 'matematica' => 6, 'portugues' => 9),
            array('nome' => 'Marina', 'matematica' => 7, 'portugues' => 8)
            );
        
            foreach ($alunos as $aluno){
                $total = ($aluno ['matematica'] + $aluno ['portugues']) / 2 ;
                echo 'Nome do aluno: ' . $aluno ['nome'] . ' - Media do aluno: ' . $total . '<br><br><br>';
            }

    ?>
