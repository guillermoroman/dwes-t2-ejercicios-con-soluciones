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
$numeros = array(0, 1, 2, 3, 4);
$suma = 0;
$i = 0;
while ($i < count($numeros)){
    $suma += $numeros[$i];
    $i++;
}
echo "<p>Suma = $suma</p>";
?>
</body>
</html>