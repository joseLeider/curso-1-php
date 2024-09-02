<!--HERENCIA-->

<?php

class Usuario {

    public $nombre;
    private $edad;
    protected $altura;

    public function asignarNombre($nuevoNombre){
        $this->nombre = $nuevoNombre;
    }

    public function imprimirNombre(){
        echo "Hola ".$this->nombre;
    }

    public function mostrarEdad(){
        $this->edad=27;
        return $this->edad;
    }
   
}


class Empleado extends Usuario { // HERENCIA 

    public $puesto; //propiedad nueva

    public function presentacion(){
        echo "Hola soy ".$this->nombre." y soy un ".$this->puesto;
    }
}

$objEmpleado = new Empleado();
$objEmpleado->asignarNombre("Julian");
$objEmpleado->puesto="Profesor";
$objEmpleado->presentacion();
