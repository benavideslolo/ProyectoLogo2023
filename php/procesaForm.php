<?php
    require_once 'Controlador.php';
    $c = new Controlador();
    switch($ID){
        case 0: 
            $c->altaUsuario($_POST['nombre'],$_POST['apellido'],$_POST['correoE'],$_POST['contraseña'],$_POST['rol'],$_POST['telefono'],$_POST['direccion']);
            break;
        case 1:
            $c->bajaUsuario($_POST['IDU']);
            break;
        case 2:
            $c->modUsuario($_POST['correoE']);
            break;
        case 3:
            $c->listaUsuarios();
            header('Location: usuarios.html.php');
            break;      
        case 4:
            $c->altaProducto($_POST['nombre'],$_POST['descripcion'],$_POST['stock'],$_POST['precio']);
            break;
        case 5:
            $c->bajaProducto($_POST['ID']);
            break;    
        case 6:
            $c->modProducto($_POST['ID']);
            break;
        case 7:
            $c->listaProductos();
            header('Location: productos.html.php');
            break;  
        case 8:
            $c->altaSucursal($_POST['nombre'],$_POST['direccion'],$_POST['telefono']);
            break;  
        case 9:
            $c->bajaSucursal($_POST['ID']);
            break;          
        case 10:
            $c->modSucursal($_POST['ID']);
            break;          
        case 11:
            $c->listaSucursales();
            header('Location: sucursales.html.php');
            break;  
        case 12:
            $c->compraProducto($_POST[''],$_POST['']);
            break;  
        case 13:
            $c->consultaProducto($_POST[''],$_POST['']);
            break;  
        case 14:
            $c->creacionCarrito($_POST[''],$_POST['']);
            break;  
        case 15:
            $c->valoracionProductos($_POST[''],$_POST['']);
            break;  
        case 16:
            $c->mensajeCliente($_POST[''],$_POST['']);
            break;
        case 17:
            $c->ingresoIVA($_POST[''],$_POST['']);
            break;  
        case 18:
            $c->modificacionIVA($_POST[''],$_POST['']);
            break;
        case 19:
            $c->altaProveedor($_POST['correoE'],$_POST['nombre'],$_POST['direccion'],$_POST['telefono']);
            break;
        case 20:
            $c->bajaProveedor($_POST['ID']);
            break;  
        case 21:
            $c->modProveedor($_POST['']);
            break;
        case 22:
            $c->listaProveedores();
            header('Location:   proveedores.html.php');
            break;
        }
?>