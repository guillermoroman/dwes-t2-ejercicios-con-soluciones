<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $entero = 0;
    $decimal = 0.5;
    $cadena1 = "hola";
    $cadena2 = "0256";
    $nulo = NULL;
    $cadena3 = "0";

    echo "<p>El valor boolean de entero es " . (boolean)$entero . ".</p>";
    echo "<p>El valor boolean de decimal es " . (boolean)$decimal . ".</p>";
    echo "<p>El valor boolean de cadena1 es " . (boolean)$cadena1 . ".</p>";
    echo "<p>El valor boolean de cadena2 es " . (boolean)$cadena2 . ".</p>";
    echo "<p>El valor boolean de nulo es " . (boolean)$nulo . ".</p>";
    echo "<p>El valor boolean de cadena3 es " . (boolean)$cadena3 . ".</p>";

    ?>
</body>
</html>