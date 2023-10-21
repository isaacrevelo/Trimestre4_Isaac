<?php
require('Clase2.php');

use Sena as S;

$persona1=new S\Persona('Rodrigo','jairo@abc','Buenos dias...');
echo 'Imprimiendo datos de la clase Persona en el espacio de nombres Sena'.'<br>';
echo 'Nombres: '. $persona1->nombre.'<br>';
echo 'Correo: '. $persona1->correo.'<br>';
echo 'Saludo: '. S\Persona::$saludo.'<br>';