<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Usuarios</title>
</head>

<body>
    <?php
    require_once 'Controlador.php';
    $c = new Controlador();
    $list = $c->listaUsuarios();
    ?>
    
    <table border="1">
        <tr>
            <th>Cedula</th>
            <th>Email</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Contraseña</th>
            <th>Telefono</th>
            <th>Direccion</th>
            <th>Rol</th>
        </tr>
        
        <?php 
        foreach ($list as $l) {
            echo "<tr>";
            echo "<td>".$l['cedula']."</td>";
            echo "<td>".$l['correoE']."</td>";
            echo "<td>".$l['nombre']."</td>";
            echo "<td>".$l['apellido']."</td>";
            echo "<td>".$l['contra']."</td>";
            echo "<td>".$l['telefono']."</td>";
            echo "<td>".$l['direccion']."</td>";
            echo "<td>".$l['rol']."</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>

</html>
