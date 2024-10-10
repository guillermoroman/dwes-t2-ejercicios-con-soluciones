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

function test (){
    echo "<p>Probando, probando</p>";
}

test();
test();
test();



function gastos($categoria, $unidades): float{

    switch ($categoria) {
        case 1:
            $recargo = 1.85;
            break;
        case 2:
            $recargo = 3.05;
            break;
        case 3:
            $recargo = 6.01;
            break;
        default:
            $recargo = 0;
    }
    return ($recargo + $unidades * 2.25);
}

echo gastos(1, 4);


function f1(){
    $var = 0;

    f2($var);
    function f2($variable){
        echo $variable;
    }
}

?>

</body>
</html>