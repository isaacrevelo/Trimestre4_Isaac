<?php

//recibir los datos enviados desde el formulario

$num1= $_POST['operador1'];
$num2= $_POST['operador2'];
$operacion=$_POST['operacion'];
echo 'El operador 1 es: '.$num1;
echo '<br>'.'El operador 2 es: '.$num2;
echo '<br>'.'La operacion es: '.$operacion;

if ($operacion== "Sumar"){
    $resultado = $num1 + $num2;
    echo '<br>'.'La suma es: '.$resultado;
}

if ($operacion== "Restar"){
    $resultado = $num1 - $num2;
    echo '<br>'.'La resta es: '.$resultado;
}

if ($operacion== "Multiplicar"){
    $resultado = $num1 * $num2;
    echo '<br>'.'La multiplicacion es: '.$resultado;
}

if ($operacion== "Dividir"){
        if ($num2==0){
            echo '<br>'.'No se puede realizar';
        }
    $resultado = $num1 / $num2;
    echo '<br>'.'La division es: '.$resultado;
}