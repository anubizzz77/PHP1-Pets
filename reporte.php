<?php include './conexion.php'; ?>
<html>
<head>
    <meta charset="utf-8">
    <title>Listado de Mascotas</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <?php include './menu.php'; ?>
    <table>
        <tr>
            <th>ID Mascota</th>
            <th>Nombre</th>
            <th>Tipo</th>
            <th>Raza</th>
            <th>Sexo</th>
            <th>Nombre del Dueño</th>
            <th>Fecha de Nacimiento</th>
        </tr>
        <?php
        
        $sql = "SELECT * FROM mascota";
        $result = mysqli_query($link, $sql); 

        
        if (mysqli_num_rows($result) > 0) {
            
            while ($row = mysqli_fetch_assoc($result)) {
        ?>
        <tr>
            <td><?= $row['id_mascota']; ?></td>
            <td><?= $row['nombre']; ?></td>
            <td><?= $row['tipo']; ?></td>
            <td><?= $row['raza']; ?></td>
            <td><?= $row['sexo']; ?></td>
            <td><?= $row['nombre_cliente']; ?></td>
            <td><?= $row['fecha_nacimiento']; ?></td>
        </tr>
        <?php 
            }
        } else {
            echo "<tr><td colspan='7'>No hay mascotas registradas.</td></tr>";
        }
        ?>
    </table>
</body>
</html>