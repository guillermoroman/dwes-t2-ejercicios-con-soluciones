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
    array("id" => 1, "name" => "Ratón", "price" => 49.99),
    array("id" => 2, "name" => "Teclado", "price" => 89.99),
    array("id" => 3, "name" => "Disco Duro", "price" => 76));
?>
<table border='1'>
    <tr><th>Nombre</th><th>Precio (€)</th></tr>
    <?php
    foreach ($productos as $producto) {
        echo "<tr>";
        echo "<td>" . $producto["name"] . "</td>";
        echo "<td>" . $producto["price"] . "</td>";
        echo "</tr>";
    }
    ?>
</table>




</body>
</html>