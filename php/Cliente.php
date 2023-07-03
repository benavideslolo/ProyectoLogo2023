<?php
class Cliente extends Usuario {
    private $ID_Cliente;
    private $telefono;

    public function __construct($nombre,$apellido,$correoE,$contra,$direccion,$ID,$telefono){
        parent::__construct($ID,$nombre,$apellido,$correoE,$contra,$direccion);
        $this->ID_Cliente = $ID;
        $this->telefono = $telefono;    
    }

    public function setIDCliente($ID) {
        $this->ID_Cliente = $ID;
    }
    public function getIDCliente() {
        return $this->ID_Cliente;
    }

    public function setTelefono($t) {
        $this->telefono = $t;
    }
    public function getTelefono(){
        return $this->telefono;
    }

    public function __toString(){
        return parent::__toString().",".$this->ID_Cliente.",".$this->telefono;
    }
}