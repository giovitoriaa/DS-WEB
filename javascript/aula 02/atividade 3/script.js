function alertaDeClique(){
var nome = document.getElementById("nome").value;
var resultado = document.getElementById("resultado");

resultado.innerHTML = "Texto em maiuscula: " + nome.toUpperCase();

}