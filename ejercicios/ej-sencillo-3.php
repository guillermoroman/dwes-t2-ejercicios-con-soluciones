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
$numeros = [1, 2, 3, 4, 5, 6, 7, 8, 9];
$producto = 1;
for($i = 0; $i < count($numeros); $i++) {
    $producto *= $numeros[$i];
}

echo "Producto = $producto";
?>

</body>
</html>