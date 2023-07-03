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
    $list[1] = $c->listaProveedor();
    ?>
    
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Direccion</th>
            <th>Telefono</th>
            <th>Email</th>
        </tr>
        
        <?php 
        foreach ($list[1] as $l) {
            echo "<tr>";
            echo "<td>".$l['ID']."</td>";
            echo "<td>".$l['nombre']."</td>";
            echo "<td>".$l['direccion']."</td>";
            echo "<td>".$l['telefono']."</td>";
            echo "<td>".$l['correoE']."</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>

</html>