<?php

// Metodo que Autocarga los controladores
function controllers_autoload($classname){
    include 'controllers/' . $classname . '.php';
}

spl_autoload_register('controllers_autoload');