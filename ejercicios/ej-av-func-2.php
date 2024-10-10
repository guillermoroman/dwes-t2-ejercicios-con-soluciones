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
function esPrimo ($n): bool{
    for ($i = 2; $i <= sqrt($n); $i++){
        if ($n % $i == 0){
            return false;
        }
    }
    return true;
}

$numero1 = 18;
$numero2 = 23;

if (esPrimo($numero1)) {
    echo $numero1 . " es primo";
} else {
    echo $numero1 . " no es primo";
}

echo "$numero1 es primo?" . esPrimo($numero1) . "<br>";
echo "$numero2 es primo?" . esPrimo($numero2);
?>

</body>
</html>