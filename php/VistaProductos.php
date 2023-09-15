<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Productos</title>
</head>

<body>
    <?php
    require_once 'Controlador.php';
    $c = new Controlador();
    $listado = $c->listaProductos();
    ?>
    
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Descripción</th>
            <th>Stock</th>
            <th>Precio Unitario</th>
        </tr>
        
        <?php 
        foreach ($listado as $l) {
            echo "<tr>";
            echo "<td>".$l['ID']."</td>";
            echo "<td>".$l['nombre']."</td>";
            echo "<td>".$l['descripcion']."</td>";
            echo "<td>".$l['stock']."</td>";
            echo "<td>".$l['precio_unit']."</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>

</html>
