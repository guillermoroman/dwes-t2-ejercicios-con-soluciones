<?php
// Declarar dos variables con los números
$num1 = 10;
$num2 = 5;

// Declarar la variable con el operador
$operador = '+';

// Realizar la operación usando switch
switch ($operador) {
    case '+':
        echo "Resultado de la suma: " . ($num1 + $num2);
        break;
    case '-':
        echo "Resultado de la resta: " . ($num1 - $num2);
        break;
    case '*':
        echo "Resultado de la multiplicación: " . ($num1 * $num2);
        break;
    case '/':
        if ($num2 != 0) {
            echo "Resultado de la división: " . ($num1 / $num2);
        } else {
            echo "Error: No se puede dividir por cero.";
        }
        break;
    default:
        echo "Operador no válido.";
}