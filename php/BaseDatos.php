<?php
class BaseDatos {
/********************************************************************************/
    private $servidor;      // En Xampp es "localhost"
    private $usuario;       // En Xampp es "root"
    private $password;      // En Xampp es ""
    private $base_datos;    // base datos en phpmyadmin
    private $conexion;      // Para las operaciones con MySQL
/********************************************************************************/	
    public function __construct() {
        $this->servidor = "localhost";
        $this->usuario = "root";
		$this->password = "";
		$this->base_datos = "optica";
		$this->conexion = $this->nueva("localhost","root","","optica");
    }
/*******************************************************************************/	
    private function nueva($server,$user,$pass,$base) {
        try {
            $conectar = mysqli_connect($server,$user,$pass,$base);
	    } catch (Exception $ex) {
            die($ex->getMessage());
	    }
	    return $conectar;
    }	
/********************************************************************************/
/*********************************USUARIOS***************************************/
/********************************************************************************/
    public function ingresarUsuario($cliente) {
        $nombre = $cliente->parent::getNombre();
        $apellido = $cliente->parent::getApellido();
        $correoE = $cliente->parent::getContraseña();
        $contra = $cliente->parent::getDireccion();
        $rol = $cliente->parent::getRol();
        $telefono = $cliente->getTelefono();	
        $ingresar1 = "insert into usuario values('$nombre','$apellido','$correoE','$contra','$rol');";
        $ingresar2 = "insert into cliente values('$telefono');";
        return mysqli_query($this->conexion, $ingresar1, $ingresar2);
    }
/********************************************************************************/
    public function eliminarUsuario($cliente) {
        $IDU = $cliente->parent::getIDUsuario();	
        $eliminar = "delete * from usuario where ID=$IDU";
    return mysqli_query($this->conexion, $eliminar);
    }
/********************************************************************************/
    public function listaUsuarios() {
        $resultado = mysqli_query($this->conexion, "select * from usuario");
        $arreglo = mysqli_fetch_all($resultado,MYSQLI_ASSOC);
    return $arreglo;
    }
/********************************************************************************/
public function modUsuario($correoE, $pass) {
    $update = "update usuario set contraseña = $pass where correoE = $correoE;";
    return mysqli_query($this->conexion, $update);
}
/********************************************************************************/
/*********************************PRODUCTOS**************************************/
/********************************************************************************/
public function ingresarProducto($producto) {
    $descripcion = $producto->getDescripcion();
    $nombre = $producto->getNombre();
    $stock = $producto->getStock();
    $precio = $producto->getPrecio();	
    $ingresar = "insert into producto values('$nombre','$descripcion','$stock','$precio');";
    return mysqli_query($this->conexion, $ingresar);
}
/********************************************************************************/
public function eliminarProducto($producto) {
    $IDP = $producto->getID();	
    $eliminar = "delete * from producto where ID=$IDP";
return mysqli_query($this->conexion, $eliminar);
}
/********************************************************************************/
public function listaProductos() {
    $resultado = mysqli_query($this->conexion, "select * from producto");
    $arreglo = mysqli_fetch_all($resultado,MYSQLI_ASSOC);
return $arreglo;
}
/********************************************************************************/
public function modProducto($ID, $campo) {
$consulta = "update producto set  precioUnit = $campo where ID = $ID;";
return mysqli_query($this->conexion, $consulta);
}
/********************************************************************************/
public function reconocerProducto($producto){
    $IDP = $producto->getID();
    $precio = mysqli_query($this->conexion, "select precioUnit from producto where ID=$IDP");
    $producto->setPrecioUnit($precio);
    return $producto;
}
/********************************************************************************/
/*********************************PROVEEDORES************************************/
/********************************************************************************/
public function ingresarProveedor($proveedor) {
    $nombre = $proveedor->getNombre();
    $direccion = $proveedor->getDireccion();
    $telefono = $proveedor->getTelefono();
    $correoE = $proveedor->getCorreoE();	
    $ingresar = "insert into proveedor values('$nombre','$direccion','$telefono','$correoE');";
    return mysqli_query($this->conexion, $ingresar);
}
/********************************************************************************/
public function eliminarProveedor($proveedor) {
    $IDP = $proveedor->getID();	
    $eliminar = "delete * from proveedor where ID=$IDP";
return mysqli_query($this->conexion, $eliminar);
}
/********************************************************************************/
public function listaProveedores() {
    $resultado = mysqli_query($this->conexion, "select * from proveedores");
    $arreglo = mysqli_fetch_all($resultado,MYSQLI_ASSOC);
return $arreglo;
}
/********************************************************************************/
public function modProveedor($ID, $campo) {
$consulta = "update proveedor set telefono = $campo where ID = $ID;";
return mysqli_query($this->conexion, $consulta);
}
/********************************************************************************/
/*********************************SUCURSALES*************************************/
/********************************************************************************/
public function ingresarSucursal($sucursal) {
    $descripcion = $sucursal->getDescripcion();
    $nombre = $sucursal->getNombre();
    $telefono = $sucursal->getTelefono();	
    $ingresar = "insert into sucursal values('$nombre','$descripcion','$telefono');";
    return mysqli_query($this->conexion, $ingresar);
}
/********************************************************************************/
public function eliminarSucursal($sucursal) {
    $IDP = $sucursal->getID();	
    $eliminar = "delete * from sucursal where ID=$IDP";
return mysqli_query($this->conexion, $eliminar);
}
/********************************************************************************/
public function listaSucursales() {
    $resultado = mysqli_query($this->conexion, "select * from sucursal");
    $arreglo = mysqli_fetch_all($resultado,MYSQLI_ASSOC);
return $arreglo;
}
/********************************************************************************/
public function modSucursal($ID, $campo) {
$consulta = "update sucursal set  precioUnit = $campo where ID = $ID;";
return mysqli_query($this->conexion, $consulta);
}
/********************************************************************************/
/*********************************SUCURSALES*************************************/
/********************************************************************************/
}