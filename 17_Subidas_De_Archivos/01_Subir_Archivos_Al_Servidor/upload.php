<?php

$archivo = $_FILES['archivo'];// Obtenemos la Informacion del Fichero
$nombre = $archivo['name'];// Obtenemos el nombre del fichero
$tipo = $archivo['type'];// Obtenemos el tipo del fichero

// Comprovamos que el tipo sea con estas extensiones
if($tipo == "image/jpg" || $tipo == "image/jpeg" || $tipo == "image/png" || $tipo == "image/gif"){

    if(!is_dir('images')){ // Comprueba de que si hay una carpeta para alamacenar las imagenes
        mkdir('images', 0777);// Crea la carpeta de las Imagenes
    }
    //$archivo['tmp_name'] || Fichero donde esta guardado actualmente
    move_uploaded_file($archivo['tmp_name'], 'images/'.$nombre);//donde lo queremos guardar

    header("Refresh: 5; URL=index.php");
    echo "<h1>Imagen subida correctamente</h1>";

}else{// En el caso que no tenga esas Extensiones
    header("Refresh: 5; URL=index.php");
    echo "<h1>Sube una imagen con un formato correcto, por favor...</h1>";
}