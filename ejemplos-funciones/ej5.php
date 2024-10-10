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

function calcularDescuento($precio, $descuento = 10){
    return $precio - ($precio * ($descuento/100));
}

echo calcularDescuento(10, 20);
echo "<br>";
echo calcularDescuento(20);



?>

</body>
</html>