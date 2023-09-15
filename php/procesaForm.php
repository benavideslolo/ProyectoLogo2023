<?php
    require_once 'Controlador.php';
    $c = new Controlador();
    switch($_POST['numero']){
        case "REGISTRARME": 
            $c->altaUsuario($_POST['cedula'],$_POST['correoE'],$_POST['nombre'],$_POST['apellido'],$_POST['contraseña'],$_POST['telefono'],$_POST['direccion']);
            header('Location: ../index.html');
            break;
        case "ELIMINAR":
            $c->bajaUsuario($_POST['correoE']);
            header('Location: ../index.html');
            break;
        case "MODIFICAR USUARIO":
            $c->modUsuario($_POST['nombre'],$_POST['apellido'],$_POST['telefono'],$_POST['direccion'],$_POST['correoE']);
            break;     
        case "INGRESAR PRODUCTO":
            $c->altaProducto($_POST['nombre'],$_POST['descripcion'],$_POST['stock'],$_POST['precio']);
            echo "Su producto se ingresó correctamente";
            header('Location: ../indexadmin.html');
            break;
        case "ELIMINAR PRODUCTO":
            $c->bajaProducto($_POST['ID']);
            header('Location: ../indexadmin.html');
            break;    
        case "MODIFICAR PRODUCTO":
            $c->modProducto($_POST['ID'],$_POST['nombre'],$_POST['descripcion'],$_POST['stock'],$_POST['precio']);
            header('Location: ../indexadmin.html');
            break;
        case "INGRESAR SUCURSAL":
            $c->altaSucursal($_POST['nombre'],$_POST['direccion'],$_POST['telefono']);
            header('Location: ../indexadmin.html');
            break;  
        case "ELIMINAR SUCURSAL":
            $c->bajaSucursal($_POST['ID']);
            break;          
        case "MODIFICAR SUCURSAL":
            $c->modSucursal($_POST['ID'],$_POST['nombre'],$_POST['direccion'],$_POST['telefono']);
            header('Location: ../indexadmin.html');
            break;          
        case "COMPRAR CARRITO":
            /*$c->compraCarrito();*/
            break;  
        case "CONSULTA PRODUCTO":
            //$c->consultaProducto($_POST[''],$_POST['']);
            break;  
        case "CREAR CARRITO":
            $c->creacionCarrito($_POST['ID'],$_POST['cant']);
            break;  
        case "VALORAR PRODUCTO":
            //$c->valoracionProductos($_POST[''],$_POST['']);
            break;  
        case "MENSAJE CONSULTA":
            $c->mensajeConsulta($_POST['previoMSJ'],$_POST['mensaje']);
            break;
        case "ALTA IVA":
            //$c->ingresoIVA($_POST[''],$_POST['']);
            break;  
        case "MODIFICAR IVA":
            //$c->modificacionIVA($_POST[''],$_POST['']);
            break;
        case "INGRESAR PROVEEDOR":
            $c->altaProveedor($_POST['nombre'],$_POST['direccion'],$_POST['telefono'],$_POST['correoE']);
            header('Location: ../indexadmin.html');
            break;
        case "ELIMINAR PROVEEDOR":
            $c->bajaProveedor($_POST['ID']);
            header('Location: ../indexadmin.html');
            break;  
        case "MODIFICAR PROVEEDOR":
            $c->modProveedor($_POST['ID'],$_POST['nombre'],$_POST['direccion'],$_POST['telefono'],$_POST['correoE']);
            header('Location: ../indexadmin.html');
            break;
        case "INICIAR SESION":
            $c->iniciarSesion($_POST['correoE'],$_POST['contraseña']);
            break;
        case "CERRAR SESION":
            $c->cerrarSesion();
            break;
        }
?>