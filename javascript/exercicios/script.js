//exercicio 1 
alert("Bom dia, Mundo!!!")

//exercicio 2
var nome = prompt("Digite o nome");
var sobrenome = prompt ("Digite o sobrenome");
alert(nome + sobrenome);

//exercicio 3 

var operacaocodigo = Number.parseInt(prompt("Digite o código da operação (1 = SOMA, 2 = SUBTRAÇÃO, 3 = MULTIPLICAÇÃO, 4 = DIVISÃO)"));

var numero1 = Number.parseInt(prompt("Digite o primeiro número"));
var numero2 = Number.parseInt(prompt("Digite o segundo número"));

if (operacaocodigo == 1)
    alert(numero1 + numero2);
if (operacaocodigo == 2)
    alert(numero1 - numero2);
if (operacaocodigo == 3)
    alert(numero1 * numero2);
if (operacaocodigo == 4)
    alert(numero1 / numero2);

//exercicio 4 
var cubo = Number.parseInt(prompt("escolha um numero para descobrir o resultado ao cubo"));
if (operacaocodigo == 1)
    alert(cubo * cubo * cubo);

//exercicio 5 
var temp = Number.parseInt(prompt("escolha um numero em Fahrenheit para converter em Celsius"));
if (operacaocodigo == 1)
    alert((temp - 32) * (5/9));

//exercicio 6
var C = parseFloat(prompt("Capital inicial (R$):"));
var i = parseFloat(prompt("Taxa de juros mensal (%):")) / 100;
var t = parseInt(prompt("Tempo do investimento (meses):"), 10);

var M = C * (1 + i) ** t;

alert("Montante acumulado: R$ " + M.toFixed(2));