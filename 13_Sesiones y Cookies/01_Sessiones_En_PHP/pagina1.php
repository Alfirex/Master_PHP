<?php
/**
 * Created by PhpStorm.
 * User: Alfirex
 * Date: 03/02/2019
 * Time: 22:38
 */
session_start();
// Podemos observar que la variable que Inicializamos en Index  mantiene su valor
echo $_SESSION["variable_persistente"];
?>