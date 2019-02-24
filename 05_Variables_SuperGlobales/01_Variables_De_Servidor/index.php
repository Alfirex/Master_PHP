<?php
/**
 * Created by PhpStorm.
 * User: Alfirex
 * Date: 02/02/2019
 * Time: 0:22
 */
//Variables superglobales

    //variables de servidor
    echo '<h1> IP: ';
    echo $_SERVER['SERVER_ADDR'];
    echo '</h1>';

    echo '<h1>DNS: ';
    echo $_SERVER['SERVER_NAME'];
    echo '</h1>';

    echo '<h1>Informacion del Servidor WEB: ';
    echo $_SERVER['SERVER_SOFTWARE'];
    echo '</h1>';

    echo '<h1>Que anvegador estas utilizando: ';
    echo $_SERVER['HTTP_USER_AGENT'];
    echo '</h1>';

    echo '<h1>IP del cliente: ';
    echo $_SERVER['REMOTE_ADDR'];
    echo '</h1>';

?>

