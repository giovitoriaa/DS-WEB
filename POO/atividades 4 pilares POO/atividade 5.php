<?php

class Documento {
    private $numero;

    public function getNumero() {
        return $this->numero;
    }

    public function setNumero($numero) {
        $this->numero = $numero;
    }
}

class CPF extends Documento {
    public function validar() {
        $cpf = preg_replace('/[^0-9]/', '', $this->getNumero());

        if (strlen($cpf) != 11 || preg_match('/^(.)\1*$/', $cpf)) {
            return false;
        }


        for ($t = 9; $t < 11; $t++) {
            $soma = 0;
            for ($i = 0; $i < $t; $i++) {
                $soma += $cpf[$i] * (($t + 1) - $i);
            }
            $digito = ($soma * 10) % 11;
            if ($digito == 10) $digito = 0;

            if ($cpf[$t] != $digito) {
                return false;
            }
        }

        return true;
    }
}


$cpf = new CPF();
$cpf->setNumero("517.070.708-81");
echo "CPF " . $cpf->getNumero() . " é " . ($cpf->validar() ? "Válido" : "Inválido") . "\n";

?>