<?php
class Empleado {
    private $ID;
    private $ID_Usuario;
    private $ID_Sucursal;
    private $Cargo;

    public function __construct($ID,$ID_Usuario,$ID_Sucursal,$Cargo){
        $this->ID = $ID;
        $this->ID_Usuario = $ID_Usuario;
        $this->ID_Sucursal = $ID_Sucursal;
        $this->Cargo = $Cargo;    
    }

    public function setID($ID) {
        $this->ID = $ID;
    }
    
    public function getID() {
        return $this->ID;
    }

    public function setIDUsuario($IDU) {
        $this->ID_Usuario = $IDU;
    }

    public function getIDUsuario() {
        return $this->ID_Usuario;
    }

    public function setCargo($c) {
        $this->Cargo = $c;
    }

    public function getCargo(){
        return $this->Cargo;
    }

    public function setIDSucursal($IDS) {
        $this->ID_Sucursal = $IDS;
    }

    public function getIDSucursal() {
        return $this->ID_Sucursal;
    }

    public function __toString(){
        return $this->ID.",".$this->Cargo.",".$this->ID_Usuario.",".$this->ID_Sucursal;
    }
}