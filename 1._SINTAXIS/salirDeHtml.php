<!-- Cualquier cosa fuera de un par de etiquetas de apertura y cierre es ignorado por el intérprete de PHP, lo que permite que los ficheros de PHP tengan contenido mixto. Esto hace que PHP pueda ser embebido en documentos HTML para, por ejemplo, crear plantillas. -->

<p>Esto va a ser ignorado por PHP y mostrado por el navegador.</p>
<?php echo 'Mientras que esto va a ser interpretado.'; ?>
<p>Esto también será ignorado por PHP y mostrado por el navegador.</p>



<!-- Salida avanzada usando condiciones -->

<?php

$expresión = false;

if ($expresión == true): ?>
Esto se mostrará si la expresión es verdadera.
<?php else: ?>
En caso contrario se mostrará esto.
<?php endif; ?>

<!-- En este ejemplo, PHP saltará los bloques donde la condición no se cumpla, incluso si están fuera de las etiquetas de apertura/cierre de PHP, los saltará según la condición debido a que el intérprete salta los bloques contenidos dentro de una condición que no se cumpla. -->