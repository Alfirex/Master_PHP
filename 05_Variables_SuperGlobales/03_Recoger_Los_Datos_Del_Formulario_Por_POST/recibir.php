<?php
/**
 * Created by PhpStorm.
 * User: Alfirex
 * Date: 02/02/2019
 * Time: 1:10
 */
echo "El Nombre recivido es: ".$_POST["nombre"]."<br>";
echo "El Apellido recivido es: ".$_POST["apellidos"]."<br>";

//echo "La web recivido es: ".$_GET["web"];

// Con var_dump() Obtenemso la informacion de todo lo que recivimos por $_POST
var_dump($_POST);
?>