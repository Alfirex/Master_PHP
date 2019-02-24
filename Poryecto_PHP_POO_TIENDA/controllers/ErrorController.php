<?php

/**
 * Class ErrorController
 * Sirve para el Rederigir a la pagina para informa de que no ha encontrado la pagina
 */
 class ErrorController{
     public function index(){
         echo "<h1>La pagina que buscas no existe</h1>";
     }
 }