<?php
class Carrito {
    private $productos;
    
    public function __construct($producto,$cantidad){
        $this->productos[$producto]=$cantidad;
    }

    public function setProductos($producto, $cantidad){
        $this->productos[$producto]=$cantidad;
    }

    public function getProductos(){
        return $this->productos;
    }

    public function restarProductos($producto){
        $this->productos[$producto]=NULL;
    }

    public function recorrerProductos(){
        for($i=0;count($this->productos);$i++){
            $pedido[$i] = $i;
            $pedido[$i] += "$this->productos[$i]";
            echo $pedido[$i];
        }
        return $pedido;
    }

    public function __toString(){
        return $this->productos;
    }
}