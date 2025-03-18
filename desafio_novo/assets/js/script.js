//Funcao para validação dos dados dos clientes

function validarDadosClientes(){


    if (formulario.nome.value.length < 3 || formulario.nome.value == ''){ //verificação

        formulario.nome.focus();
        document.getElementById('erro-nome').innerHTML = "Verifique se o nome possui mais de 2 caracteres.";
        document.getElementById('erro-email').innerHTML = "";
        document.getElementById('erro-observacao').innerHTML = "" ;
        return false;
    }
    
    if (formulario.email.value ==""|| //Verificação
        formulario.email.value.indexOf('@')==1 || 
        formulario.email.value.indexOf('.')==-1) {

        formulario.email.focus();
        document.getElementById('erro-nome').innerHTML = "";
        document.getElementById('erro-email').innerHTML = "Preencha o campo email corretamente!";
        document.getElementById('erro-observacao').innerHTML = "" ;
        return false;
    }

    if (formulario.observacao.value.length > 1000 ){

        formulario.observacao.focus();
        document.getElementById('erro-nome').innerHTML = "";
        document.getElementById('erro-email').innerHTML = "";
        document.getElementById('erro-observacao').innerHTML = "Exedeu a capacidade de 1000 caracteres <br> No momento possui:" +formulario.observacao.value.length;
        
        return false;
    }
}



