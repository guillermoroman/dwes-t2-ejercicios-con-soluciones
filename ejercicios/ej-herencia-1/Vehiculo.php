<?php
class Vehiculo {
    protected $numRuedas;
    protected $color;
    protected $posX;
    protected $posY;
    protected $velocidad;
    protected $vMax;

    public function __construct($color, $vMax) {
        $this->numRuedas = 0; // Se definirá en las clases hijas
        $this->color = $color;
        $this->posX = 0;
        $this->posY = 0;
        $this->velocidad = 0;
        $this->vMax = $vMax;
    }

    // Getters
    public function getNumRuedas() {
        return $this->numRuedas;
    }

    public function getColor() {
        return $this->color;
    }

    public function getVelocidad() {
        return $this->velocidad;
    }

    public function getVMax() {
        return $this->vMax;
    }

    // Setters
    public function setColor($color) {
        $this->color = $color;
    }

    // Métodos
    public function acelerar($cantidad): string {
        $this->velocidad += $cantidad;
        if ($this->velocidad > $this->vMax) {
            $this->velocidad = $this->vMax;
            return "No es posible realizar la aceleración";
        }
        return "Aceleración realzada";
    }

    public function frenar($cantidad) {
        $this->velocidad -= $cantidad;
        if ($this->velocidad < 0) {
            $this->velocidad = 0;
        }
    }

    public function tocarClaxon() {
        return "¡Beep, beep!";
    }

}