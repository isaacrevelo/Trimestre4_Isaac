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
    private int $numPuertosUSB;
    private static $contador=0;

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


    public function get_fabricante(){
        return $this->fabricante;
    }
    public function set_fabricante($fabricante){
        $this->$fabricante = $fabricante;
    }

    public function get_capMemoria(){
        return $this->capMemoria;
    }
    public function set_capMemoria($capMemoria){
        $this->$capMemoria = $capMemoria;
    }

    public function get_tipoMemoria(){
        return $this->tipoMemoria;
    }
    public function set_tipoMemoria($tipoMemoria){
        $this->$tipoMemoria = $tipoMemoria;
    }

    public function get_tipoAlmacenamiento(){
        return $this->tipoAlmacenamiento;
    }
    public function set_tipoAlmacenamiento($tipoAlmacenamiento){
        $this->$tipoAlmacenamiento = $tipoAlmacenamiento;
    }

    public function get_capAlmacenamiento(){
        return $this->capAlmacenamiento;
    }
    public function set_capAlmacenamiento($capAlmacenamiento){
        $this->$capAlmacenamiento = $capAlmacenamiento;
    }

    public function get_sistemaOperativo(){
        return $this->sistemaOperativo;
    }
    public function set_sistemaOperativo($sistemaOperativo){
        $this->$sistemaOperativo = $sistemaOperativo;
    }

    public function get_suiteOficina(){
        return $this->suiteOficina;
    }
    public function set_suiteOficina($suiteOficina){
        $this->$suiteOficina = $suiteOficina;
    }

    public function get_procesador(){
        return $this->procesador;
    }
    public function set_procesador($procesador){
        $this->$procesador = $procesador;
    }

    public function get_numPuertosUSB(){
        return $this->numPuertosUSB;
    }
    public function set_numPuertosUSB($numPuertosUSB){
        $this->$numPuertosUSB = $numPuertosUSB;
    }

    public static function fecha_hora_estatico(){
        echo 'Fecha y Hora actual: '.$fecha_actual=date("d m Y H:i:s").'<br>';
    }

    public static function contar() {
        self::$contador += 1;
        echo "Conteo: " . self::$contador.'<br>';
    }
}