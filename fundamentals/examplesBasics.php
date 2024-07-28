<script src="https://unpkg.com/prettier/standalone.js"></script>
<script src="https://unpkg.com/@prettier/plugin-php/standalone.js">
await prettier.format(YOUR_CODE, {
    plugins: prettierPlugins,
    parser: "php",
  });
</script>

<!-- Php es un lenguaje:
tipado:
 debil (transforma el tipo de variable segun sea necesario durante la ejecución), 
 dinamico, (tipo de una variable se determina en tiempo de ejecución, no en tiempo de compilación),
 gradual (opcionalmente puede especificar tipo de la variable para funciones,métodos,clases para mayor claridad y seguridad pero solo en esos contextos) -->

<?php
    //constantes, son estaticas
    const NOMBRE = 'Gregorio';
    $name = "Jose";
    $isDev = true;
    $age = 30;
    $x = 44;
    $y = 1;
    $newValue = $x + $y;

    $isOld = $age > 40;

    if ($isOld) {
        echo "<h2>Eres Viejo, lo siento</h2>";
    } elseif ($isDev) {
        echo "<h2>No eres viejo, pero eres dev. Te jodiste</h2>";
    }   else {
        echo "<h2>Eres joves, bien!</h2>";
    }
   /*  var_dump($name);
    var_dump($isTrueFalse);
    var_dump($x); */

    //echo  gettype($y);
    //is_bool($newValue); // Metodo Devuelve true o false
    //$valorCast = (bool) "44"; //type casting para forzar un tipo

    $output = "Hola $name, con una edad de $age. \n";
//Segundo ejemplo de output
    $outputV2 = "Buenos dias $name";
    $outputV2 .= ", mi edad es $age.";
?>

<h1>
    <?= $output; ?>
    <?= $outputV2; ?>
</h1>

<!--
<h1>
    //Concatenar texto
    <?= 
    "Hola "
       . $name
       . ", con edad de "
       . $age
       . "." 
    ?>

</h1>

<h1>
<?= 
    $newValue
?>
</h1>

Dos formas de escribir el echo
    <?php
    echo "App curso MiDuev!!!";

    ?>
 -->
<style>
    :root {
        color-scheme: light dark;
    }

    body {
        display: grid;
        place-content: center;
    }

</style>