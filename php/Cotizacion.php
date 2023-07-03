<?php
class Cotizacion {
    private $ID;
    private $fecha;
    private $total;
    private $ID_cliente;

    public function __construct($ID,$fecha,$total,$ID_cliente){
        $this->ID = $ID;
        $this->fecha = $fecha;
        $this->total = $total;
        $this->ID_cliente = $ID_cliente;;    
    }

    public function setID($IDC) {
        $this->ID = $IDC;
    }
    public function getID() {
        return $this->ID;
    }

    public function setfecha($f) {
        $this->fecha = $f;
    }
    public function getfecha() {
        return $this->fecha;
    }

    public function setIDCliente($IDC) {
        $this->ID_cliente = $IDC;
    }
    public function getIDCliente(){
        return $this->ID_cliente;
    }

    public function setTotal($t) {
        $this->total = $t;
    }

    public function getTotal() {
        return $this->total;
    }

    public function __toString(){
        return $this->ID.",".$this->ID_cliente.",".$this->fecha.",".$this->total;
    }
}