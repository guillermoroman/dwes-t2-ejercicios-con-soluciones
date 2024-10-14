<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // Comentario de una linea
    # Comentario de una linea
    /*  Comentario
    de varias
    lineas */

    $var = "Hola";
    ?>
    <h1>Otras formas de imprimir</h1>
    <?= $var . ", mundo" ?>
    <br>
    <?php echo $var ?>
</body>
</html>