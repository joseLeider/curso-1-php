<!--ARREGLOS DE INDICE NUMERICO-->

<?php

    $materias = array("programacion", "fisica", "calculo", "ingles");

    //Imprimir arreglo
    print_r ($materias);

    //LEER ARREGLOS: Accedemos al elemento por medio del indice que queremos que nos muestre
    echo $materias[0]."<br>";

    //Imprimir todos los valores del arreglo
    for ($indice=0; $indice<4; $indice++) { 
        echo $materias[$indice]."<br>";
    }
?>