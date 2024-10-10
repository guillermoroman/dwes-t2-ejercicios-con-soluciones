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
$productos = array(
    array(1, "Ratón", 49.99),
    array(2, "Teclado", 89.99),
    array(3, "Disco Duro", 76));

echo $productos[0][1];
/*
foreach ($productos as $producto) {
    echo "<p>" . $producto . "</p>";
}
*/
?>


</body>
</html>