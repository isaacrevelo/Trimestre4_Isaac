<?php
//Es una declaración al comienzo de un archivo PHP que obliga a que las conversiones de tipos sean estrictas. Esto significa que los tipos de datos deben coincidir exactamente en las llamadas a funciones.

declare(strict_types=1);

function sumar(int $a, int $b): int {
    return $a + $b;
}

echo $resultado = sumar(5, 10);//Funciona

echo $resultado = sumar(5, "10");//No funciona