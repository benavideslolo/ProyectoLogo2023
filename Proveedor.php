<?php
class Proveedor {
    private $ID;
    private $nombre;
    private $direccion;
    private $telefono;
    private $correoE;

    public function __construct($ID,$nombre,$direccion,$telefono,$correoE){
        $this->ID = $ID;
        $this->nombre = $nombre;
        $this->direccion = $direccion;
        $this->correoE = $correoE;
        $this->telefono = $telefono;    
    }

    public function setIDproveedor($IDP) {
        $this->ID = $IDP;
    }
    public function getIDproveedor() {
        return $this->ID;
    }

    public function setNombre($n) {
        $this->nombre = $n;
    }
    public function getNombre() {
        return $this->nombre;
    }

    public function setDireccion($d) {
        $this->direccion = $d;
    }
    public function getDireccion() {
        return $this->direccion;
    }

    public function setCorreo($CE) {
        $this->correoE = $CE;
    }
    public function getCorreo() {
        return $this->correoE;
    }

    public function setTelefono($t) {
        $this->telefono = $t;
    }
    public function getTelefono() {
        return $this->telefono;
    }

    public function __toString(){
        return $this->ID.",".$this->correo.",".$this->nombre.",".$this->direccion.",".$this->telefono;
    }
}