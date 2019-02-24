<?php
/**
 * Created by PhpStorm.
 * User: Alfirex
 * Date: 31/01/2019
 * Time: 2:22
 */
    // Operadores Aritmeticos
    $nNumero1 = 55;
    $nNumero2 = 33;

    echo 'Suma -->'.$nNumero1.' + '.$nNumero2.' = '.($nNumero1+$nNumero2).'</br>';
    echo 'Resta -->'.$nNumero1.' - '.$nNumero2.' = '.($nNumero1-$nNumero2).'</br>';
    echo 'Multiplicacion -->'.$nNumero1.' * '.$nNumero2.' = '.($nNumero1*$nNumero2).'</br>';
    echo 'Division -->'.$nNumero1.' / '.$nNumero2.' = '.($nNumero1/$nNumero2).'</br>';
    echo 'Resto de una Division -->'.$nNumero1.' % '.$nNumero2.' = '.($nNumero1%$nNumero2).'</br>';

    echo '<br>';

    // Operadores Incremento y Decremento
    $nYear = 2019;
    echo "Año: ".$nYear.'<br>';

    // Incremento
    // $nYear = $nYear + 1
    $nYear++;
    echo "Año incremento: ".$nYear.'<br>';

    // Decremento
    // $nYear = $nYear - 1
    $nYear--;
    echo "Año decremento: ".$nYear.'<br>';

    // Pre-Incremento
    // $nYear = 1 + $nYear
    ++$nYear;

    // Pre-Decremento
    // $nYear = 1 + $nYear
    --$nYear;


?>