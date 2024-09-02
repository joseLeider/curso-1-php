<?php // etiqueta de apertura php

// ... codigo php

/* Cuando PHP analiza un fichero, busca las etiquetas de apertura y cierre, que son <?php y ?>, y que indican a PHP dónde empezar y finalizar la interpretación del código. Este mecanismo permite embeber a PHP en todo tipo de documentos, ya que todo lo que esté fuera de las etiquetas de apertura y cierre de PHP será ignorado por el analizador. */

?> <!-- etiqueta de cierre php-->





<!--Si un fichero contiene solamente código de PHP, es preferible omitir la etiqueta de cierre de PHP al final del mismo. Así se previene la adición de espacios en blanco o nuevas líneas accidentales después de la etiqueta de cierre, lo cual causaría efectos no deseados debido a que PHP comenzará la salida del búfer cuando no había intención por parte del programador de enviar ninguna salida en ese punto del script.-->

<?php
echo "Hola mundo";

// ... codigo php

echo "Última sentencia";

// el script finaliza aquí sin etiqueta de cierre de PHP