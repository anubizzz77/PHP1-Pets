<?php 
include "./conexion.php"; 

if (isset($_GET['eli'])) {
    
    $id_mascota = mysqli_real_escape_string($link, $_GET['eli']);

    $check_sql = "SELECT * FROM mascota WHERE id_mascota='$id_mascota'";
    $check_result = mysqli_query($link, $check_sql);
    
    if (mysqli_num_rows($check_result) == 0) {
        echo "<script>alert('No se encontró el registro para eliminar.');</script>";
    } else {
        
        $sql = "DELETE FROM mascota WHERE id_mascota='$id_mascota'";
         
        
        if (mysqli_query($link, $sql)) {
            echo "<script>alert('Se eliminó con éxito');</script>";
        } else {
            echo "<script>alert('Error en la eliminación: " . mysqli_error($link) . "');</script>";
        }
    }
} else {
    echo "<script>alert('No se proporcionó un ID para eliminar.');</script>";
}

echo '<meta http-equiv="refresh" content="2;URL=modificar.php">';
?>