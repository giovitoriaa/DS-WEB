function botao(){
    var n1 = document.getElementById ("n1").value
    var n2 = document.getElementById ("n2").value
    var operacao = document.getElementById ("operacao").value
    var resultado = document.getElementById ("resultado")
    var resultadoo;
    n1=Number.parseInt (n1);
    n2=Number.parseInt (n2);

    if (operacao === "1"){
        resultadoo = n1 + n2;
    }
    else if (operacao === "2"){
        resultadoo = n1 - n2;
    }
    else if (operacao === "3"){
        resultadoo = n1 * n2;
    }
    else if (operacao === "4"){
        resultadoo = n1 / n2;
    }

    resultado.innerHTML = "resultado " + resultadoo
}