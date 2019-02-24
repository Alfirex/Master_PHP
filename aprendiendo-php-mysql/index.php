<?php
/**
 * Conectar a la Base de datos
 */
// parametros de ENTRADA
$HOST = "localhost";
$USER = "root";
$PASSWORD = "";
$DATABASE = "phpmysql";

// Conectar la base de datos
$conexion = mysqli_connect($HOST,$USER,$PASSWORD,$DATABASE);

//Comprobar si la conexion es correcta
if (mysqli_connect_errno()){
    echo "La conexion a la base de datos MySQK ha fallado: " . mysqli_connect_errno();
}else {
    echo "Conexion Realizada Corectamente"."<br>";
}

// Consulta para configurar la codificacion de caracteres
mysqli_query($conexion, "SET NAMES 'utf8'");

// Consulta SELECT desde PHP
$query = mysqli_query($conexion, "SELECT * FROM notas");

//mysqli_fetch_array() transforma lo que nos devuelve la consulta en un Array solo debuelve la primera fila
//$notas = mysqli_fetch_array($query);

// Recorremos el array para obtener todos los registros
while ($nota = mysqli_fetch_array($query)){
    //var_dump($nota)."<br>";
    echo "<h2>".$nota["titulo"]."</h2>";
    echo $nota["descripcion"]."<br>";
}

// Insertar en la base de datos desde PHP
$sql = "INSERT INTO notas VALUES(null, 'Nota desde PHP', 'Este es una nota de PHP', 'green')";
$insert = mysqli_query($conexion, $sql);

echo "<hr>";
if ($insert){
    echo "DATOS INSERTADOS CORRECTAMENTE";
}else{
    echo "ERROR: " . mysqli_error($conexion);
}
?>