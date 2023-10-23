<?php
//Las funciones anónimas son funciones sin nombre que pueden ser asignadas a variables y utilizadas en tiempo de ejecución.

$sumar = function($num1, $num2) {
    return $num1 + $num2;
};

echo $sumar(3, 4);