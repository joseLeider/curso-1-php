<!--METODO GET-->

Con el metodo get podemos ver los parametros pasados atraves de la url
<?php

    if($_GET){
        $name = $_GET['name'];
        echo "Hola ".$name;
    }

?>

<!-- Un resultado usando el método GET, a modo de ejemplo, podría ser el siguiente:

http://www.aprenderaprogramar.com/newuser.php?nombre=Pepe&apellido=Flores&email=h52turam%40uco.es&sexo=Mujer

En esta URL podemos distinguir varias partes: http://www.aprenderaprogramar.com/newuser.php es la dirección web en sí.

El símbolo ? indica dónde empiezan los parámetros que se reciben desde el formulario que ha enviado los datos a la página.

Después del símbolo ? aparecen parejas de datos con su nombre y valor separadas por el símbolo &. Las parejas dato1=valor1, dato2=valor2, dato3=valor3… reflejan el nombre y el valor de los campos enviados por el formulario.

Por ejemplo: nombre=Pepe, apellidos=Flores, etc. nos dice que el campo del formulario que se denomina nombre llega con valor “Pepe” mientras que el campo del formulario que se denomina apellidos llega con valor “Flores”. Estos valores son recibidos en la página web de destino del formulario.

Tener en cuenta que para separar la primera pareja de la dirección web en sí se usa el símbolo '?' y para separar las restantes parejas entre sí se usa el símbolo '&'.

determinados caracteres no son recibidos en la URL de la misma forma exactamente en que fueron escritos en el formulario. Por ejemplo, el valor del campo email que se recibe en la URL es h52turam%40uco.es, mientras que el usuario en el formulario habrá introducido con toda seguridad h52turam@uco.es. Como vemos, el carácter @ ha sido sustituido por los caracteres %40. Estas equivalencias se introducen automáticamente en la transmisión de datos debido a que las URLs no admiten determinados caracteres como letras con tildes, arrobas y otros. -->

<?php 

