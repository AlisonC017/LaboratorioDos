<?php

include("parts/css.php");

$data = $_POST;
$archivo = $_FILES['archivo'];

    if($archivo['error'] === UPLOAD_ERR_OK) {
        $ruta = "uploads/" . $archivo['name'];
        move_uploaded_file($archivo['tmp_name'], $ruta);
        echo "Archivo subido correctamente a la ruta: " . $ruta;
    } else {
        echo "<p p-2>Error al subir el archivo". $archivo["name"] ."</p>";
        echo '<a href="index.php" class="btn btn-primary">Regresar al formulario</a>';
    }

    ?>

