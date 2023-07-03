<?php
    require_once 'Usuario.php';
class Administrador extends Usuario {
    private $ID;
    private $Area_responsabilidad;

    public function __construct($nombre,$apellido,$correoE,$contra,$direccion,$ID,$Area_responsabilidad){
        parent::__construct(NULL,$nombre,$apellido,$correoE,$contra,$direccion);
        $this->ID = $ID;
        $this->Area_responsabilidad = $Area_responsabilidad;  
    }

    public function setID($ID) {
        $this->ID = $ID;
    }
    public function getID() {
        return $this->ID;
    }

    public function setResponsabilidad($r) {
        $this->Area_responsabilidad = $r;
    }
    public function getResponsabilidad() {
        return $this->Area_responsabilidad;
    }

    public function __toString(){
        return parent::__toString().",".$this->ID.",".$this->Area_responsabilidad;
    }
}