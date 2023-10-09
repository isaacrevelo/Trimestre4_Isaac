<?php

class Computador{
    private string $fabricante;
    private string $capMemoria;
    private string $tipoMemoria;
    private string $tipoAlmacenamiento;
    private string $capAlmacenamiento;
    private string $sistemaOperativo;
    private string $suiteOficina;
    private string $procesador;
    private string $numPuertosUSB;

    public function __construct($fabricante,$capMemoria,$tipoMemoria,$tipoAlmacenamiento,$capAlmacenamiento,$sistemaOperativo,$suiteOficina,$procesador,$numPuertosUSB)
    {
        $this->fabricante=$fabricante;
        $this->capMemoria=$capMemoria;
        $this->tipoMemoria =$tipoMemoria;
        $this->tipoAlmacenamiento =$tipoAlmacenamiento;
        $this->capAlmacenamiento =$capAlmacenamiento;
        $this->sistemaOperativo =$sistemaOperativo;
        $this->suiteOficina =$suiteOficina;
        $this->procesador =$procesador;
        $this->numPuertosUSB =$numPuertosUSB;
    }

    public static function metodoEstatico(){
        echo "Soy un método estático. No necesito un objeto, me invocas desde la clase <br>";
    }
}