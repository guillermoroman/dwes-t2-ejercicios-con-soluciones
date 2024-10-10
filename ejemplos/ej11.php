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
?>
<table border='1'>
<tr><th>Nombre</th><th>Precio (€)</th></tr>
    <?php
    foreach ($productos as $producto) {
        echo "<tr>";
        echo "<td>" . $producto[1] . "</td>";
        echo "<td>" . $producto[2] . "</td>";
        echo "</tr>";
    }
    ?>
</table>




</body>
</html>