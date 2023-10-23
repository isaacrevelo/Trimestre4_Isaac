<?php
//Una interfaz es una declaración de métodos que las clases deben implementar.
//No puede contener implementaciones de métodos, solo define el nombre de los metodos que deben estar en las clases.
interface Forma {
    public function calcularArea();
}

class Circulo implements Forma {
    private $radio;

    public function __construct($radio) {
        $this->radio = $radio;
    }

    public function calcularArea() {
        return pi() * pow($this->radio, 2);
    }
}

$circulo = new Circulo(3);
echo "Área del círculo: " . $circulo->calcularArea();