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
$strings = ["Desarrollo ", "Web ", "en ", "Entorno ", "Servidor"];
$frase = "";
$i = 0;
do{
    $frase = $frase . $strings[$i];
    $i++;
} while($i < count($strings));


echo "<p>Frase = $frase</p>";
?>

</body>
</html>