<?php
// Abrir archivo
$archivo = fopen("fichero_texto.txt","a+");

while (!feof($archivo)) {// Mientras haya lineas
    $contenido = fgetc($archivo);// Lee la linea del contenido
    echo $contenido;
}
// Escribir
fwrite($archivo, "***Soy un texto metido desde PHP***");

// Cerrar Archivo
fclose($archivo);
?>