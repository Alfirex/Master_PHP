<?php
/**
 * Created by PhpStorm.
 * User: Alfirex
 * Date: 02/02/2019
 * Time: 1:22
 */

/*
 * // CONDICIONALES
    if (condicion){
        instruccion
    }else{
        otras instrucciones
    }
  // Operadores de comparacion

  == igual
  === identico (mas estricto en el caso de no coincida si es string o integger por ejemplo)
  != diferente
  <> diferente
  !== no identico
  < menor que
  > mayor que
  <= menor o igual que
  >= mayor o igual que

 */
// Ejemplo 1
$sColor = "Rojo";

if ($sColor == 'Rojo'){
    echo "El color es Rojo";
}else{
    echo "El color NO es Rojo";
}
echo "<br>";

// Ejemplo 2
$nYear = 2019;

if ($nYear >= 2019){
    echo "Estamos de 2019 en adelante";
}else{
    echo "Es una anterior 2019";
}

// Ejemplo 3
$sNombre = "David Extremadura";
$sCiudad = 'Madrid';
$sContinente = 'Asia';
$nEdad = 42;
$nMayoriaEdad = 18;

if ($nEdad >= $nMayoriaEdad){
    echo "<h1>".$sNombre." es mayor de edad</h1>";

    if ($sContinente == 'Europa'){
        echo "<h2>Y es de ".$sCiudad."</h2>";
    }else{
        echo "No es Europeo";
    }
}else{
    echo "<h2>".$sNombre." No es mayor de edad</h2>";
}

?>