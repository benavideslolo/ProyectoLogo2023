<?php
class Usuario {
    private $ID_Usuario;
    private $apellido;
    private $correoE;
    private $nombre;
    private $contraseña;
    private $direccion;
    private $rol;

    public function __construct($ID_Usuario,$nombre,$apellido,$correoE,$contraseña,$direccion){
        $this->ID_Usuario = $ID_Usuario;
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->contraseña = $contraseña;
        $this->correoE = $correoE;
        $this->direccion = $direccion;
        $this->rol = "Cliente";    
    }

    function setIDusuario($IDU) {
        $this->ID_Usuario = $IDU;
    }
    public function getIDusuario() {
        return $this->ID_Usuario;
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

    public function setCorreo($CE) {
        $this->correoE = $CE;
    }
    public function getCorreo() {
        return $this->correoE;
    }

    public function setContraseña($c) {
        $this->contraseña = $c;
    }
    public function getContraseña(){
        return $this->contraseña;
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
        return $this->ID_Usuario.",".$this->correoE.",".$this->nombre.",".$this->apellido.",".$this->rol.",".$this->direccion;
    }
}