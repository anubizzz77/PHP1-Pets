<?php
include "./conexion.php";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $nombre = mysqli_real_escape_string($link, $_POST['nombre']);
    $tipo = mysqli_real_escape_string($link, $_POST['tipo']);
    $raza = mysqli_real_escape_string($link, $_POST['raza']);
    $sexo = mysqli_real_escape_string($link, $_POST['sexo']);
    $nombre_cliente = mysqli_real_escape_string($link, $_POST['nombre_cliente']);
    $fecha_nacimiento = mysqli_real_escape_string($link, $_POST['fecha_nacimiento']);

   
    $sql = "INSERT INTO mascota (nombre, tipo, raza, sexo, nombre_cliente, fecha_nacimiento) VALUES (?, ?, ?, ?, ?, ?)";
    
    
    $stmt = mysqli_prepare($link, $sql);
    
    
    mysqli_stmt_bind_param($stmt, "ssssss", $nombre, $tipo, $raza, $sexo, $nombre_cliente, $fecha_nacimiento);
    
    
    if (mysqli_stmt_execute($stmt)) {
        
        echo '<script>alert("Se ingresó con total normalidad");</script>';
    } else {
        
        echo '<script>alert("Error al ingresar los datos: ' . mysqli_error($link) . '");</script>';
    }

    
    mysqli_stmt_close($stmt);
}


echo '<meta http-equiv="refresh" content="0;URL=insertar.php">';
?>