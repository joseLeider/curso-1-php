<!--VISIBILIDAD DE DATOS-->

<?php

/*
(public, private, protected: palabras reservadas que denotan visibilidad)

private: solo puede ser utilizada por los metodos o alterada directamente desde la propiedad 
o desde la clase que lo definio

protected: solo se puede acceder desde la misma clase o desde las clases heredadas
*/

class Deporte {

    public $nombre;
    private $edad;
    protected $altura;

    public function asignarNombre($nuevoNombre){
        $this->nombre = $nuevoNombre;
    }

    public function imprimirNombre(){
        echo "Deporte: ".$this->nombre;
    }

    public function mostrarEdad(){ // creamos un metodo que altera los datos y que nos retorna ese mismo dato
        $this->edad=27;
        return $this->edad;
    }
   
}

$deporte1 = new Deporte();
$deporte1->asignarNombre("Futbol");
//$deporte1->imprimirNombre();

echo $deporte1->nombre."<br>";
//echo $deporte1->edad; // ERROR ACCESO DENEGADO
//echo $deporte1->altura; // ERROR ACCESO DENEGADO
echo $deporte1->mostrarEdad(); // SOLO PODEMOS ACCEDER ATRAVEZ DE UN METODO

