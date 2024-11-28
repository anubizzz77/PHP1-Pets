<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insertar Mascota</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <?php include './menu.php'; ?>
    <form method="post" action="./insertar_logica.php">
        <label id="nombre">Nombre: <input id="nombre" name="nombre" type="text" required /></label>
        <label id="tipo">Tipo:
            <select id="tipo" name="tipo" required>
                <option value="">Elige Uno</option>
                <option value="perro">Perro</option>
                <option value="gato">Gato</option>
                <option value="ave">Ave</option>
            </select>
        </label>
        <label id="raza">Raza: <input id="raza" name="raza" type="text" required /></label>
        
        <fieldset>
            <legend>Sexo:</legend>
            <label>
                <input type="radio" name="sexo" id="F" value="F" required>
                Femenino
            </label>
            <label>
                <input type="radio" name="sexo" id="M" value="M">
                Masculino
            </label>
        </fieldset>

        <label id="nombre_cliente">Nombre del Dueño: <input id="nombre_cliente" name="nombre_cliente" type="text" required /></label>
        <label id="fecha_nacimiento">Fecha de Nacimiento: <input id="fecha_nacimiento" name="fecha_nacimiento" type="date" required /></label>
        
        <input id="registrar" name="Registrar" type="submit" />
        <input id="limpiar" name="Limpiar" type="reset" />
    </form>
</body>
</html>