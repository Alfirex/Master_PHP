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

// Ejmplo 2
$nYear = 2019;

if ($nYear >= '2019'){
    echo "Estamos de 2019 en adelante";
}else{
    echo "Es una anterior 2019";
}

?>