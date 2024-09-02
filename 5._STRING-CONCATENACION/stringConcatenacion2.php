<?php
    if($_POST) {
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];

        echo "Hola ".$nombre." ".$apellido;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="stringConcatenacion2.php" method="post">
        <label>  <!--Representa un titulo para un elemento-->
            Nombre:
            <input type="text" name="nombre">
        </label><br><br>
        <label>
            Apellido:
            <input type="text" name="apellido">
        </label><br><br>

        <input type="submit" value="Enviar">
    </form>
</body>
</html>