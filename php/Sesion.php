<?php
class  Sesion {
    private $ID_Usuario;

    public function __construct($ID_Usuario,$nombre){
            
    }

    public function __toString(){
        return $this->ID_Usuario.",".$this->correo.",".$this->nombre.",".$this->apellido.",".$this->telefono.",".$this->rol;
    }
}