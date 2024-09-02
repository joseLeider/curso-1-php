<?php

if($_POST) {
    $nombre = $_POST['nombre'];
    echo $nombre;
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
    <form action="post2.php" method="post">
        <label>
        Nombre:
            <input type="text" name="nombre">
        </label>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>