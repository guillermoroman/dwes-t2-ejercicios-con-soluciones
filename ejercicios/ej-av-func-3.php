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

function reverseString($str){
    $len = strlen($str);

    if($len == 1){
        return $str;
    } else {
        return reverseString(substr($str, 1, $len -)) . (substr($str, 0, 1));
    }
}
$palabra = "servidor";

echo "$palabra al revés es " . reverseString($palabra) . "<br>";
?>

</body>
</html>