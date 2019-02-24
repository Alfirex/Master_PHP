<?php
/**
 * Created by PhpStorm.
 * User: Alfirex
 * Date: 31/01/2019
 * Time: 2:03
 */
    // Constantes
    // Es un contenedor de informacion que no puede CAMBIAR, Si las constantes las escribimos en
    // Mayusculas para entender antes que son mayusculas y no necesitan el $
    define('S_NOMBRE','Alejandro');
    define('S_APELLIDO','Ajenjo');

    echo '<h1>'.S_NOMBRE.'</h1>';
    echo '<h1>'.S_APELLIDO.'</h1>';

    /*
     * La Constante si la llegamos a modificar dara error ya que no se puede Modificar
     S_NOMBRE = "asd";
     echo '<h1>'.S_NOMBRE.'</h1>';
     */


    // Variable | Podemos modificarla en cualquier momento
    $sNombre = "Alejandro";
    echo "Mi nombre es: ". $sNombre;
    $sNombre = "Jaime";
    echo "Mi nombre es modificado es: ". $sNombre;


?>