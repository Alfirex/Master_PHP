<?php

$aCantantes = ['2pack', 'Drake','Jennifer Lopez','Alfredo'];
$aNumeros = [1,2,3,4,5,6,7,8];

// Orden ARRAY
sort($aCantantes); // Lo Ordena  ALFABETICAMENTE
var_dump($aCantantes);
echo '<hr>';
arsort($aCantantes); // Lo Ordena Inversamente ALFABETICAMENTE
var_dump($aCantantes);

echo '<hr>';

// Añadir elementos de un Array
$aCantantes[] = "Natos";// Forma 2
array_push($aCantantes,"Waor");// Forma 2
var_dump($aCantantes);

echo '<hr>';
// Eliminar Elementos del Array
array_pop($aCantantes); // Elimina el ultimo elemento del array
unset($aCantantes[2]);// Elimina el Indice del Array que le Indicamos
var_dump($aCantantes);
echo '<hr>';

// Obtener Un indice aleatorio del ARRAY
$indice = array_rand($aCantantes);
echo $aCantantes[$indice];

echo '<hr>';
// Dar la vuelta
var_dump( array_reverse($aNumeros) );

echo '<hr>';
// Buscar dentro de un Array
$resultado = array_search('Alfredo',$aCantantes);
var_dump($resultado);

echo '<hr>';
// Contar numero de elementos
echo sizeof($aCantantes);
?>