<?php
class Venta {
    private $ID;
    private $nombre;
    private $total;
    private $ID_Cliente;

    public function __construct($ID,$nombre,$total,$ID_Cliente){
        $this->ID = $ID;
        $this->nombre = $nombre;
        $this->total = $total;
        $this->ID_Cliente = $ID_Cliente;;    
    }

    public function setID($ID) {
        $this->ID = $ID;
    }
    public function getID() {
        return $this->ID;
    }

    public function setnombre($n) {
        $this->nombre = $n;
    }
    public function getnombre() {
        return $this->nombre;
    }

    public function setID_Cliente($g) {
        $this->ID_Cliente = $g;
    }
    public function getID_Cliente(){
        return $this->ID_Cliente;
    }

    public function setTotal($t) {
        $this->total = $t;
    }
    public function getTotal() {
        return $this->total;
    }

    public function __toString(){
        return $this->ID.",".$this->nombre.",".$this->total.",".$this->ID_Cliente;
    }
}