<?php
/**
 * Created by PhpStorm.
 * User: Alfirex
 * Date: 02/02/2019
 * Time: 16:22
 */

// Debuguear
$sNombre = "Alejandro Ajenjo";
var_dump($sNombre);

// Fechas
echo date('d-m-Y');
echo "<br>";
echo time();

// Matematicas

// Sacar la raiz cuadrada
echo "<br>";
echo "Raiz cuadrada de 10: ".sqrt(10);

// Sacar un numero aleatorio
echo "<br>";
echo "Numero aleatorio entre 10 y 40 " . rand(10, 40);

// Sacar el numero PI
echo "<br>";
echo "Numero pi: " . pi();

// Redondear numeros
echo "<br>";
echo "Redondear: " . round(7.891536, 2);


// Mas funciones Generales

// Obtener el tipo de la variable
echo "<br>";
echo "Tipo de Variable: " . gettype($sNombre);

// Comprobar el tipo de la variable sea tal
echo "<br>";
if (is_string($sNombre)){
    echo "Esa variable es un String";
}
echo "<br>";
if (!is_float($sNombre)){
    echo "La variable nombre no es un numero con decimales";
}

// Si existe esa variable en el fichero
echo "<br>";
if (isset($sNombre)){
    echo "La variable existe";
}else{
    echo "La variable no existe";
}

// Limpiar espacios
echo "<br>";
$sFrase = "   mi contenido   ";
var_dump(trim($sFrase));

// Eliminar variaables / indices
$nYear = 2020;
unset($nYear);


// Comprobar variables vacias
$Texto = "";

if (empty(trim($Texto))){
    echo "la variable texto esta vacia";
}else{
    echo "La variable texto TIENE CONTENIDO";
}
echo "<br>";
// Contar caracteres de un String
$sCadena = "12345";
echo strlen($sCadena);

echo "<br>";

// Encontrar caracter
$sFrase = "La vida es bella";
echo strpos($sFrase, "vida");

// Remplazar palabras de un String
$sFrase = str_replace("vida", "moto", $sFrase);
echo $sFrase;

// MAYUSCULAS Y MINUSCULAS
echo strtolower($sFrase);
echo "<br>";
echo strtoupper($sFrase);







