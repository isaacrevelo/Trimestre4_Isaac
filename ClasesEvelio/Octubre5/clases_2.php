<?php

class Docente{

    public string $tipo_doc;
    public string $num_documento;

    public function __construct($tipo_doc, $num_documento)
    {
        $this->tipo_doc= $tipo_doc;
        $this->num_documento= $num_documento;
    }

    //Metodos Get

    public function get_tipo_doc()
    {
        return $this->tipo_doc;
    }

    public function get_num_documento()
    {
        return $this->num_documento;
    }

    //Metodos Set

    public function set_tipo_doc($tipo_doc)
    {
        $this->tipo_doc= $tipo_doc;
    }

    public function set_num_documento($num_documento)
    {
        $this->num_documento= $num_documento;
    }
}
//Crear objeto a instanciar
$docente1 = new Docente('CC', '236432789');
$docente2 = new Docente('TI', '85623556');
$docente3 = new Docente('CE', '9846598679');
$docente4 = new Docente('PS', '4554452178');
$docente5 = new Docente('CC', '7859232347');

//Creamos un objeto que incoque la funcion
echo $docente1->get_tipo_doc();
echo $docente1->get_num_documento();
echo '<br>'.$docente2->get_tipo_doc();
echo $docente2->get_num_documento();
echo '<br>'.$docente3->get_tipo_doc();
echo $docente3->get_num_documento();
echo '<br>'.$docente4->get_tipo_doc();
echo $docente4->get_num_documento();
echo '<br>'.$docente5->get_tipo_doc();
echo $docente5->get_num_documento();

//El objeto esta llamando al metodo y entre los parentesis se pasa el parametro
//$docente1->set_tipo_doc('TI');
