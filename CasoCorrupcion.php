<?php

class CasoCorrupcion{
    public $numero;
    public $nombreCaso = "";
    public $cantidadRobada;
    
    public function addCasoCorrupcion($nombreCaso,$numero, $cantidadRobada){
        $this->nombre = $nombreCaso;
        $this->numero = $numero;
        $this->cantidadRobada = $cantidadRobada;
    }


}