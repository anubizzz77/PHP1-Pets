<?php
include "./conexion.php";

// Comprobar si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener y sanitizar los datos del formulario
    $nombre = mysqli_real_escape_string($link, $_POST['nombre']);
    $tipo = mysqli_real_escape_string($link, $_POST['tipo']);
    $raza = mysqli_real_escape_string($link, $_POST['raza']);
    $sexo = mysqli_real_escape_string($link, $_POST['sexo']);
    $nombre_cliente = mysqli_real_escape_string($link, $_POST['nombre_cliente']);
    $fecha_nacimiento = mysqli_real_escape_string($link, $_POST['fecha_nacimiento']);

    // Preparar la consulta SQL
    $sql = "INSERT INTO mascota (nombre, tipo, raza, sexo, nombre_cliente, fecha_nacimiento) VALUES (?, ?, ?, ?, ?, ?)";
    
    // Preparar la sentencia
    $stmt = mysqli_prepare($link, $sql);
    
    // Vincular parámetros
    mysqli_stmt_bind_param($stmt, "ssssss", $nombre, $tipo, $raza, $sexo, $nombre_cliente, $fecha_nacimiento);
    
    // Ejecutar la consulta
    if (mysqli_stmt_execute($stmt)) {
        // Si la inserción fue exitosa
        echo '<script>alert("Se ingresó con total normalidad");</script>';
    } else {
        // Si hubo un error en la inserción
        echo '<script>alert("Error al ingresar los datos: ' . mysqli_error($link) . '");</script>';
    }

    // Cerrar la sentencia
    mysqli_stmt_close($stmt);
}

// Redirigir después de procesar
echo '<meta http-equiv="refresh" content="0;URL=insertar.php">';
?>