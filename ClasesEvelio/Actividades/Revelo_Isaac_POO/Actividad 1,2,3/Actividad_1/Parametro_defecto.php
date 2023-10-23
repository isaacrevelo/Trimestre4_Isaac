<?php
//Los parámetros por defecto permiten asignar un valor predeterminado a un parámetro de función en caso de que no se proporcione un valor al llamar a la función.

function saludar($nombre, $saludo = "Hola") {
    echo "$saludo, $nombre!";
}

saludar("Isaac");