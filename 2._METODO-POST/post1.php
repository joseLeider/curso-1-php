<!--METODO POST-->

<!-- Para que sirve -->

<!-- En el proceso de enviar y recibir datos de un formulario existen dos páginas. La que tiene el formulario y la página que lo recibe. La página que contiene el formulario podría ser una página normal HTML. La segunda página, que recibe el formulario, por supuesto tendrá que ser una página PHP. -->

<!-- 
$_POST: La variable superglobal es un array asociativo donde accedemos a recoger los datos de los campos de dicho formulario para posteriormente ser almacenado en una variable.
name: atributo que nos permite recojer el valor introducido por el usuario atraves del campo.
action: indica la dirección de la página PHP que recibirá el formulario.
-->

<?php

//Validamos si hubo un envio de formulario para ejecutar las instrucciones
if($_POST){
    // Se Recibe la informacion del formulario HTML (metodo POST), lo almacena en una variable y lo imprime

    $nombre=$_POST['nombre']; // creamos una variable php denominada $nombre donde almacenamos la información del campo 'nombre' a través del método post proveniente del formulario
    echo "Hola ".$nombre;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Metodo post</title>
</head>
<body>
    <form action="post1.php" method="post"> <!--El formulario hace un envio al archivo post1.php como url de destino atraves del metodo post-->
    Nombre:
        <input type="text" name="nombre"><br> <!-- Se recoge o se recupera el dato atraves del input mediante el atributo name con el campo llamado "nombre"-->
        <input type="submit" value="Enviar"> <!-- El formulario se envia cuando hacemos click-->
    </form>
</body>
</html>