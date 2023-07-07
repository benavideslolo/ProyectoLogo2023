<?php
    date_default_timezone_set('America/Montevideo');
    require_once 'Administrador.php';
    require_once 'Convenio.php';
    require_once 'BaseDatos.php';
    require_once 'Pedido.php';
    require_once 'Proveedor.php';
    require_once 'Sucursal.php';
    require_once 'Receta.php';
    require_once 'Sesion.php';
    require_once 'Venta.php';
    require_once 'Usuario.php';
    require_once 'Producto.php';
    class Controlador{
    
        private $base;
    
        public function __construct(){
            $this->base = new BaseDatos();
        }               

        /* Funciones */

        public function altaUsuario($cedula,$correoE,$nombre,$apellido,$contra,$direccion,$telefono) {
            $cliente = new Usuario($cedula,$correoE,$nombre,$apellido,$contra,$direccion,$telefono);
            $this->base->ingresarUsuario($cliente);
            $numero = $this->base->contarUsuarios();
            $sesion = new Sesion();
            $sesion->setIDU($numero,$correoE);
        }

        public function bajaUsuario($correoE) {
            $this->base->eliminarUsuario($correoE);
        }

        public function modContraseñaU($correoE) {
            $pass = header('Location: .php.html');
            $this->base->modContraseñaU($correoE, $pass);
        }

        public function modUsuario($nombre,$apellido,$telefono,$direccion,$correoE) {
            $this->base->modUsuario($nombre,$apellido,$telefono,$direccion,$correoE);
        }

        public function listaUsuarios() {
            return $this->base->listaUsuarios();
        }

        public function iniciarSesion($correoE,$contraseña){
            $logUsuario = false;
            //$logUsuario = $this->base->corroborarContraseña($correoE,$contraseña);
            if ($logUsuario == TRUE){
                if ($this->base->corroborarRol($correoE) == 'Admin'){
                    header ('Location: 0indexadmin.html');
                }else{
                    header ('Location: 0indexmenu.html');
                }
            }else{
                header ('Location: login.html');
            }
        }

        public function altaProducto($nombre,$descripcion,$stock,$precioUnit) {
            $producto = new Producto(NULL,$nombre,$descripcion,$stock,$precioUnit);
            $this->base->ingresarProducto($producto);
        }

        public function bajaProducto($ID) {
            $this->base->eliminarProducto($ID);
        }

        public function modProducto($ID,$nombre,$descripcion,$stock,$precio) {
            $this->base->modProducto($ID,$nombre,$descripcion,$stock,$precio);
        }

        public function listaProductos() {
            return $this->base->listaProductos();
        }

        public function altaProveedor($nombre,$direccion,$telefono,$correoE) {
            $proveedor = new Proveedor(NULL,$nombre,$direccion,$telefono,$correoE);
            $this->base->ingresarProveedor($proveedor);
        }

        public function bajaProveedor($ID) {
            $this->base->eliminarProveedor($ID);
        }

        public function modProveedor($ID,$nombre,$direccion,$telefono,$correo) {
            
            $this->base->modProveedor($ID,$nombre,$direccion,$telefono,$correo);
        }

        public function listaProveedor() {
            return $this->base->listaProveedores();
        }

        public function altaSucursal($nombre,$direccion,$telefono) {
            $sucursal = new Sucursal(NULL,$nombre,$direccion,$telefono);
            $this->base->ingresarSucursal($sucursal);
        }

        public function bajaSucursal($ID) {
            $this->base->eliminarSucursal($ID);
        }

        public function modSucursal($ID,$nombre,$direccion,$telefono) {
            $this->base->modSucursal($ID,$nombre,$direccion,$telefono);
        }

        public function listaSucursales() {
            return ($this->base->listaSucursales());
        } 
    }
