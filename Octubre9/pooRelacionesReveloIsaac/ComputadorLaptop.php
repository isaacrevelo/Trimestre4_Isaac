<?php

require_once('Computador.php');

class ComputadorLaptop extends Computador{
    private bool $tactil;
    private string $potBateria;

    public function __construct($fabricante,$capMemoria,$tipoMemoria,$tipoAlmacenamiento,$capAlmacenamiento,$sistemaOperativo,$suiteOficina,$procesador,$numPuertosUSB,$tactil,$potBateria)
    {

        parent::__construct($fabricante,$capMemoria,$tipoMemoria,$tipoAlmacenamiento,$capAlmacenamiento,$sistemaOperativo,$suiteOficina,$procesador,$numPuertosUSB);

        $this->tactil=$tactil;
        $this->potBateria=$potBateria;
    }

    public function get_tactil(){
        return $this->tactil;
    }
    public function set_tactil($tactil){
        $this->tactil = $tactil;
    }
    public function get_potBateria(){
        return $this->potBateria;
    }
    public function set_potBateria($potBateria){
        $this->potBateria = $potBateria;
    }
}