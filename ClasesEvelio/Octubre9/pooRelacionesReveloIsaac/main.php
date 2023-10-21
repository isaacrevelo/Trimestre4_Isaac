<?php
require_once('ComputadorLaptop.php');

$compu1=new ComputadorLaptop('Lenovo','8GB','DDR4','SSD','256GB','Windows 10','Microsoft Office','Intel Core i5', 4, 1, '7500MAph');
$compu2=new ComputadorLaptop('HP','4GB','DDR5','SDD','400GB','Windows 11','Microsoft Office','Intel Core i4', 2, 1, '6500MAph');

echo 'Fabricante: '.$compu1->get_fabricante().'<br>';
echo 'Capacidad de Memoria: '.$compu1->get_capMemoria().'<br>';
echo 'Tipo de Memoria: '.$compu1->get_tipoMemoria().'<br>';
echo 'Tipo de Almacenamiento: '.$compu1->get_tipoAlmacenamiento().'<br>';
echo 'Capacidad de Almacenamiento: '.$compu1->get_capAlmacenamiento().'<br>';
echo 'Sistema Operativo: '.$compu1->get_sistemaOperativo().'<br>';
echo 'Suite de Oficina: '.$compu1->get_suiteOficina().'<br>';
echo 'Procesador: '.$compu1->get_procesador().'<br>';
echo 'Numero de Puertos USB: '.$compu1->get_numPuertosUSB().'<br>';
echo 'Tactil 1(SI) 0(NO): '.$compu1->get_tactil().'<br>';
echo 'Potencia de la bateria: '.$compu1->get_potBateria().'<br>';
'<br';
echo 'Fabricante: '.$compu2->get_fabricante().'<br>';
echo 'Capacidad de Memoria: '.$compu2->get_capMemoria().'<br>';
echo 'Tipo de Memoria: '.$compu2->get_tipoMemoria().'<br>';
echo 'Tipo de Almacenamiento: '.$compu2->get_tipoAlmacenamiento().'<br>';
echo 'Capacidad de Almacenamiento: '.$compu2->get_capAlmacenamiento().'<br>';
echo 'Sistema Operativo: '.$compu2->get_sistemaOperativo().'<br>';
echo 'Suite de Oficina: '.$compu2->get_suiteOficina().'<br>';
echo 'Procesador: '.$compu2->get_procesador().'<br>';
echo 'Numero de Puertos USB: '.$compu2->get_numPuertosUSB().'<br>';
echo 'Tactil 1(SI) 0(NO): '.$compu2->get_tactil().'<br>';
echo 'Potencia de la bateria: '.$compu2->get_potBateria().'<br>';

ComputadorLaptop::fecha_hora_estatico().'<br>';

ComputadorLaptop::contar().'<br>';

