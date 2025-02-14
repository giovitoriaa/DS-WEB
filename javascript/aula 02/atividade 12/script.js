function alertaDeClique(){
    var n1 = document.getElementById("n1").value;
    var n2 = document.getElementById("n2").value;
    var n3 = document.getElementById("n3").value;
    var resultado = document.getElementById("resultado");

    if (n1 === n3 && n1 === n2){
        resultado.innerHTML = "O triângulo é equilátero"
    }
    if (n1 != n3 && n1 === n2){
    resultado.innerHTML = "o triângulo é isósceles"
    }
    if (n1 === n3 && n1 != n2){
        resultado.innerHTML = "o triângulo é isósceles"
    }
    if (n1 != n3 && n1 != n2){
        resultado.innerHTML = "o triângulo é escaleno"
    }

}