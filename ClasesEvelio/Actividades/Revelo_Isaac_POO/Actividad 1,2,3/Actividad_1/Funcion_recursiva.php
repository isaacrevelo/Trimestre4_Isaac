<?php
//Una función recursiva es una función que se llama a sí misma. Se utiliza para resolver problemas que pueden dividirse en problemas más pequeños.
function factorial($n) {
    if ($n <= 1) {
        return 1;
    } else {
        return $n * factorial($n - 1);
    }
}

echo factorial(7);