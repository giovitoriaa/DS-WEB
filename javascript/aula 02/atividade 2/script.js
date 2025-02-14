function alertaDeClique(){
    var numero = document.getElementById("numero").value;
    var resultado = document.getElementById("resultado");

if (numero % 2 === 0){
    resultado.innerHTML = "O numero" + numero + " e par. ";
} 
    else{
    resultado.innerHTML = "O numero" + numero + " e impar. ";
}

}