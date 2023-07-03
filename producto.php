<?php
class Producto {
    private $ID;
    private $descripcion;
    private $stock;
    private $nombre;
    private $precioUnit;

    public function __construct($ID,$descripcion,$stock,$nombre,$precioUnit){
        $this->ID = $ID;
        $this->descripcion = $descripcion;
        $this->stock = $stock;
        $this->nombre = $nombre;
        $this->precioUnit = $precioUnit;    
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

    public function setStock($s) {
        $this->stock = $s;
    }
    public function getStock() {
        return $this->stock;
    }

    public function setNombre($n) {
        $this->nombre = $n;
    }
    public function getNombre(){
        return $this->nombre;
    }

    public function setPrecio($p) {
        $this->precioUnit = $p;
    }

    public function getPrecio() {
        return $this->precioUnit;
    }

    public function __toString(){
        return $this->ID.",".$this->descripcion.",".$this->stock.",".$this->nombre.",".$this->precioUnit;
    }
}