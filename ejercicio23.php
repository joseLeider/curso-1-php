<!--FUNCIONES PARA ARREGLOS-->

<?php

$alumnos = array("Sebastian", "Maicol", "Luisa");

array_push($alumnos, "Laura");

print_r($alumnos);
echo "<br>";

//Imprimimos todos los valores del arreglo
for ($i=0; $i<4; $i++){
    
    echo $alumnos[$i]."<br>";
    
}

?>