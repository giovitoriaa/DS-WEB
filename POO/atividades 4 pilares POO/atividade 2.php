<?php


class Passaro extends Animal {
    public function fazerSom() {
        return "Canta";
    }

    public function mover() {
        return "Voa e " . parent::mover();
    }
}


abstract class Animal {
    public function fazerSom() {}

    public function mover() {
        return "Se movem";
    }
}



class Gato extends Animal {
    public function fazerSom() {
        return "Mia";
    }
}

class Cachorro extends Animal {
    public function fazerSom() {
        return "Late";
    }
}


$cachorro = new Cachorro();
$gato = new Gato();
$passaro = new Passaro();

echo "Cachorro: " . $cachorro->fazerSom() . "\n";
echo "Gato: " . $gato->fazerSom() . "\n";
echo "Passaro: " . $passaro->fazerSom() . "\n";

echo "Todos os animais: " . $cachorro->mover() . "\n";
?>
