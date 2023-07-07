<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Sucursales</title>
</head>

<body>
    <?php
    require_once 'Controlador.php';
    $c = new Controlador();
    $listado[1] = $c->listaSucursales();
    ?>
    
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Direccion</th>
            <th>Telefono</th>
        </tr>
        
        <?php 
        foreach ($listado[1] as $l) {
            echo "<tr>";
            echo "<td>".$l['ID']."</td>";
            echo "<td>".$l['nombre']."</td>";
            echo "<td>".$l['direccion']."</td>";
            echo "<td>".$l['telefono']."</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>

</html>
