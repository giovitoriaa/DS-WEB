function numero(){
    var numero= document.getElementById ("numero").value
    var resultado= document.getElementById ("resultado");

    numero=Number.parseInt(numero);

    if (numero > 0){
        resultado.innerHTML = "numero positivo"
    }

    if (numero === 0){
        resultado.innerHTML = "numero igual a zero"
    }

    if (numero < 0){
        resultado.innerHTML = "numero negativo"
    }


   
}