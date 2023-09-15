<?php
class Sucursal {
    private $ID;
    private $nombre;
    private $direccion;
    private $telefono;

    public function __construct($ID,$nombre,$direccion,$telefono){
        $this->ID = $ID;
        $this->nombre = $nombre;
        $this->direccion = $direccion;
        $this->telefono = $telefono;    
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

    public function setTelefono($t) {
        $this->telefono = $t;
    }
    public function getTelefono(){
        return $this->telefono;
    }

    public function setDireccion($d) {
        $this->direccion = $d;
    }
    public function getDireccion() {
        return $this->direccion;
    }

    public function __toString(){
        return $this->ID.",".$this->nombre.",".$this->direccion.",".$this->telefono;
    }
}