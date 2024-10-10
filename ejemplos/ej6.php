<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
/*
for (expr1; expr2; expr3){
    sentencias
}
*/

$numeros = array(0, 1, 2, 3, 4);
$suma = 0;
foreach ($numeros as $numero){
    echo "$numero <br>";
    $suma += $numero;
}
echo "<p>Suma = $suma</p>";
echo 'Tamaño de $a =' . count($numeros) . "<br>";
var_dump($numeros);
?>



</body>
</html>