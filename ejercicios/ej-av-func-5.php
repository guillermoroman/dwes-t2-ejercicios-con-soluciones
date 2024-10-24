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
function estaEnMinusculas($cadena) {
    return $cadena === mb_strtolower($cadena, 'UTF-8');
}

// Ejemplo de uso:
$cadena = "hola mundo";
if (estaEnMinusculas($cadena)) {
    echo "La cadena está completamente en minúsculas.";
} else {
    echo "La cadena no está completamente en minúsculas.";
}
?>
</body>
</html>