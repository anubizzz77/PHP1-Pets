<?php include("./conexion.php");


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $sql = "UPDATE mascota SET 
                nombre='$_POST[nombre]',
                tipo='$_POST[tipo]',
                raza='$_POST[raza]',
                sexo='$_POST[sexo]',
                fecha_nacimiento='$_POST[fecha_nacimiento]',
                nombre_cliente='$_POST[nombre_cliente]' 
            WHERE id_mascota='$_POST[oculto]'";

    
    $result = mysqli_query($link, $sql);

    
    if (!mysqli_error($link)) {
        ?>
        <script>
            alert("Se modificó correctamente");
        </script>
        <?php 
    } else { 
        ?>
        <script>
            alert("Estamos en mantenimiento preventivo");
        </script>
        <?php 
    }
}


?>
<meta http-equiv="refresh" content="0;URL=modificar.php">