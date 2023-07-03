<?php
class Lentes {
    private $ID;
    private $tipo;
    private $material;
    private $graduacion;

    public function __construct($ID,$tipo,$material,$graduacion){
        $this->ID = $ID;
        $this->tipo = $tipo;
        $this->material = $material;
        $this->graduacion = $graduacion;;    
    }

    public function setID($ID) {
        $this->ID = $ID;
    }
    public function getID() {
        return $this->ID;
    }

    public function setTipo($t) {
        $this->tipo = $t;
    }
    public function getTipo() {
        return $this->tipo;
    }

    public function setGraduacion($g) {
        $this->graduacion = $g;
    }
    public function getGraduacion(){
        return $this->graduacion;
    }

    public function setMaterial($m) {
        $this->material = $m;
    }
    public function getMaterial() {
        return $this->material;
    }

    public function __toString(){
        return $this->ID.",".$this->tipo.",".$this->material.",".$this->graduacion;
    }
}