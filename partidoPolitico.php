<?php

require_once('casoCorrupcion.php');
require_once('personajes.php');

class PartidoPolitico{

 public $nombre;
 public $fecha = date(now);
 public $estado;

    function __construct($nombre,$fecha,$estado){
        $this->_nombre  = $nombre;
        $this->_fecha  = $fecha;
        $this->_estado  = $estado;
    }

      
    

}

$caso = new CasoCorrupcion();
$caso->numero("128137812783127688");
$caso->nombreCaso("TramaGürtel");
$caso->cantidadRobada("121213123");

$caso = new Personaje();
$caso->nombre("Putin");
$caso->direccion("Rusia");
$caso->nivelCaradura("12");