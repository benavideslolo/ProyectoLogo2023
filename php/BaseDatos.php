<?php
class BaseDatos
{
    /********************************************************************************/
    private $servidor;      // En Xampp es "localhost"
    private $usuario;       // En Xampp es "root"
    private $password;      // En Xampp es ""
    private $base_datos;    // base datos en phpmyadmin
    private $conexion;      // Para las operaciones con MySQL
    /********************************************************************************/
    public function __construct()
    {
        $this->servidor = "localhost";
        $this->usuario = "root";
        $this->password = "";
        $this->base_datos = "optica";
        $this->conexion = $this->nueva("localhost", "root", "", "optica");
    }
    /*******************************************************************************/
    private function nueva($server, $user, $pass, $base)
    {
        try {
            $conectar = mysqli_connect($server, $user, $pass, $base);
        } catch (Exception $ex) {
            die($ex->getMessage());
        }
        return $conectar;
    }
    /********************************************************************************/
    /*********************************USUARIOS***************************************/
    /********************************************************************************/
    public function ingresarUsuario($usuario)
    {
        $cedula = $usuario->getCedula();
        $correoE = $usuario->getCorreoE();
        $nombre = $usuario->getNombre();
        $apellido = $usuario->getApellido();
        $contra = $usuario->getContraseña();
        $telefono = $usuario->getTelefono();
        $direccion = $usuario->getDireccion();
        $rol = $usuario->getRol();
        $ingresar = "INSERT INTO usuario VALUES('$cedula','$correoE','$nombre','$apellido','$contra','$telefono','$direccion','$rol');";
        return mysqli_query($this->conexion, $ingresar);
    }
    /********************************************************************************/
    public function eliminarUsuario($correoE)
    {
        $eliminar = "DELETE FROM usuario WHERE correoE='$correoE';";
        return mysqli_query($this->conexion, $eliminar);
    }
    /********************************************************************************/
    public function listaUsuarios()
    {
        $resultado = mysqli_query($this->conexion, "SELECT * FROM usuario");
        $arreglo = mysqli_fetch_all($resultado, MYSQLI_ASSOC);
        return $arreglo;
    }
    /********************************************************************************/
    public function contarUsuarios()
    {
        $resultado = mysqli_query($this->conexion, "SELECT COUNT(correoE) FROM usuario");
        $cantidad = mysqli_fetch_row($resultado);
        var_dump($cantidad);
        return $cantidad[0];
    }
    /********************************************************************************/
    public function modContraseñaU($correoE, $pass)
    {
        $update = "UPDATE usuario SET contraseña = '$pass' WHERE correoE ='$correoE';";
        return mysqli_query($this->conexion, $update);
    }
    /********************************************************************************/
    public function modUsuario($nombre, $apellido, $telefono, $direccion, $correoE)
    {
        if ($nombre != NULL) {
            $updateNombre = "nombre = '$nombre',";
        }
        if ($apellido != NULL) {
            $updateApellido = "apellido = '$apellido',";
        }
        if ($telefono != NULL) {
            $updateTel = "telefono = '$telefono',";
        }
        if ($direccion != NULL) {
            $updateDir = "direccion = '$direccion'";
        }
        echo "llegue";
        $UPDATE= "UPDATE usuario SET $updateNombre $updateApellido $updateTel $updateDir WHERE correoE='$correoE'";
        mysqli_query($this->conexion, $UPDATE);
    }
    /********************************************************************************/
    /* public function corroborarContraseña($correoE,$contraseña){
        if(mysqli_query($this->conexion, "SELECT contra FROM usuario WHERE correoE = '$correoE'") = $contraseña){
            $logUsuario = true;
        }else{
            $logUsuario = false;
        }
        return $logUsuario;
    }*/
    /********************************************************************************/
    public function corroborarRol($correoE)
    {
        $rol = mysqli_query($this->conexion, "SELECT rol FROM usuario WHERE correoE = '$correoE'");
        return $rol;
    }
    /********************************************************************************/
    /*********************************PRODUCTOS**************************************/
    /********************************************************************************/
    public function ingresarProducto($producto)
    {
        $descripcion = $producto->getDescripcion();
        $nombre = $producto->getNombre();
        $stock = $producto->getStock();
        $precio = $producto->getPrecio();
        $ingresar = "INSERT INTO `producto`(`nombre`,`descripcion`,`stock`,`precio_unit`) VALUES('$nombre','$descripcion','$stock','$precio');";
        return mysqli_query($this->conexion, $ingresar);
    }
    /********************************************************************************/
    public function eliminarProducto($IDP)
    {
        $eliminar = "DELETE FROM producto WHERE ID='$IDP'";
        return mysqli_query($this->conexion, $eliminar);
    }
    /********************************************************************************/
    public function listaProductos()
    {
        $resultado = mysqli_query($this->conexion, "SELECT * FROM producto");
        $arreglo = mysqli_fetch_all($resultado, MYSQLI_ASSOC);
        return $arreglo;
    }
    /********************************************************************************/
    public function modProducto($ID,$nombre,$descripcion,$stock,$precio)
    {
        if ($nombre != NULL) {
            $updateNombre = "nombre = '$nombre',";
        }else{
            $updateNombre = '';
        }
        if ($descripcion != NULL) {
            $updateDescripcion = "descripcion = '$descripcion',";
        }else{
            $updateDescripcion = '';
        }
        if ($stock != NULL) {
            $updateStock = "stock = '$stock',";
        }else{
            $updateStock = '';
        }
        if ($precio != NULL) {
            $updatePrecio = "precio_unit = '$precio'";
        }else{
            $updatePrecio = '';
        }
        $UPDATE= "UPDATE producto SET $updateNombre $updateDescripcion $updateStock $updatePrecio WHERE ID=$ID;";
        return mysqli_query($this->conexion, $UPDATE);
    }
    /********************************************************************************/
    /*********************************PROVEEDORES************************************/
    /********************************************************************************/
    public function ingresarProveedor($proveedor)
    {
        $nombre = $proveedor->getNombre();
        $direccion = $proveedor->getDireccion();
        $telefono = $proveedor->getTelefono();
        $correoE = $proveedor->getCorreoE();
        $ingresar = "INSERT INTO `proveedores`(`nombre`,`direccion`,`telefono`,`correoE`) VALUES('$nombre','$direccion','$telefono','$correoE');";
        return mysqli_query($this->conexion, $ingresar);
    }
    /********************************************************************************/
    public function eliminarProveedor($IDP)
    {
        $eliminar = "DELETE FROM proveedores WHERE ID='$IDP'";
        return mysqli_query($this->conexion, $eliminar);
    }
    /********************************************************************************/
    public function listaProveedores()
    {
        $resultado = mysqli_query($this->conexion, "SELECT * FROM proveedores");
        $arreglo = mysqli_fetch_all($resultado, MYSQLI_ASSOC);
        return $arreglo;
    }
    /********************************************************************************/
    public function modProveedor($ID,$nombre,$direccion,$telefono,$correo)
    {
        if ($nombre != NULL) {
            $updateNombre = "nombre = '$nombre',";
        }else{
            $updateNombre = '';
        }
        if ($direccion != NULL) {
            $updateDireccion = "direccion = '$direccion',";
        }else{
            $updateDireccion = '';
        }
        if ($telefono != NULL) {
            $updateTelefono = "telefono = '$telefono',";
        }else{
            $updateTelefono = '';
        }
        if ($correo != NULL) {
            $updateCorreo = "correoE = '$correo'";
        }else{
            $updateCorreo = '';
        }
        $UPDATE=  "UPDATE proveedores SET $updateNombre $updateDireccion $updateTelefono $updateCorreo WHERE ID='$ID'";
        return mysqli_query($this->conexion, $UPDATE);
    }
    /********************************************************************************/
    /*********************************SUCURSALES*************************************/
    /********************************************************************************/
    public function ingresarSucursal($sucursal)
    {
        $direccion = $sucursal->getDireccion();
        $nombre = $sucursal->getNombre();
        $telefono = $sucursal->getTelefono();
        $ingresar = "INSERT INTO `sucursales`(`nombre`,`direccion`,`telefono`) VALUES('$nombre','$direccion','$telefono');";
        return mysqli_query($this->conexion, $ingresar);
    }
    /********************************************************************************/
    public function eliminarSucursal($ID)
    {
        $eliminar = "DELETE FROM sucursales WHERE ID='$ID'";
        return mysqli_query($this->conexion, $eliminar);
    }
    /********************************************************************************/
    public function listaSucursales()
    {
        $resultado = mysqli_query($this->conexion, "SELECT * FROM sucursales");
        $arreglo = mysqli_fetch_all($resultado, MYSQLI_ASSOC);
        return $arreglo;
    }
    /********************************************************************************/
    public function modSucursal($ID,$nombre,$direccion,$telefono)
    {
        if ($nombre != NULL) {
            $updateNombre = "nombre = '$nombre',";
        }else{
            $updateNombre = '';
        }
        if ($direccion != NULL) {
            $updateDireccion = "direccion = '$direccion',";
        }else{
            $updateDireccion = '';
        }
        if ($telefono != NULL) {
            $updateTelefono = "telefono = '$telefono'";
        }else{
            $updateTelefono = '';
        }
        $UPDATE= "UPDATE sucursales SET $updateNombre $updateDireccion $updateTelefono WHERE ID='$ID'";
        return mysqli_query($this->conexion, $UPDATE);
    }
    /********************************************************************************/
    /*********************************SUCURSALES*************************************/
    /********************************************************************************/
}
