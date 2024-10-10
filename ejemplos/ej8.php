<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>If</title>
</head>
<body>
<?php
    $dia = 4;
    switch ($dia){
        case 1:
            $resultado = "lunes";
            break;
        case 2:
            $resultado = "martes";
            break;
        case 3:
            $resultado = "miércoles";
            break;
        case 4:
            $resultado = "jueves";
            break;
        case 5:
            $resultado = "viernes";
            break;
    }

    echo "<p> Hoy es <b>$resultado</b></p>";
?>
</body>
</html>