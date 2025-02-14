function numero() {
    var numero = document.getElementById("numero").value;
    var resultado = document.getElementById("resultado");

    numero=Number.parseInt(numero);

    if (numero > 18 || numero === 18){
    resultado.innerHTML="usuario maior de idade"
    }
    else{
        resultado.innerHTML="usuario menor de idade"
    } 

}