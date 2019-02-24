<?php
/*
 * Para mostrar el varlo de las COOKIES, tengo que usar $_Cookie, es una variable SuperGlobal, es un array Asociativo.
 */

if (isset($_COOKIE['miCookie'])){
    echo "<h1>" . $_COOKIE['miCookie'] . "</h1>";
}else{
    echo "No existe la cookie";
}

if (isset($_COOKIE['unYear'])){
    echo "<h1>" . $_COOKIE['unYear'] . "</h1>";
}else{
    echo "No existe la cookie";
}
?>
<a href="crear_cookies.php"> Crear las Galletas</a>
<a href="borrar_cookies.php"> Borrar las Galletas</a>