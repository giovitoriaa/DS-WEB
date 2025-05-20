<?php

class geladeira {
    public $tamanho;
    public $cor;
    public $marca;
    public $formato;
    public $capacidade;

    public function ajustarTemperatura(){
        return "a temperatura é:" .$this -> temperatura;
    }
    public function fechar(){

    }
    public function abrir(){

    }
   
}

/////////////////////


class cadeira {
    public $tamanho;
    public $cor;
    public $marca;
    public $material;
    public $formato;

    public function desmontar(){

    }
    public function sentar(){

    }
    public function mover(){

    }
   
}

/////////////////////


class televisão {
    public $resolução;
    public $preço;
    public $marca;
    public $tipoDeTela;
    public $tamanho;

    public function ligar(){

    }
    public function desligar(){

    }
    public function trocarCanal(){

    }
   
}

/////////////////////


class relogio {
    public $tipo;
    public $preço;
    public $marca;
    public $material;
    public $resistencia;

    public function ligar(){

    }
    public function desligar(){

    }
    public function ajustaHora(){

    }
   
}

/////////////////////


class microOndas {
    public $cor;
    public $preço;
    public $marca;
    public $capacidade;
    public $potencia;

    public function ligar(){

    }
    public function desligar(){

    }
    public function aquecer(){

    }
   
}

/////////////////////

class contabancaria {
    public $saldo;
    public $numerodaConta;
    public $titular;

    public function exibirsaldo(){
        return " o saldo é R$".$this -> saldo;
    }
    public function depositar($deposito){
        $this -> saldo +=  $deposito;     
        return " esse é o novo deposito" .$this -> saldo;

    }
    public function sacar($saque){
        $this -> saldo +=  $saque;     
        return " esse é o novo saque " .$this -> saldo;

    }

}

$contagiovanna = new contabancaria();
$contagiovanna -> saldo = 30000;
$contagiovanna -> numerodaConta = 1762460;
$contagiovanna -> titular = " giovanna vitoria";

echo $contagiovanna -> exibirsaldo();
echo " titular da conta:".$contagiovanna -> titular;
echo "<br>";
echo $contagiovanna -> sacar (20);

$contaAna = new contabancaria();
$contaAna -> saldo =20.0;
$contaAna -> numerodaConta = 123456789;
$contaAna -> titular = "Ana";

$contaMarcia = new contabancaria();
$contaMarcia -> saldo = 100.000;
$contaMarcia -> numerodaConta = 678405694;
$contaMarcia -> titular = "Marcia";


?>
