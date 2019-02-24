<?php
/*
 * is_dir('mi_carpeta') || Es para comprobar si existe
 * mkdir('nombre_Carpeta', permisos) || Crea una carpeta
 * rmdir('mi_carpeta') || Borramsos la carpeta
 * opendir('./mi_carpeta') || Nos ubicamos en la carpeta
 * readdir($gestor) || lee la fila fichero de esa carpeta
 *
 */
if(!is_dir('mi_carpeta')){
    mkdir('mi_carpeta', 0777) or die('No se puede crear la carpeta');
}else{
    echo "Ya existe la carpeta";
}
// Borramos la carpeta
// rmdir('mi_carpeta');
echo "<hr> <h1>Contenido carpeta</h1>";
if($gestor = opendir('./mi_carpeta')){
    while(false !== ($archivo = readdir($gestor))){
        if($archivo != '.' && $archivo != '..'){
            echo $archivo."<br/>";
        }
    }
}