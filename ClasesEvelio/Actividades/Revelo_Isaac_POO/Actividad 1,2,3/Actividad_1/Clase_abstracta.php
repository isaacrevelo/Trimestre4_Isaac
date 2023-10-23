<?php
//Una clase abstracta es una clase que no se puede instanciar por sí misma y se utiliza como una base para otras clases.
//Las clases que heredan de una clase abstracta deben implementar todos los métodos abstractos de la clase base.

abstract class Figura {
    abstract public function calcularArea();
}

class Cuadrado extends Figura {
    public $lado;

    public function __construct($lado) {
        $this->lado = $lado;
    }

    public function calcularArea() {
        return $this->lado * $this->lado;
    }
}

$cuadrado = new Cuadrado(5);
echo "Área del cuadrado: " . $cuadrado->calcularArea();