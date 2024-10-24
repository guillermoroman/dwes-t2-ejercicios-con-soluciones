<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
function esPalindromo($cadena) {
    // Eliminar espacios y convertir a minúsculas
    $cadena = str_replace(' ', '', mb_strtolower($cadena, 'UTF-8'));

    // Comparar la cadena con su reverso
    return $cadena === strrev($cadena);
}

// Ejemplo de uso:
$cadena = "anita lava la tina";
if (esPalindromo($cadena)) {
    echo "La cadena '$cadena' es un palíndromo.";
} else {
    echo "La cadena no es un palíndromo.";
}
?>
</body>
</html>