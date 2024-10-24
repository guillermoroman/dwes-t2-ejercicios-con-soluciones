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
require_once 'Vehiculo.php';
require_once 'Coche.php';
require_once 'Moto.php';

// Crear el objeto Coche
$coche = new Coche("rojo", 180, 500, 4);
echo "<h1>Coche:</h1>";
echo "<p>Número de ruedas: " . $coche->getNumRuedas() . "</p>";
echo "<p>Color: " . $coche->getColor() . "</p>";
echo "<p>Velocidad máxima: " . $coche->getVMax() . " km/h</p>";

// Acelerar y frenar el coche
$coche->acelerar(50);
echo "<p>Velocidad actual tras acelerar: " . $coche->getVelocidad() . " km/h</p>";
$coche->frenar(20);
echo "<p>Velocidad actual tras frenar: " . $coche->getVelocidad() . " km/h</p>";

// Probar el claxon del coche
echo "<p>Sonido del claxon del coche: " . $coche->tocarClaxon() . "</p>";

// Probar el maletero del coche
$coche->meterEnMaletero(300);
echo "<p>Capacidad restante del maletero: " . $coche->getCapacidadRestanteMaletero() . " litros</p>";
// TODO No hay espacio suficiente
$coche->vaciarMaletero();
echo "<p>Capacidad restante del maletero tras vaciar: " . $coche->getCapacidadRestanteMaletero() . " litros</p>";

echo "<p>Intento de acelerar por encima de vMax: ";
echo $coche->acelerar(600);

// Crear el objeto Moto
$moto = new Moto("negro", 120);
echo "<h1>Moto:</h1>";
echo "<p>Número de ruedas: " . $moto->getNumRuedas() . "</p>";
echo "<p>Color: " . $moto->getColor() . "</p>";
echo "<p>Velocidad máxima: " . $moto->getVMax() . " km/h</p>";

// Acelerar y frenar la moto
$moto->acelerar(60);
echo "<p>Velocidad actual tras acelerar: " . $moto->getVelocidad() . " km/h</p>";
$moto->frenar(30);
echo "<p>Velocidad actual tras frenar: " . $moto->getVelocidad() . " km/h</p>";

// Probar el claxon de la moto
echo "<p>Sonido del claxon de la moto: " . $moto->tocarClaxon() . "</p>";

// Probar hacer caballito con la moto
echo "<p>Haciendo caballito: " . $moto->hacerCaballito() . "</p>";
echo "<p>Haciendo caballito de nuevo: " . $moto->hacerCaballito() . "</p>";
?>
</body>
</html>
