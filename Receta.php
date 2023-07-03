<?php
class Receta {
    private $ID;
    private $descripcion;
    private $ID_cliente;

    public function __construct($ID,$descripcion,$ID_cliente){
        $this->ID = $ID;
        $this->descripcion = $descripcion;
        $this->ID_cliente = $ID_cliente;
        $this->nombre = $nombre;;    
    }

    public function setIDreceta($IDR) {
        $this->ID = $IDR;
    }
    public function getIDReceta() {
        return $this->ID;
    }

    public function setDescripcion($d) {
        $this->descripcion = $d;
    }
    public function getDescripcion() {
        return $this->descripcion;
    }

    public function setID_cliente($de) {
        $this->ID_cliente = $de;
    }

    public function getID_cliente() {
        return $this->ID_cliente;
    }

    public function __toString(){
        return $this->ID.",".$this->descripcion.",".$this->ID_cliente;
    }
}