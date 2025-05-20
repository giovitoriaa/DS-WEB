<?php

abstract class Produto {
    public $nome = "Calça";
    public $preco = 15.00;
    protected $estoque = 4;

    public function getPrecoFinal() {
        $precoFinal = $this->preco;


        if ($this->estoque < 5) {
            $precoFinal *= 0.90;
        }

        return $precoFinal;
    }
}

class Eletronico extends Produto {
    public function getPrecoFinal() {
        $precoFinal = parent::getPrecoFinal() * 0.90;
        return $precoFinal;
    }
}

class Roupa extends Produto {
    public function getPrecoFinal() {
        $precoFinal = parent::getPrecoFinal() * 0.80;
        return $precoFinal;
    }
}

echo "Eletrônico: R$ " . (new Eletronico())->getPrecoFinal() . "\n";
echo "Roupa: R$ " . (new Roupa())->getPrecoFinal() . "\n";
?>