<?php include './conexion.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Buscar Mascotas</title>
</head>
<body>
    <?php include './menu.php'; ?>
    
    <form method="POST" name="form1">
        <div class="buscador">
            <label for="buscar">Buscar por ID de Mascota: </label>
            <input type="text" name="buscar" id="buscar" />
            <input type="submit" value="Buscar" />
        </div>
    </form>

    <table>
        <tr>
            <th>ID Mascota</th>
            <th>Nombre</th>
            <th>Tipo</th>
            <th>Raza</th>
            <th>Sexo</th>
            <th>Nombre del Dueño</th>
            <th>Fecha de Nacimiento</th>
            <th>ACCIONES</th>
        </tr>
        <?php
        // Consulta para buscar mascotas
        if (isset($_POST['buscar'])) {
            $id_buscar = mysqli_real_escape_string($link, $_POST['buscar']);
            $sql = "SELECT * FROM mascota WHERE id_mascota = '$id_buscar'";
        } else {
            $sql = "SELECT * FROM mascota"; // Si no hay búsqueda, selecciona todas las mascotas
        }
        
        $result = mysqli_query($link, $sql); // ejecuto la consulta
        
        // Verificar si hay resultados
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
            <td>
                <a href="modificar_mascota.php?mod=<?= $row['id_mascota']; ?>">Modificar</a> |
                <a href="eliminar_mascota.php?eli=<?= $row['id_mascota']; ?>">Eliminar</a>
            </td>
        </tr>
        <?php 
            }
        } else {
            echo "<tr><td colspan='8'>No se encontraron mascotas.</td></tr>";
        }
        ?>
    </table>
</body>
</html>