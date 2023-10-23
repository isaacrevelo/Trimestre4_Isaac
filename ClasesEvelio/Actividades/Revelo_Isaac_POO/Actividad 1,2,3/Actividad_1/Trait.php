<?php
//Un trait es una forma de reutilizar código en PHP.
//Un trait puede tener metodos y propidedades que se pueden usar en diferentes clases

trait Saludo {
    public function saludar() {
        echo "Hola, como estas?";
    }
}

class Persona {
    use Saludo;
}

$persona = new Persona();
$persona->saludar();