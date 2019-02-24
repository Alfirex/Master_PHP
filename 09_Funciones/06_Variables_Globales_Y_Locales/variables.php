<?php
/**
 * Created by PhpStorm.
 * User: Alfirex
 * Date: 02/02/2019
 * Time: 16:07
 */
/*
 * Variables Locales: Son las que se definen dentro de una funcion y no pueden ser usadas fuera de la funcion,
 * solo estan disponibles dentro. A no ser que hagamos un return.
 *
 * Variables Globales: Son las que se declaran fuera de una funcion y estan disponibles dentro y fuera de las funciones.
 *
 */

$sFrase = "Ni los genios son tan genios, ni los mediocres tan mediocres";

echo $sFrase;

function holaMundo(){
    global  $sFrase;
    echo "<h1>" . $sFrase . "</h1>";

    $nYear = 2019;
    echo "<h1>" . $nYear . "</h1>";

    return $nYear;
}

echo holaMundo();
?>