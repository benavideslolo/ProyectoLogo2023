<?php
class Usuario {
    private $cedula;
    private $apellido;
    private $correoE;
    private $nombre;
    private $contraseña;
    private $direccion;
    private $telefono;
    private $rol;

    public function __construct($cedula,$correoE,$nombre,$apellido,$contraseña,$telefono,$direccion){
        $this->cedula = $cedula;
        $this->correoE = $correoE;
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->contraseña = $contraseña;
        $this->telefono = $telefono;
        $this->direccion = $direccion;
        $this->rol = "Cliente";    
    }

    function setCedula($c) {
        $this->cedula = $c;
    }
    public function getCedula() {
        return $this->cedula;
    }

    public function setNombre($n) {
        $this->nombre = $n;
    }
    public function getNombre() {
        return $this->nombre;
    }

    public function setApellido($a) {
        $this->apellido = $a;
    }
    public function getApellido() {
        return $this->apellido;
    }

    public function setCorreoE($CE) {
        $this->correoE = $CE;
    }
    public function getCorreoE() {
        return $this->correoE;
    }

    public function setContraseña($c) {
        $this->contraseña = $c;
    }
    public function getContraseña(){
        return $this->contraseña;
    }

    public function setTelefono($t) {
        $this->telefono = $t;
    }
    public function getTelefono() {
        return $this->telefono;
    }

    public function setDireccion($d) {
        $this->direccion = $d;
    }
    public function getDireccion() {
        return $this->direccion;
    }

    public function getRol() {
        return $this->rol;
    }

    public function __toString(){
        return $this->cedula.",".$this->correoE.",".$this->nombre.",".$this->apellido.",".$this->rol.",".$this->telefono.",".$this->direccion;
    }
}