<?php
trait mensaje1 {
public function mensaje() {
    echo "Hola k ase?";
  }
}

class Bienvenida {
  use mensaje1;
}

$objeto1 = new Bienvenida();
$objeto1->mensaje();
?>