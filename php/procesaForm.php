<?php
    require_once 'Controlador.php';
    $c = new Controlador();
    switch($_POST['numero']){
        case "REGISTRARME": 
            $c->altaUsuario($_POST['cedula'],$_POST['correoE'],$_POST['nombre'],$_POST['apellido'],$_POST['contraseña'],$_POST['telefono'],$_POST['direccion']);
            break;
        case "ELIMINAR":
            $c->bajaUsuario($_POST['correoE']);
            break;
        case "MODIFICAR USUARIO":
            $c->modUsuario($_POST['nombre'],$_POST['apellido'],$_POST['telefono'],$_POST['direccion'],$_POST['correoE']);
            break;     
        case "INGRESAR PRODUCTO":
            $c->altaProducto($_POST['nombre'],$_POST['descripcion'],$_POST['stock'],$_POST['precio']);
            break;
        case "ELIMINAR PRODUCTO":
            $c->bajaProducto($_POST['ID']);
            break;    
        case "MODIFICAR PRODUCTO":
            $c->modProducto($_POST['ID'],$_POST['nombre'],$_POST['descripcion'],$_POST['stock'],$_POST['precio']);
            break;
        case "INGRESAR SUCURSAL":
            $c->altaSucursal($_POST['nombre'],$_POST['direccion'],$_POST['telefono']);
            break;  
        case "ELIMINAR SUCURSAL":
            $c->bajaSucursal($_POST['ID']);
            break;          
        case "MODIFICAR SUCURSAL":
            $c->modSucursal($_POST['ID'],$_POST['nombre'],$_POST['direccion'],$_POST['telefono']);
            break;          
        case 9:
            //$c->compraProducto($_POST[''],$_POST['']);
            break;  
        case 10:
            //$c->consultaProducto($_POST[''],$_POST['']);
            break;  
        case 11:
            //$c->creacionCarrito($_POST[''],$_POST['']);
            break;  
        case 12:
            //$c->valoracionProductos($_POST[''],$_POST['']);
            break;  
        case 13:
            //$c->mensajeCliente($_POST[''],$_POST['']);
            break;
        case 14:
            //$c->ingresoIVA($_POST[''],$_POST['']);
            break;  
        case 15:
            //$c->modificacionIVA($_POST[''],$_POST['']);
            break;
        case "INGRESAR PROVEEDOR":
            $c->altaProveedor($_POST['nombre'],$_POST['direccion'],$_POST['telefono'],$_POST['correoE']);
            break;
        case "ELIMINAR PROVEEDOR":
            $c->bajaProveedor($_POST['ID']);
            break;  
        case "MODIFICAR PROVEEDOR":
            $c->modProveedor($_POST['ID'],$_POST['nombre'],$_POST['direccion'],$_POST['telefono'],$_POST['correoE']);
            break;
        case "MODIFICAR SESION":
            $c->iniciarSesion($_POST['correoE'],$_POST['contraseña']);
            break;
        }
?>