<!--ARREGLOS ASOCIATIVOS-->

<?php

$colores = array("r"=>"red", "a"=>"azul", "v"=>"verde");

//Imprimir arreglo
print_r ($colores);

//LEER ARREGLOS: Accedemos al elemento por medio del indice que queremos que nos muestre
echo $colores["v"]."<br>";

//Imprimir los indices del arreglo
foreach($colores as $indice=>&$valor){//leemos todo el arreglo de colores y lo pasamos como indice & valor
    echo $indice."<br>";
}

//Imprimir los valores del arreglo
foreach($colores as $indice=>&$valor){
    echo $valor."<br>";
    //echo $colores[$indice]."<br>";
}

//Imprimir el indice y los valores del arreglo concatenado
foreach($colores as $indice=>&$valor){
    echo "El valor ".$valor." tiene el indice ".$indice."<br>";
}

