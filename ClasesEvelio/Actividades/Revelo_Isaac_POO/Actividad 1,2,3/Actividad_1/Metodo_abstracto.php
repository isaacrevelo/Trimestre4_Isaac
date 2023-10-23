<?php
//Un método abstracto es un método en una clase abstracta que no tiene una implementación.
//Las clases que heredan de la clase abstracta deben proporcionar una implementación para los métodos abstractos.
abstract class Animal {
    abstract public function hacerSonido();
}

class Perro extends Animal {
    public function hacerSonido() {
        echo "Guau guau <br>";
    }
}

class Gato extends Animal {
    public function hacerSonido() {
        echo "Meeeooooowww <br>";
    }
}

$perro = new Perro();
$perro->hacerSonido();
$gato = new Gato();
$gato->hacerSonido();