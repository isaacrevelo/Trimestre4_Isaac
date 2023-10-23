<?php
//El encadenamiento de métodos permite llamar a varios métodos de un objeto de manera encadenada, haciendo que el codigo sea mas legible.

class Calculadora {
    private $valor;

    public function __construct($valor) {
        $this->valor = $valor;
    }

    public function sumar($num) {
        $this->valor += $num;
        return $this;
    }

    public function restar($num) {
        $this->valor -= $num;
        return $this;
    }

    public function obtenerResultado() {
        return $this->valor;
    }
}

$calculadora = new Calculadora(17);
$resultado = $calculadora->sumar(21)->restar(20)->obtenerResultado();
echo $resultado;