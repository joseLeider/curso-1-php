<!--CONSTRUCTOR-->

<?php

class Usuario {

    public $nombre;
    private $edad;
    protected $altura;

    function __construct($nuevoNombre){
        $this->nombre = $nuevoNombre;
    }

    public function asignarNombre($nuevoNombre){
        $this->nombre = $nuevoNombre;
    }

    public function imprimirNombre(){
        echo "Hola soy ".$this->nombre;
    }

    public function mostrarEdad(){
        $this->edad=27;
        return $this->edad;
    }
   
}

$objUsuario = new Usuario("Sofia");
//$objEmpleado->asignarNombre("Julian");
$objUsuario->imprimirNombre();

