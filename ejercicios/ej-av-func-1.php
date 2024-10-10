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
    function factorial($n){

        //Caso base
        if ($n == 1){
            return 1;
        } else {
            return $n * factorial($n - 1);
        }
    }

    $numero = 5;
    echo "$numero! = " . factorial($numero) . "<br>";
    echo $numero . "! = " . factorial($numero);

?>


</body>
</html>