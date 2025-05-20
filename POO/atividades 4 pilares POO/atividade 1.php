<?php

class Pessoa {
    public $nome = "Joao";
    protected $idade = 40;
}


class Funcionario extends Pessoa {
    protected $salario;

    public function __construct($salario) {
        $this->salario = $salario;
    }

    public function calcularBonus(): float {
        return 0;
    }
}



class Gerente extends Funcionario {
    public function __construct() {
        parent::__construct(12000);
    }

    public function calcularBonus(): float {
        return $this->salario * 0.2;
    }
}

class Desenvolvedor extends Funcionario {
    public function __construct() {
        parent::__construct(8000);
    }

    public function calcularBonus(): float {
        return $this->salario * 0.1;
    }
}


$gerente = new Gerente();
$desenvolvedor = new Desenvolvedor();

echo "Bônus do Gerente: R$ " . $gerente->calcularBonus() . "\n";
echo "Bônus do Desenvolvedor: R$ " . $desenvolvedor->calcularBonus() . "\n";

?>

