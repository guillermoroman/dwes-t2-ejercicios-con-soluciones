<?php
// Declarar tres variables con números diferentes
$num1 = 15;
$num2 = 7;
$num3 = 20;

// Comparar los números para encontrar el mayor
if ($num1 > $num2 && $num1 > $num3) {
echo "El número mayor es: $num1";
} elseif ($num2 > $num1 && $num2 > $num3) {
echo "El número mayor es: $num2";
} else {
echo "El número mayor es: $num3";
}