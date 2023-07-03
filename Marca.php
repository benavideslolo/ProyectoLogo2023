<?php
class Marca {
    private $ID;
    private $nombre;
    private $pais_origen;

    public function __construct($ID,$nombre,$pais_origen,){
        $this->ID = $ID;
        $this->nombre = $nombre;
        $this->pais_origen = $pais_origen;    
    }

    public function setID($ID) {
        $this->ID = $ID;
    }
    public function getID() {
        return $this->ID;
    }

    public function setNombre($n) {
        $this->nombre = $n;
    }
    public function getNombre() {
        return $this->nombre;
    }

    public function setPais($p) {
        $this->pais_origen = $p;
    }
    public function getPais() {
        return $this->pais_origen;
    }

    public function __toString(){
        return $this->ID.",".$this->nombre.",".$this->pais_origen;
    }
}