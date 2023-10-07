<?php

$numero1= $_POST['operador1'];
$numero2= $_POST['operador2'];
$operacion=$_POST['operacion'];
echo 'La operacion es: '.$operacion;
echo '<br>'.'El operador 1 es: '.$numero1;
echo '<br>'.'El operador 2 es: '.$numero2;
echo '<br>'.'El resultado es: ';

class Calculadora{
//Declaramos dos propiedades enteras de la calculadora
    private int $numero1;
    private int $numero2;
    public function __construct(){
    }
//Setters y Getters
public function get_operando1(){
    return $this->numero1;
}
public function set_operando1(int $numero1){
    if(!empty($numero1) && is_numeric($numero1)){
    $this->numero1 = $numero1;
}
}
public function get_operando2(){
    return $this->numero2;
}
public function set_operando2(int $numero2){
    if(!empty($numero2) && is_numeric($numero2)){
    $this->numero2 = $numero2;
}
}
public function sumar(int $numero1 = 0, int $numero2 = 0){
    return $numero1 + $numero2;
}
public function restar(int $numero1 = 0, int $numero2 = 0){
    return $numero1 - $numero2;
}
public function multiplicar(int $numero1 = 0, int $numero2 = 0){
    return $numero1 * $numero2;
}
public function dividir(int $numero1 = 0, int $numero2 = 0){
    if ($numero2 != 0) {
    return $numero1 / $numero2;
}
    else {
    echo 'No es posible dividir por cero';
    return;
    }
}
public function calcular(int $numero1 = 0, int $numero2 = 0, string $operacion = "")
    {
        if ($operacion == "Sumar") {
            return $this->sumar($numero1, $numero2);
        }
        if ($operacion == "Restar") {
            return $this->restar($numero1, $numero2);
        }
        if ($operacion == "Multiplicar") {
            return $this->multiplicar($numero1, $numero2);
        }
        if ($operacion == "Dividir") {
            return $this->dividir($numero1, $numero2);
        }
    }
}
$calculo= new Calculadora($numero1,$numero2);

echo $calculo->calcular($numero1,$numero2,$operacion);





