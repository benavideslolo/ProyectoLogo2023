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
require_once 'Carrito.php';
class Controlador
{

    private $base;
    private $sesion;
    public function __construct()
    {
        $this->base = new BaseDatos();
        $sesion = new Sesion();
    }

    /****************'USUARIOS'****************/
    /****************'USUARIOS'****************/
    /****************'USUARIOS'****************/

    public function altaUsuario($cedula, $correoE, $nombre, $apellido, $contra, $direccion, $telefono)
    {
        $cliente = new Usuario($cedula, $correoE, $nombre, $apellido, $contra, $direccion, $telefono);
        $this->base->ingresarUsuario($cliente);
    }

    public function bajaUsuario($correoE)
    {
        $this->base->eliminarUsuario($correoE);
    }

    public function modContraseñaU($correoE)
    {
        $pass = header('Location: .php.html');
        $this->base->modContraseñaU($correoE, $pass);
    }

    public function modUsuario($nombre, $apellido, $telefono, $direccion, $correoE)
    {
        $this->base->modUsuario($nombre, $apellido, $telefono, $direccion, $correoE);
    }

    public function listaUsuarios()
    {
        return $this->base->listaUsuarios();
    }

    public function iniciarSesion($correoE, $contraseña)
    {
        $logUsuario = false;
        $logUsuario = $this->base->corroborarContraseña($correoE, $contraseña);
        if ($logUsuario == TRUE) {
            if ($this->base->corroborarRol($correoE) == 'Administrador') {
                header('Location: ../indexadmin.html');
                $numero = $this->base->contarUsuarios();
                $dir[] = $this->base->traerDireccion($correoE);
                $tel[] = $this->base->traerTelefono($correoE);
                $rol[] = $this->base->traerRol($correoE);
                $this->sesion->setCorreo($numero, $correoE);
                $this->sesion->setDireccion($dir[0], $dir[0]);
                $this->sesion->setTelefono($tel[0], $tel[0]);
                $this->sesion->setRol($rol[0],$tel[0]);
            } else {
                header('Location: ../indexmenu.html');
                $numero = $this->base->contarUsuarios();
                $dir[] = $this->base->traerDireccion($correoE);
                $tel[] = $this->base->traerTelefono($correoE);
                $this->sesion->setCorreo($numero, $correoE);
                $this->sesion->setDireccion($dir[0], $dir[0]);
                $this->sesion->setTelefono($tel[0], $tel[0]);
            }
        } else {
            header('Location: ../login.html');
        }
    }

    public function cerrarSesion()
    {
        session_destroy();
        header('Location: ../index.html');
    }

    public function mensajeConsulta($previoMsj,$mensaje){
        $IDusuario = $this->sesion->getCorreo();
        $rol[] = $this->base->traerRol($IDusuario);
        $this->base->altaMensaje($IDusuario, $rol, $mensaje, $previoMsj);
    }

    /****************'PRODUCTOS'****************/
    /****************'PRODUCTOS'****************/
    /****************'PRODUCTOS'****************/

    public function altaProducto($nombre, $descripcion, $stock, $precioUnit)
    {
        $producto = new Producto(NULL, $nombre, $descripcion, $stock, $precioUnit);
        $this->base->ingresarProducto($producto);
    }

    public function bajaProducto($ID)
    {
        $this->base->eliminarProducto($ID);
    }

    public function modProducto($ID, $nombre, $descripcion, $stock, $precio)
    {
        $this->base->modProducto($ID, $nombre, $descripcion, $stock, $precio);
    }

    public function listaProductos()
    {
        return $this->base->listaProductos();
    }

    public function creacionCarrito($ID,$cant){
        $sesion = $this->sesion->setProducto($ID,$cant);
        $carrito = new carrito($ID,$cant);
        $correo= $this->sesion->getCorreo();
        $this->base->altaCarrito($carrito,$correo,$sesion);
    }

    /*public function compraCarrito(){
        $cantidadProd = $this->base->cantProductos();
        for($i=0; $i==$cantidadProd;$i++){
            $producto = $this->sesion->getProducto($i);
            $this->base->
        }
    }*/

    /****************'PROVEEDORES'****************/
    /****************'PROVEEDORES'****************/
    /****************'PROVEEDORES'****************/

    public function altaProveedor($nombre, $direccion, $telefono, $correoE)
    {
        $proveedor = new Proveedor(NULL, $nombre, $direccion, $telefono, $correoE);
        $this->base->ingresarProveedor($proveedor);
    }

    public function bajaProveedor($ID)
    {
        $this->base->eliminarProveedor($ID);
    }

    public function modProveedor($ID, $nombre, $direccion, $telefono, $correo)
    {

        $this->base->modProveedor($ID, $nombre, $direccion, $telefono, $correo);
    }

    public function listaProveedor()
    {
        return $this->base->listaProveedores();
    }

    public function altaSucursal($nombre, $direccion, $telefono)
    {
        $sucursal = new Sucursal(NULL, $nombre, $direccion, $telefono);
        $this->base->ingresarSucursal($sucursal);
    }

    public function bajaSucursal($ID)
    {
        $this->base->eliminarSucursal($ID);
    }

    public function modSucursal($ID, $nombre, $direccion, $telefono)
    {
        $this->base->modSucursal($ID, $nombre, $direccion, $telefono);
    }

    public function listaSucursales()
    {
        return ($this->base->listaSucursales());
    }
}
