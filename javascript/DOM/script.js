
var p1 = window.document.getElementsByTagName('p')[2]; 
document.getElementById("quarto-teste").innerHTML = p1.innerText;

document.getElementById("teste").innerHTML = "Hello World"; 


var classes = document.getElementsByClassName("exemplo");
classes[0].innerHTML = "Hello World"; 


document.querySelector("p#paragrafo").style.backgroundColor = "red";


var paragrafo = document.querySelector("p");
paragrafo.style.backgroundColor = "red";
paragrafo.style.color = "white";

function alertaDeClique(){
    alert("você clicou no botão");
}


function calcular(){
    var n1 = document.getElementById("n1").value;
    var n2 = document.getElementById("n2").value;

    console.log(typeof n1);
    var n1 = Number.parseInt(n1);
    var n2 = Number.parseInt(n2);
    console.log(typeof n1);

    var resultado = n1 + n2;

    document.getElementById("resultado").innerHTML = "resultado:"+resultado;
}
