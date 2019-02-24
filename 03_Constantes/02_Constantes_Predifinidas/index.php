<?php
/**
 * Created by PhpStorm.
 * User: Alfirex
 * Date: 31/01/2019
 * Time: 2:03
 */
    // Constantes
    // Es un contenedor de informacion que no puede CAMBIAR, Si las constantes las escribimos en
    // Mayusculas para entender antes que son constantes y no necesitan el $
    define('S_NOMBRE','Alejandro');
    define('S_APELLIDO','Ajenjo');

    echo '<h1>'.S_NOMBRE.'</h1>';
    echo '<h1>'.S_APELLIDO.'</h1>';

    /*
     * La Constante si la llegamos a modificar dara error ya que no se puede Modificar
     S_NOMBRE = "asd";
     echo '<h1>'.S_NOMBRE.'</h1>';
     */


    // Variable | Podemos modificarla en cualquier momento
    $sNombre = "Alejandro";
    echo "Mi nombre es: ". $sNombre;
    $sNombre = "Jaime";
    echo "Mi nombre es modificado es: ". $sNombre;


    // Constantes predefinidas: son variables que ya estan creadas que nos muestran ciertas informacion sobre el equipo
    // Constantes empezadas con PHP_** Mostramso 3 de ellas (hay mas)
    echo "Constante predifiniada PHP_OS nos muestra el sistema Operativo que tenemos: " . PHP_OS.'<br>';
    echo "Constante predifiniada PHP_VERSION nos muestra las version de nuestro PHP: " . PHP_VERSION.'<br>';
    echo "Constante predifiniada PHP_EXTENSION_DIR nos muestra la ubicacion de nuestro php: " . PHP_EXTENSION_DIR.'<br>';

    // Constantes empezadas con __**__ Mostramso 3 de ellas (hay mas)
    echo "Constante predifiniada  __LINE__ nos muestra en que linea se esta imprimiento: " . __LINE__.'<br>';
    echo "Constante predifiniada  __FILE__ nos muestra la ubicacion de este Archivo: " . __FILE__.'<br>';

    function holaMundo(){
        echo "Constante predifiniada  __FUNCTION__ nos Dice el nombre de la funcion que estamos utilizando: " . __FUNCTION__.'<br>';
    }
    holaMundo();


?>