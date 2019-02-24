<?php
/**
 * Created by PhpStorm.
 * User: Alfirex
 * Date: 03/02/2019
 * Time: 21:44
 */

/*
  Sesion : Almacenar y persistir datos del usuario mientras que navega en un sitio web hasta que cierra la sesion o cierra el navegador.
 */

// Iniciar la Session Es necesario que este en todas las paginas web que utilizemos sessiones
session_start();

// Variable local
$variable_normal = "Soy una cadena de texto";

// Variable de sessión
$_SESSION['variable_persistente'] = "HOLA SOY UNA SESSION ACTVA";

echo "Variable normal: ".$variable_normal."<br>";
echo "Variable de session: ".$_SESSION['variable_persistente'];

?>