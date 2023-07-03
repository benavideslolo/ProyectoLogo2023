<?php
class Convenio {
    private $ID;
    private $descripcion;
    private $descuento;
    private $nombre;

    public function __construct($ID,$descripcion,$descuento,$nombre){
        $this->ID = $ID;
        $this->descripcion = $descripcion;
        $this->descuento = $descuento;
        $this->nombre = $nombre;;    
    }

    public function setID($IDP) {
        $this->ID = $IDP;
    }
    public function getID() {
        return $this->ID;
    }

    public function setDescripcion($d) {
        $this->descripcion = $d;
    }
    public function getDescripcion() {
        return $this->descripcion;
    }

    public function setNombre($n) {
        $this->nombre = $n;
    }
    public function getNombre(){
        return $this->nombre;
    }

    public function setDescuento($de) {
        $this->descuento = $de;
    }

    public function getDescuento() {
        return $this->descuento;
    }

    public function __toString(){
        return $this->ID.",".$this->descripcion.",".$this->descuento.",".$this->nombre;
    }
}