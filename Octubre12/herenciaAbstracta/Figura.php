<?php

abstract class Figura{
    private float $nlados=1;
    private string $nombres;

    public function __construct($nlados,$nombres)
    {
        $this->nlados=$nlados;
        $this->nombres=$nombres;
    }

    public function imprimir(){
        echo  "Soy un metodo de una clase abstracta";
    }
}

//$cuadrado1= new Cuadrado(2,"Cuadrado");

$cuadrado1->imprimir();

$triangulo=new Triangulo(3,"Triangulo",10,10);
echo '<br>'.$triangulo->calcular_area();

class Cuadrado extends Figura{
    private float $longitudlado;

    public function __construct($nlados,$nombres,$longitudlado)
    {
        parent::__construct($nlados,$nombres);

        $this->longitudlado=$longitudlado;
    }


}

class Triangulo extends Figura{
    private float $base;
    private float $altura;

    public function __construct($nlados,$nombres,float $base, float $altura)
    {
        parent::__construct($nlados,$nombres);

        $this->base=$base;
        $this->altura=$altura;

    }

    public function get_base(){
        return $this->base;
    }

    public function get_altura(){
        return $this->altura;
    }

    public function calcular_area(){
        $base=$this->get_base();
        $altura=$this->get_altura();
        $resultado=($base * $altura)/2;
        return $resultado;

    }

}

class Circulo extends Figura{

}