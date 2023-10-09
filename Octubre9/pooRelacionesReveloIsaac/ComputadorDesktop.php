<?php

require_once('Computador.php');

class ComputadorDesktop extends Computador{
    private string $ups;

    public function __construct($fabricante,$capMemoria,$tipoMemoria,$tipoAlmacenamiento,$capAlmacenamiento,$sistemaOperativo,$suiteOficina,$procesador,$numPuertosUSB,$ups)
    {

        parent::__construct($fabricante,$capMemoria,$tipoMemoria,$tipoAlmacenamiento,$capAlmacenamiento,$sistemaOperativo,$suiteOficina,$procesador,$numPuertosUSB);

        $this->ups=$ups;
    }

    public function get_ups(){
        return $this->ups;
    }
    public function set_ups($ups){
        $this->ups = $ups;
    }
}