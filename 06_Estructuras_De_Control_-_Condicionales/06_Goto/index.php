<?php
/**
 * Created by PhpStorm.
 * User: Alfirex
 * Date: 02/02/2019
 * Time: 1:22
 */


// Ejemplo 4 ELSE IF
$nDia = 3;
if ($nDia == 1){
    echo "Es Lunes";
}elseif ($nDia == 2){
    echo "Es Martes";
}elseif ($nDia == 3){
    echo "Es Miercoles";
}elseif ($nDia == 4){
    echo "Es Jueves";
}elseif ($nDia == 5){
    echo "Es Viernes";
}elseif ($nDia == 6){
    echo "Es Sabado";
}elseif ($nDia == 7){
    echo "Es Domingo";
}

echo "<hr>";

// Ejemplo 4 SWITCH
$nDia = 3;
switch ($nDia){
    case 1:
        echo "Es Lunes";
        break;
    case 2:
        echo "Es Martes";
        break;
    case 3:
        echo "Es Miercoles";
        break;
    case 4:
        echo "Es Jueves";
        break;
    case 5:
        echo "Es Viernes";
        break;
    case 6:
        echo "Es Sabado";
        break;
    case 7:
        echo "Es Domingo";
        break;
    default:
        echo "El dia de la semana no existe";
}

// GOTO
// Lo que hace es indicarle que se salte ciertas lineas de codigo y muestre lo que le inidcamos
goto marca;
    echo "<h3>Instrucion 1</h3>";
    echo "<h3>Instrucion 2</h3>";
    echo "<h3>Instrucion 3</h3>";
    echo "<h3>Instrucion 4</h3>";
marca:
    echo "<h1> Me he saltado 4 echos</h1>";





?>