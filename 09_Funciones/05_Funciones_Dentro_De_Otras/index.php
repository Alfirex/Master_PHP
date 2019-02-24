<?php
/**
 * Created by PhpStorm.
 * User: Alfirex
 * Date: 02/02/2019
 * Time: 14:45
 */

    /**
     * Funciones :
     * Una funcion es un conjunto de instruciones agrupadas bajo un nombre concreto y que puede
     * reutilizarse solamente invicando a la funcion tantas veces como querramos.
     *
     *
        // Forma de Crearlo
        function nombreDeMiFuncion($parametro){
        // BLOQUE / Conjunto de Instruciones
        }
        // Forma de llamarlo
        nombreDeMiFuncion($parametro);
     */
    /*
    //Ejemplo 1
    function muestraNombres(){
        echo "Alejandro Ajenjo<br>";
        echo "Andrea Ajenjo<br>";
        echo "Julian Ajenjo<br>";
        echo "Paco Ajenjo<br>";
    }

    // Invocamos funcion
    muestraNombres();


    // Ejemplo 2 con marametro
    function tabla($nNumero){
        echo "<h3> Tabla de multiplicar del numero: " . $nNumero . "</h3>";
        for ($i = 1; $i <= 10; $i++){
            $nOperacion = $nNumero*$i;
            echo $nNumero." x ".$i." = ".$nOperacion."<br>";
        }

    }
    if (isset($_GET['numero'])){
        tabla($_GET['numero']);
    }else{
        echo "No hay numero para multiplicar";
    }

    for ($i = 1; $i <= 10; $i++){
        tabla($i);
    }*/

    // Ejemplo 3
    function calculadora($nNumero1 ,$nNumero2, $bNegrita = false){

        // Conjunto de instrucciones a ejecutar
        $nSuma = $nNumero1 + $nNumero2;
        $nResta = $nNumero1 - $nNumero2;
        $nMulti = $nNumero1 * $nNumero2;
        $nDivi = $nNumero1 / $nNumero2;

        $sCadenaTexto = "";

        if ($bNegrita){
            $sCadenaTexto .= "<h1>";
        }

        $sCadenaTexto .=  "Suma: ".$nSuma."</br>";
        $sCadenaTexto .=  "Resta: ".$nResta."</br>";
        $sCadenaTexto .=  "Multiplicacion: ".$nMulti."</br>";
        $sCadenaTexto .=  "Division: ".$nDivi."</br>";

        if ($bNegrita){
            $sCadenaTexto .= "</h1>";
        }
        return $sCadenaTexto;
    }

    echo calculadora(2,4);
    echo calculadora(2,4, true);

    // Ejemplo 4
    function getNombre($sNombre){
        $sTexto = "El nombre es: " . $sNombre;
        return $sTexto;
    }
    function getApellido($sApellido){
        $sTexto = "El Apellido son: " . $sApellido;
        return $sTexto;
    }
    function devuelveElNombre($sNombre, $sApellido){
        $sTexto  = getNombre($sNombre).
                   "<br>" .
                   getApellido($sApellido);
        return $sTexto;
    }

    echo devuelveElNombre("Alex", "Ajenjo");

?>