<?php
require_once 'Vehiculo.php';

class Coche extends Vehiculo {
    private $capacidadTotalMaletero;
    private $capacidadRestanteMaletero;
    private $numPuertas;

    public function __construct($color, $vMax, $capacidadTotalMaletero, $numPuertas) {
        parent::__construct($color, $vMax);
        $this->numRuedas = 4; // Valor por defecto para coches
        $this->capacidadTotalMaletero = $capacidadTotalMaletero;
        $this->capacidadRestanteMaletero = $capacidadTotalMaletero; // Al principio, el maletero está vacío
        $this->numPuertas = $numPuertas <= 5 ? $numPuertas : 5; // Limitar a máximo 5 puertas
    }

    // Getters
    public function getCapacidadRestanteMaletero() {
        return $this->capacidadRestanteMaletero;
    }

    public function getNumPuertas() {
        return $this->numPuertas;
    }

    // Métodos
    public function meterEnMaletero($volumen) {
        if ($volumen <= $this->capacidadRestanteMaletero) {
            $this->capacidadRestanteMaletero -= $volumen;
        } else {
            echo "No hay espacio suficiente";
        }
    }

    public function vaciarMaletero() {
        $this->capacidadRestanteMaletero = $this->capacidadTotalMaletero;
    }

    // Sobrescribiendo el método tocarClaxon
    public function tocarClaxon() {
        return "¡Honk, honk!";
    }
}