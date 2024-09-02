<!--FUNCIONES-->

<?php

function name ($nombre){

    echo "Hola ".$nombre."<br>";
}

name("Jose");
name("Jorge");
name("Maria");


function namefull ($nombres, $apellido){ /* ($nombres, $apellido="") default vacio para que no me marque 
    error si no le paso un valor al apellido*/

    echo "Hola ".$nombres." ".$apellido."<br>";
}

namefull("Jose","Zapata");
namefull("Jorge", "Ramirez");
namefull("Maria", "Perez");

function suma ($num1, $num2=4){
    $resultado = $num1 + $num2;
    //echo "El resultado de la suma es ".$resultado;
}

suma(4);
echo "El resultado de la suma es ".$resultado;