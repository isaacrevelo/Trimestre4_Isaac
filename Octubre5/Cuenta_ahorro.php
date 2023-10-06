<?php

//De las clases que se asignen crear clases en PHP con 3 atributos, metodos SET y GET y una funcionalidad llamada devolver_fecha_hora
//Crear 5 objetos de cada una e imprimir los datos en lineas separadas
//Un archivo por cada clase, ejemplo: Cliente.php

//cuenta de ahorros y tarjeta de credito
//Cuenta de ahorro: Numero de Cuenta, Saldo, Nombre portador

class CuentaAhorro{
    public string $nombre_portador;
    public int $numero_cuenta;
    public float $saldo;

    public function __construct($nombre_portador, $numero_cuenta, $saldo)
    {
        $this->nombre_portador= $nombre_portador;
        $this->numero_cuenta= $numero_cuenta;
        $this->saldo= $saldo;
    }

    public function get_nombre_portador()
    {
        return $this->nombre_portador;
    }

    public function get_numero_cuenta()
    {
        return $this->numero_cuenta;
    }

    public function get_saldo()
    {
        return $this->saldo;
    }

    public function set_nombre_portador($nombre_portador)
    {
        $this->nombre_portador= $nombre_portador;
    }

    public function set_numero_cuenta($numero_cuenta)
    {
        $this->numero_cuenta= $numero_cuenta;
    }

    public function set_saldo($saldo)
    {
        $this->saldo= $saldo;
    }
}

function get_fecha_hora()
    {
        $fecha_actual=date("d m Y H:i:s");
        return $fecha_actual;
}

$cuenta1 = new CuentaAhorro('ISAAC', 6423862843, 250000.00);
$cuenta2 = new CuentaAhorro('DANIELA', 8275927932, 200000.00);
$cuenta3 = new CuentaAhorro('SANTIAGO', 876462367, 150000.00);
$cuenta4 = new CuentaAhorro('JONH', 789349322, 450000.00);
$cuenta5 = new CuentaAhorro('KAREN', 374686348, 255000.00);

echo 'Nombre del portador: '.$cuenta1->get_nombre_portador().' ';
echo 'Numero de cuenta: '.$cuenta1->get_numero_cuenta().' ';
echo 'Saldo: '.$cuenta1->get_saldo().' ';

echo '<br>'.'Nombre del portador: '.$cuenta2->get_nombre_portador().' ';
echo 'Numero de cuenta: '.$cuenta2->get_numero_cuenta().' ';
echo 'Saldo: '.$cuenta2->get_saldo().' ';

echo '<br>'.'Nombre del portador: '.$cuenta3->get_nombre_portador().' ';
echo 'Numero de cuenta: '.$cuenta3->get_numero_cuenta().' ';
echo 'Saldo: '.$cuenta3->get_saldo().' ';

echo '<br>'.'Nombre del portador: '.$cuenta4->get_nombre_portador().' ';
echo 'Numero de cuenta: '.$cuenta4->get_numero_cuenta().' ';
echo 'Saldo: '.$cuenta4->get_saldo().' ';

echo '<br>'.'Nombre del portador: '.$cuenta5->get_nombre_portador().' ';
echo 'Numero de cuenta: '.$cuenta5->get_numero_cuenta().' ';
echo 'Saldo: '.$cuenta5->get_saldo().' ';

$cuenta1->set_saldo(570000.50);
echo '<br>'.'Nuevo saldo: '.$cuenta1->get_saldo().' ';

echo '<br>'.get_fecha_hora();