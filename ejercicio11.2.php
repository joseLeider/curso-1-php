<!--REPASO-->

<?php
    if($_POST){
        $valor1 = $_POST['valor1'];
        $valor2 = $_POST['valor2'];
        $multi = $valor1*$valor2;

        if($valor1 < $valor2){
            echo "El valor 1 es menor";
            if($valor1 == 2){
                echo "El valor ingresado es 2";
            }
        }

        if($valor1 > $valor2){
            echo "El valor 2 es menor";
            if($valor1 == 4 && $valor2 ==1){
                echo "El valor 1 es igual a 4 y el valor 2 es igual 1";
            }
        }

        if($valor1 == $valor2){
            echo "Los dos valores son iguales";
            if($valor1 == 9){
                echo "El numero repetido es el numero 9";
            }
        }

        if(($valor1 < $valor2) && ($valor2 != 2)){
            echo "El valor 1 es menor al valor 2 y el valor 2 es diferente al numero 2";

            if(($valor1 < 0 ) || ($valor2 > 50)){
                echo "El valor 1 es menor a 1 y el valor 2 es mayor a 50";
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Repaso</title>
</head>
<body>
    <form action="ejercicio11.1.php" method="post">
        <label for="">Valor1</label>
        <input type="text" name="valor1" id="">
        <br>
        <label for="">Valor2</label>
        <input type="text" name="valor2" id="">
        <br>
        <input type="submit" value="Calcular">
    </form>
</body>
</html>