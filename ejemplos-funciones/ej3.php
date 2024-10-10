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
function duplicar (&$numero){
    $numero *= 2;
}
$valor = 5;
duplicar($valor);
duplicar($valor);

echo $valor;

?>
</body>
</html>