<?php
    date_default_timezone_set('America/Montevideo');
    require_once 'Administrador.php';
    require_once 'Cliente.php';
    require_once 'Convenio.php';
    require_once 'Lentes.php';
    require_once 'BaseDatos.php';
    require_once 'Pedido.php';
    require_once 'Proveedor.php';
    require_once 'Sucursal.php';
    require_once 'Receta.php';
    require_once 'Sesion.php';
    require_once 'Venta.php';
    require_once 'Usuario.php';
    class Controlador{
    
        private $base;
    
        public function __construct(){
            $this->base = new BaseDatos();
        }               

        /* Funciones */

        public function altaUsuario($nombre,$apellido,$correoE,$contra,$direccion,$telefono) {
            $ingreso = date("d/m/y - H:i:s");
            $cliente = new Cliente($nombre,$apellido,$correoE,$contra,$direccion,NULL,$telefono);
            $this->base->ingresarUsuario($cliente);
        }

        public function bajaUsuario($ID) {
            $this->base->eliminarUsuario($ID);
        }

        public function modUsuario($correoE) {
            $pass = header('Location: .php.html');
            $this->base->modUsuario($correoE, $pass);
        }

        public function listaUsuarios() {
            return $this->base->listaUsuarios();
        }

        public function altaProducto($descripcion,$stock,$nombre,$precioUnit) {
            $producto = new Producto(NULL,$descripcion,$stock,$nombre,$precioUnit);
            $this->base->ingresarProducto($producto);
        }

        public function bajaProducto($ID) {
            $this->base->eliminarProducto($ID);
        }

        public function modProducto($ID) {
            $campo = header('Location: .php.html');
            $this->base->modProducto($ID, $campo);
        }

        public function listaProductos() {
            return $this->base->listaProductos();
        }

        public function altaProveedor($correoE,$nombre,$direccion,$telefono) {
            $vacio = null;
            $proveedor = new Proveedor($vacio,$nombre,$direccion,$telefono,$correoE);
            $this->base->ingresarProveedor($proveedor);
        }

        public function bajaProveedor($ID) {
            $this->base->eliminarProveedor($ID);
        }

        public function modProveedor($ID) {
            $campo = header('Location: .php.html');
            $this->base->modProducto($ID, $campo);
        }

        public function listaProveedor() {
            return $this->base->listaProveedores();
        }

        public function altaSucursal($nombre,$direccion,$telefono) {
            $sucursal = new Sucursal(NULL,$nombre,$direccion,$telefono);
            $this->base->ingresarProducto($sucursal);
        }

        public function bajaSucursal($ID) {
            $this->base->eliminarProducto($ID);
        }

        public function modSucursal($ID) {
            $campo = header('Location: .php.html');
            $this->base->modProducto($ID, $campo);
        }

        public function listaSucursal() {
            print_r($this->base->listaSucursales());
        } 
    }
