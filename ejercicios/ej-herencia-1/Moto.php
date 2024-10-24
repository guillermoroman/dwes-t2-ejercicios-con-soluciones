<?php
require_once 'Vehiculo.php';

class Moto extends Vehiculo {
    public function __construct($color, $vMax) {
        parent::__construct($color, $vMax);
        $this->numRuedas = 2; // Valor por defecto para motos
    }

    // Método específico de Moto
    public function hacerCaballito() {
        $resultado = rand(0, 1);
        if ($resultado === 0) {
            return "¡Guau!";
        } else {
            return "¡Ouch!";
        }
    }

    // Sobrescribiendo el método tocarClaxon
    public function tocarClaxon() {
        return "¡Bing, bing!";
    }
}