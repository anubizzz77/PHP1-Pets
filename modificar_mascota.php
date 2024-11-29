<?php include "./conexion.php"; ?>
<html>
<head>
    <meta charset="utf-8">
    <title>Modificar Formulario</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <?php
    
    $sql = "SELECT * FROM mascota WHERE id_mascota ='$_GET[mod]'";
    $result = mysqli_query($link, $sql);
    $row = mysqli_fetch_assoc($result);
    ?>
    
    <form id="form1" name="form1" method="post" action="modificar_logica.php">
        <label for="nombre">Nombre de la mascota: 
            <input type="text" name="nombre" id="nombre" value="<?php print $row['nombre']; ?>" required />
        </label>
        
        <label for="tipo">Tipo de mascota:
            <select id="tipo" name="tipo" required>
                <option value="" disabled <?php if ($row['tipo'] == '') echo 'selected'; ?>>Selecciona un tipo</option>
                <option value="perro" <?php if ($row['tipo'] == 'perro') echo 'selected'; ?>>Perro</option>
                <option value="gato" <?php if ($row['tipo'] == 'gato') echo 'selected'; ?>>Gato</option>
                <option value="ave" <?php if ($row['tipo'] == 'ave') echo 'selected'; ?>>Ave</option>
            </select>
        </label>
        
        <label for="raza">Raza: 
            <input type="text" name="raza" id="raza" value="<?php print $row['raza']; ?>" required />
        </label>
        
        <label for="nombre_cliente">Nombre del dueño: 
            <input type="text" name="nombre_cliente" id="nombre_cliente" value="<?php print $row['nombre_cliente']; ?>" required />
        </label>

        <legend>Sexo:</legend>
        <label>
            <input type="radio" name="sexo" value="F" id="F" <?php if ($row['sexo'] == 'F') echo 'checked'; ?> />
            Femenino
        </label>
        <label>
            <input type="radio" name="sexo" value="M" id="M" <?php if ($row['sexo'] == 'M') echo 'checked'; ?> />
            Masculino
        </label>

        <label for="fecha_nacimiento">Fecha de nacimiento: 
            <input type="date" id="fecha_nacimiento" name="fecha_nacimiento" 
            value="<?php print $row['fecha_nacimiento']; ?>" 
            max="<?php echo date('Y-m-d'); ?>" required />
        </label>

        <input type="hidden" name="oculto" id="oculto" value="<?php print $row['id_mascota']; ?>" />
        <input type="submit" name="submit" id="submit" value="Enviar">
    </form>
</body>
</html>