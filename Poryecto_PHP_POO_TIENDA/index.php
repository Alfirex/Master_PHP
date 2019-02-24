<?php
session_start();
require_once 'autoload.php';
require_once 'config/db.php';
require_once 'config/parameters.php';
require_once 'helpers/utils.php';
require_once 'views/layout/header.php';
require_once 'views/layout/sidebar.php';


function show_error(){
    $error = new ErrorController();
    $error->index();
}

if(isset($_GET['controller'])){// Comprobamos que el controlador llegue por la URL
    $nombre_controlador = $_GET['controller'].'Controller';// Genero la Variable Con conquetacion Controller
} elseif ( !isset($_GET['controller']) && !isset($_GET['action']) ){//
    $nombre_controlador = controller_default;
} else{
    show_error();
    exit();
}

if(class_exists($nombre_controlador)){// Comprobamos que exista el Controller (Variable dela linea 5)
    $controlador = new $nombre_controlador();// Asignamos un nuevo objeto del controlador

    if(isset($_GET['action']) && method_exists($controlador, $_GET['action'])){// Comprobamos si llega la accion y existe el metodo
        $action = $_GET['action'];// Obtenemos el nombre del metodo
        $controlador->$action();// Llamamos el metodo el controlador
    }elseif ( !isset($_GET['controller']) && !isset($_GET['action']) ){
        $action_default = action_default;
        $controlador->$action_default();
    } else{
        show_error();
    }
}else{
    show_error();
}
require_once 'views/layout/footer.php';