<?php
class Coche {
    private static $numRuedas = 4;
    public $color;
    private $posx;
    private $posy;
    private $velocidad;

    function mover($x,  $y){
        $this->posx = $x;
        $this->posy = $y;
    }

    function pitar (){
        return "Beeep beep";
    }

    function getPosicion(): String{
        return "x = $this->posx, y= $this->posy";
    }

}