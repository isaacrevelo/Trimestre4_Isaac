<?php
$multiplo=function($num)
{
    if ($num%5==0){
        echo 'El numero: '.$num.'es multiplo de 5';
    }
    elseif ($num%5!=0){
        echo 'No es multiplo';
    }
};

$multiplo(16);