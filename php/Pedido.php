<?php
class Pedido {
    private $ID_Pedido;
    private $fecha;
    private $total;
    private $estado;
    private $ID_cliente;

    public function __construct($ID_Pedido,$fecha,$total,$estado,$ID_cliente){
        $this->ID_Pedido = $ID_Pedido;
        $this->fecha = $fecha;
        $this->total = $total;
        $this->estado = $estado;
        $this->ID_cliente = $ID_cliente;    
    }

    public function setIDpedido($IDP) {
        $this->ID_Pedido = $IDP;
    }
    public function getIDpedido() {
        return $this->IDP;
    }

    public function setIDcliente($IDC) {
        $this->ID_cliente = $IDC;
    }
    public function getIDcliente() {
        return $this->IDC;
    }

    public function setFecha($f) {
        $this->fecha = $f;
    }
    public function getFecha() {
        return $this->fecha;
    }

    public function setTotal($t) {
        $this->total = $t;
    }
    public function getTotal() {
        return $this->total;
    }

    public function setEstado($e) {
        $this->estado = $e;
    }
    public function getEstado() {
        return $this->estado;
    }

    public function __toString(){
        return $this->ID_Pedido.",".$this->fecha.",".$this->total.",".$this->estado.",".$this->ID_cliente;
    }
}