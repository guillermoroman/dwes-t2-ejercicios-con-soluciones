<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php echo "<h1>hola, mundo!</h1>" ?>


    <?php
        $variable = 5;
        $variable2 = "hola";

        echo "<p>El valor de variable es: $variable</p>";
        echo "<p>El valor de variable es: " . $variable . "</p>";
        echo '<p>En php hay dos tipos de comillas. Valor = $variable</p>';
        echo $variable;
        
        echo "<h2>Tipos de datos</h2>";
        $var1 = 42;
        echo "<p>Var1 es de tipo " . gettype($var1) . ".</p>";
        $var2 = 3.14;
        echo "<p>Var2 es de tipo " . gettype($var2) . ".</p>";
        $var3 = "Hola";
        echo "<p>Var3 es de tipo " . gettype($var3) . ".</p>";
        $var4 = true;
        echo "<p>Var4 es de tipo " . gettype($var4) . ".</p>";

        echo "<p>Var1 + Var2 = " . $var1 + (integer)$var4 . "</p>";
    ?>
    
</body>
</html>