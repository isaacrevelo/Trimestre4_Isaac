<?php
declare(strict_types=1);

class Aprendiz {
    private $nombre;
    private $documento;
    private $correo;
    private $telefono;

    public function __construct(string $nombre, string $documento, string $correo, string $telefono) {
        $this->nombre = $nombre;
        $this->documento = $documento;
        $this->correo=$correo;
        $this->telefono=$telefono;
    }

    public function getNombre(): string {
        return $this->nombre;
    }

    public function getDocumento(): string {
        return $this->documento;
    }

    public function getCorreo(): string {
        return $this->correo;
    }

    public function getTelefono(): string {
        return $this->telefono;
    }
}

class Ficha {
    private $numeroFicha;
    private $aprendices = [];

    public function __construct(int $numeroFicha) {
        $this->numeroFicha = $numeroFicha;
    }

    public function agregarAprendiz(Aprendiz $aprendiz) {
        $this->aprendices[] = $aprendiz;
    }

    public function obtenerAprendices(): array {
        return $this->aprendices;
    }
}

$ficha1 = new Ficha(2693630);

$aprendiz301 = new Aprendiz("Isaac Revelo", "10147","isaacr@gmail.com","3148927478");
$aprendiz302 = new Aprendiz("Daniel Atara", "381902", "daniel@gmail.com", "294373598");
$aprendiz303 = new Aprendiz("Danna Jimenez", "473892", "dannajimenez@gmail.com", "52378698230");
$aprendiz304 = new Aprendiz("Camilo Acevedo", "4832094", "camiloacevedo@gmail.com", "729583273");
$aprendiz305 = new Aprendiz("Brayan Capera", "7846483", "brayancap@gmail.com", "139274389");
$aprendiz306 = new Aprendiz("Valentina Avila", "3958498", "valeavila@gmail.com", "6537042398");
$aprendiz307 = new Aprendiz("Cristian Valencia", "3284790", "cristianvalencia@gmail.com", "72394528793");

$ficha1->agregarAprendiz($aprendiz301);
$ficha1->agregarAprendiz($aprendiz302);
$ficha1->agregarAprendiz($aprendiz303);
$ficha1->agregarAprendiz($aprendiz304);
$ficha1->agregarAprendiz($aprendiz305);
$ficha1->agregarAprendiz($aprendiz306);
$ficha1->agregarAprendiz($aprendiz307);

$aprendicesEnFicha1 = $ficha1->obtenerAprendices();

echo "<br>Aprendices en la Ficha 2693630:<br>";
foreach ($aprendicesEnFicha1 as $aprendiz) {
    echo "Nombre: " . $aprendiz->getNombre() . ", Documento: " . $aprendiz->getDocumento() . ", Correo: " . $aprendiz->getCorreo().", Telefono: " . $aprendiz->getTelefono(). "<br>";
}

$ficha2 = new Ficha(2693629);

$aprendiz291 = new Aprendiz("Pedro Rodriguez", "12345678", "pedrito@gmail.com", "1234567890");
$aprendiz292 = new Aprendiz("Santiago Alvarez", "23456789", "santialvarez@gmail.com", "2345678901");
$aprendiz293 = new Aprendiz("Daniela Ramirez", "34567890", "daniramirez@gmail.com", "3456789012");
$aprendiz294 = new Aprendiz("Jose Rojas", "45678901", "rojasjose@gmail.com", "4567890123");
$aprendiz295 = new Aprendiz("Vannesa Garzon", "56789012", "vannegarzon@gmail.com", "5678901234");
$aprendiz296 = new Aprendiz("David Castañeda", "67890123", "davidc@gmail.com", "6789012345");
$aprendiz297 = new Aprendiz("Karen Muñoz", "78901234", "karenmunoz@gmail.com", "7890123456");

$ficha2->agregarAprendiz($aprendiz291);
$ficha2->agregarAprendiz($aprendiz292);
$ficha2->agregarAprendiz($aprendiz293);
$ficha2->agregarAprendiz($aprendiz294);
$ficha2->agregarAprendiz($aprendiz295);
$ficha2->agregarAprendiz($aprendiz296);
$ficha2->agregarAprendiz($aprendiz297);

$aprendicesEnFicha2 = $ficha2->obtenerAprendices();

echo "<br>Aprendices en la Ficha 2693629:<br>";
foreach ($aprendicesEnFicha2 as $aprendiz) {
    echo "Nombre: " . $aprendiz->getNombre() . ", Documento: " . $aprendiz->getDocumento() . ", Correo: " . $aprendiz->getCorreo() . ", Teléfono: " . $aprendiz->getTelefono() . "<br>";
}
