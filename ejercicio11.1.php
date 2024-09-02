<!--IF ANIDADOS-->

<?php

if($_POST){

    $valorA = $_POST['valorA'];
    $valorB = $_POST['valorB'];

    $suma = $valorA+$valorB;
    $resta = $valorA-$valorB;
    $multiplicacion = $valorA*$valorB;
    $division = $valorA/$valorB;

    echo "El resultado de la suma es: ".$suma."<br>";
    echo "El resultado de la resta es: ".$resta."<br>";
    echo "El resultado de la multiplicacion es: ".$multiplicacion."<br>";
    echo "El resultado de la division es: ".$division."<br>";

    if($valorA == $valorB){

        echo "Ambos son iguales <br>";

        if($valorA == 4){
            echo "El valor A es igual a 4 <br>";
        }

        if($valorA == 3){
            echo "El valor A es igual a 3 <br>";
        }
    }

    if(($valorA == $valorB) && ($valorA == 4)){

        echo "Ambos son iguales y el valor A es igual a 4";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>If anidados</title>
</head>
<body>
    <form action="ejercicio11.php" method="post">
        Valor A:
        <input type="text" name="valorA" id="">
        <br>
        Valor B:
        <input type="text" name="valorB" id="">
        <br>
        <input type="submit" value="Calcular">
    </form>
</body>
</html>