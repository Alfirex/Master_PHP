<?php
/**
 * Created by PhpStorm.
 * User: Alfirex
 * Date: 31/01/2019
 * Time: 1:35
 */
/*
 * Tipos de datos_
 * Entero (int/ integer) = 99
 * Coma flotante / decimales (float / double) = 3.45
 * Cadenas (string) = "hola yo soy un String"
 * Boleano (bool) = true false
 * null
 * Array (Coleccion de datos)
 * Objetos
 */
    $nNumero = 100;
    $fDecimal = 27.9;
    $sTexto = "Soy un texto";
    $bVerdadero = false;
    $nula = null;


    // gettype() --> Sirve para indicar que tipo de variable es;
    echo "La variable $nNumero es un tipo : ".gettype($nNumero)."</br>";
    echo "La variable $fDecimal es un tipo : ".gettype($fDecimal)."</br>";
    echo "La variable $sTexto es un tipo : ".gettype($sTexto)."</br>";
    echo "La variable $bVerdadero es un tipo : ".gettype($bVerdadero)."</br>";
    echo "La variable $nula es un tipo : ".gettype($nula)."</br>";
    echo "<br>";
    // Debugear
    $sMi_Nombre[] = "Alejandro Ajenjo Rodríguez";
    $sMi_Nombre[] = "Ampa Margalef Cervero";
    // var_dump() es un metodo que hara mostrar por pantalla el contenido sin hacer un hecho y dando infomacion extra
    var_dump($sMi_Nombre);

?>