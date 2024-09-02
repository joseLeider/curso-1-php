<!--CLASES-->

<?php

class Materia {

    public $nombre; // propiedades

    public function asignarNombre($nuevoNombre){ // metodos o funciones o acciones

        $this->nombre=$nuevoNombre; // Hacemos referencia a nuestra propiedad para asignarle la variable que
        //me va a contener el valor ??

    }

    public function imprimirNombre(){
        echo "Materia: ".$this->nombre."<br>"; g
    }
    
}

$objmateria1 = new Materia(); // instancia o creacion de un objeto
$objmateria1->asignarNombre("Sociales"); // llamando un metodo
echo $objmateria1->nombre."<br>"; // imprimir una propiedad
$objmateria1->imprimirNombre(); // imprimir una propiedad atravez de un metodo inprimir

$objmateria2 = new materia();
$objmateria2->asignarNombre("Etica");
echo $objmateria2->nombre."<br>";
$objmateria2->imprimirNombre();

