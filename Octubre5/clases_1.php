<?php

//La clase es una plantilla

class Aprendiz{
    //Propiedades o atributos de la clase
    public string $tipo_doc;
    public string $num_documento;
    public string $nombre;
    public string $apellidos;
    public string $correo;
    public int $edad;
    public float $peso;
    public bool $activo;


public function __construct(string $tipo_doc, string $num_documento, string $nombre, string $apellidos, string $correo, int $edad, float $peso, bool $activo)
    {
        $this->tipo_doc= $tipo_doc;
        $this->num_documento= $num_documento;
        $this->nombre= $nombre;
        $this->apellidos= $apellidos;
        $this->correo= $correo;
        $this->edad= $edad;
        $this->peso= $peso;
        $this->activo= $activo;
    }
}

$aprendiz1 = new Aprendiz ('CC', '1234567', 'LUISA', 'CORTES', 'luisacortez01@gmail.com', 25, 80, 1);

echo 'El aprendiz es '. '<br>'  . $aprendiz1->tipo_doc . '<br>' . $aprendiz1->num_documento . '<br>' . $aprendiz1->nombre . '<br>' . $aprendiz1->apellidos;

?>