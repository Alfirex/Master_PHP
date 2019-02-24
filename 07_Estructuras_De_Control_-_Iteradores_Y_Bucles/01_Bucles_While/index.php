<?php
/**
 * Created by PhpStorm.
 * User: Alfirex
 * Date: 02/02/2019
 * Time: 2:11
 */

// Bucle While
    // Estructura de control que utera o repite la ejecucion
    // en una serie de instrucciones tantas veces
    // como sea necesario, en base a un condicion
    //while (condicion){
    //    Bloque de instruciones
    //    otra instruciones
    //}

    $nNumero = 0;
    while ($nNumero <= 100){
        echo $nNumero;
        if ($nNumero != 100){
            echo ", ";
        }
        $nNumero++;
    }
?>