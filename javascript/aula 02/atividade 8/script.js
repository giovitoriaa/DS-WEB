function botao(){
    var usuario = document.getElementById ("usuario").value
    var senha = document.getElementById ("senha").value
    var resultado = document.getElementById ("resultado")

    senha=Number.parseInt (senha)

    if (usuario === "admin" && senha === 12345){
        resultado.innerHTML = "seja bem vindo!"
    }else{
        resultado.innerHTML = "erro"
    }
}