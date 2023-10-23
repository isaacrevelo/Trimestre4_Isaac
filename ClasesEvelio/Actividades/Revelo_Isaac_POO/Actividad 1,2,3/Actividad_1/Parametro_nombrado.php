<?php
//Los parámetros nombrados permiten pasar argumentos a una función especificando el nombre del parámetro al que se desea asignar el valor.

function saludar($nombre, $saludo) {
    echo "$saludo, $nombre!";
}

saludar(saludo: "Buenos dias", nombre: "Isaac");
