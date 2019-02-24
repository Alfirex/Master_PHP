<?php
/**
 * Created by PhpStorm.
 * User: Alfirex
 * Date: 03/02/2019
 * Time: 0:06
 */
/*
 * ARRAYS
 * Un array es una coleccion o un conjuntos de daots/ valores, bajo un unico nombre.
 * Para acceder a esos valores podemos usar un indice numero o alfanumerico.
 */
$aPeliculas = array('batman', 'Spiderman', 'El señor de los anillos');
$aCantantes = ['2pack', 'Drake','Jennifer Lopez'];

// Array Asociativo
$aPersonas = array(
    'nombre' => 'Alex',
    'apellidos' => 'Ajenjo Rodriguez',
    'edad' => 12
);
var_dump($aPersonas);
echo "<hr>";

echo $aPeliculas[0];
echo "<br>";
echo $aCantantes[2];

// Recorrer con FOR
echo "<h1> Listado de peliculas </h1>";

echo "<ul>";
for ($i = 0; $i< count($aPeliculas); $i++){
    echo "<li>".$aPeliculas[$i]."</li>";
}
echo "</ul>";


// Recorrer con Foreach
echo "<h1> Listado de Cantantes </h1>";

echo "<ul>";
foreach ($aCantantes as $item){
    echo "<li>".$item."</li>";
}
echo "</ul>";

// Arrays Multidimensionales

$aContactos = [
  array(
      'nombre' => 'Antonio',
      'edad' => 2
  ),
  [
      'nombre' => 'Salvador',
      'edad' => 22
  ],
  [
      'nombre' => 'Luis',
      'edad' => 42
  ]
];

foreach ($aContactos as $item){
    var_dump($item['nombre']);
}
?>