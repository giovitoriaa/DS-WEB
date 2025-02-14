function alertaDeClique(){
    var n1 = document.getElementById("n1").value;
    var n2 = document.getElementById("n2").value;

    n1=Number.parseInt(n1);
    n2=Number.parseInt(n2);
    var resultado = document.getElementById("resultado");
    
    resultado.innerHTML = (n1 * n2 / 100); 
    
    }