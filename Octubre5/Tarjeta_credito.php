<?php
//De las clases que se asignen crear clases en PHP con 3 atributos, metodos SET y GET y una funcionalidad llamada devolver_fecha_hora
//Crear 5 objetos de cada una e imprimir los datos en lineas separadas
//Un archivo por cada clase, ejemplo: Cliente.php

//cuenta de ahorros y tarjeta de credito
//Tarjeta de credito: Num_tarjeta, Nombre_entidad_bancaria, Fecha_caducidad

class TarjetaCredito{
    public int $num_tarjeta;
    public string $nombre_entidad_bancaria;
    public string $fecha_caducidad;

    public function __construct($num_tarjeta, $nombre_entidad_bancaria, $fecha_caducidad)
    {
        $this->num_tarjeta= $num_tarjeta;
        $this->nombre_entidad_bancaria= $nombre_entidad_bancaria;
        $this->fecha_caducidad= $fecha_caducidad;
    }

    public function get_num_tarjeta()
    {
        return $this->num_tarjeta;
    }

    public function get_nombre_entidad_bancaria()
    {
        return $this->nombre_entidad_bancaria;
    }

    public function get_fecha_caducidad()
    {
        return $this->fecha_caducidad;
    }

    public function set_num_tarjeta($num_tarjeta)
    {
        $this->num_tarjeta= $num_tarjeta;
    }

    public function set_nombre_entidad_bancaria($nombre_entidad_bancaria)
    {
        $this->nombre_entidad_bancaria= $nombre_entidad_bancaria;
    }

    public function set_fecha_caducidad($fecha_caducidad)
    {
        $this->fecha_caducidad= $fecha_caducidad;
    }
}

function get_fecha_hora()
    {
        $fecha_actual=date("d m Y H:i:s");
        return $fecha_actual;
}

$tarjeta1 = new TarjetaCredito(49258356890, 'BANCO BBVA', '2025-05-30');
$tarjeta2 = new TarjetaCredito(38247632876, 'BANCO DE BOGOTA', '2030-02-20');
$tarjeta3 = new TarjetaCredito(72343545445, 'BANCOLOMBIA', '2027-07-12');
$tarjeta4 = new TarjetaCredito(43643643876, 'BANCO DE OCCIDENTE', '2028-08-26');
$tarjeta5 = new TarjetaCredito(54662368343, 'BANCO AVILLAS', '2024-12-11');


echo 'Numero de tarjeta: '.$tarjeta1->get_num_tarjeta().' ';
echo 'Nombre de entidad bancaria: '.$tarjeta1->get_nombre_entidad_bancaria().' ';
echo 'Fecha de caducidad de la tarjeta: '.$tarjeta1->get_fecha_caducidad().' ';

echo '<br>'.'Numero de tarjeta: '.$tarjeta2->get_num_tarjeta().' ';
echo 'Nombre de entidad bancaria: '.$tarjeta2->get_nombre_entidad_bancaria().' ';
echo 'Fecha de caducidad de la tarjeta: '.$tarjeta2->get_fecha_caducidad().' ';

echo '<br>'.'Numero de tarjeta: '.$tarjeta3->get_num_tarjeta().' ';
echo 'Nombre de entidad bancaria: '.$tarjeta3->get_nombre_entidad_bancaria().' ';
echo 'Fecha de caducidad de la tarjeta: '.$tarjeta3->get_fecha_caducidad().' ';

echo '<br>'.'Numero de tarjeta: '.$tarjeta4->get_num_tarjeta().' ';
echo 'Nombre de entidad bancaria: '.$tarjeta4->get_nombre_entidad_bancaria().' ';
echo 'Fecha de caducidad de la tarjeta: '.$tarjeta4->get_fecha_caducidad().' ';

echo '<br>'.'Numero de tarjeta: '.$tarjeta5->get_num_tarjeta().' ';
echo 'Nombre de entidad bancaria: '.$tarjeta5->get_nombre_entidad_bancaria().' ';
echo 'Fecha de caducidad de la tarjeta: '.$tarjeta5->get_fecha_caducidad().' ';


$tarjeta1->set_nombre_entidad_bancaria('DAVIVIENDA');
echo '<br>'.'Nuevo nombre de entidad bancaria: '.$tarjeta1->get_nombre_entidad_bancaria().' ';

