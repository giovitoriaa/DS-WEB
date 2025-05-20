function botao(){
    var n1 = document.getElementById ("n1").value
    var n2 = document.getElementById ("n2").value
    var n3 = document.getElementById ("n3").value
    var resultado = document.getElementById ("resultado")
 
    n1=Number.parseInt (n1);
    n2=Number.parseInt (n2);
    n3=Number.parseInt (n3);

    if (n1 > n2 && n1 > n3){
        resultado.innerHTML = "o maior numero e " + n1;
    }
    if (n2 > n1 && n2 > n3){
        resultado.innerHTML = "o maior numero e " + n2;
    }
    if (n3 > n2 && n3 > n1){
        resultado.innerHTML = "o maior numero e " + n3;
    }
   
}