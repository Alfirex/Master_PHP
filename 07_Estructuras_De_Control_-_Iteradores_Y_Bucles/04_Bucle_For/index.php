<?php
/**
 * Created by PhpStorm.
 * User: Alfirex
 * Date: 02/02/2019
 * Time: 2:42
 */
    /*
    //FOR
    for (variable contador; condicion; actualizar contador){
        // Bloque de Instrucciones
    }
     */

    $nResultado = 0;
    for ($i = 0; $i <= 100; $i++){
        $nResultado += $i;

        echo "El resultado actual: ".$nResultado."<br>";
    }
    echo "El resultado es: ".$nResultado;

    // Ejemplo tabla de Multiplicar con FOR
    if (isset($_GET['numero'])){
        // Cambiar tipo de dato
        $nNumero = (int) $_GET['numero'];
    }else{
        $nNumero = 1;
    }

    echo "<h1>Tabla de multiplicar del numero ".$nNumero."</h1>";

    for ($i = 0; $i <= 10; $i++){
        echo $nNumero." x ".$i ." = ". ($nNumero*$i)."<br>";
    }

?>