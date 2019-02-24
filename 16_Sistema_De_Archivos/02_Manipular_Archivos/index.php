<?php
/*
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
*/


// Copiar Fichero y pegarlo en otro sitio
//copy('fichero_texto.txt','fichero_copiado.txt') or die("Error al copiar");

// Renombrar un fichero
//rename('fichero_copiado.txt', 'archivito_recopiadito.txt');

// Eliminar Fichero
unlink('archivito_recopiadito.txt') or die ('Error al borrar');
?>