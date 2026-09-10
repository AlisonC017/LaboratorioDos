<?php

include("parts/css.php");

$data = $_POST;
$archivo = $_FILES['archivo'];

    if(file_exists($archivo)) {
        $ruta = "uploads/" . $archivo['name'];
        move_uploaded_file($archivo['tmp_name'], $ruta);
        echo "Archivo subido correctamente a la ruta: " . $ruta;
    } else {
        echo "<p p-2>Error al subir el archivo</p>". $archivo["name"] ."";
        echo '<a href="index.php" class="btn btn-primary">Regresar al formulario</a>';
    }

    ?>

