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

    $a = array(0, 1, 2, 3, 4);
    $suma = 0;
    for ($i = 0 ;$i < 5; $i++){
        $suma += $a[$i];
    }
    echo "<p>Suma = $suma</p>";
    echo 'Tamaño de $a =' . count($a) . "<br>";
    var_dump($a);
    ?>
    


</body>
</html>