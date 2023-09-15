<?php
class IVA { 
    private $basico;
    private $minimo;

    public function __construct($basico, $minimo)
    {
        $this->basico = $basico;
        $this->minimo = $minimo;
    }

    public function setBasico($basico){
        $this->basico = $basico;
    }

    public function getBasico(){
        return $this->basico;
    }

    public function setMinimo($minimo){
        $this->minimo = $minimo;
    }

    public function getMinimo(){
        return $this->minimo;
    }

    public function __toString()
    {
        return $this->basico.",".$this->minimo;
    }
}