<?php
require_once 'models/Usuario.php';

class UsuarioController{
    public function index(){
        echo "Controlador Usuarios, Accion Index";
    }

    /**
     * Metodo que nos cargara la pagina de registro
     */
    public function registro(){
        require_once 'views/usuario/registro.php';
    }

    /**
     * Metodo que insetara al Usuario
     */
    public function save(){
       if (isset($_POST)){

           $name = isset($_POST['name']) ? $_POST['name'] : false;
           $surname = isset($_POST['surname']) ? $_POST['surname'] : false;
           $email = isset($_POST['email']) ? $_POST['email'] : false;
           $password = isset($_POST['password']) ? $_POST['password'] : false;

           if ($name && $surname && $email && $password){
               $usuario = new Usuario();
               $usuario->setNombre($name);
               $usuario->setApellidos($surname);
               $usuario->setEmail($email);
               $usuario->setPassword($password);
               var_dump($usuario);

               $save = $usuario->saveUser();// Aqui insertamos el Usuarios con este metodo en la BD
               if ($save) { // Inserccion completada
                   $_SESSION['register'] = "complete";
               }else{
                   $_SESSION['register'] = "failed";
               }
           }else{
               $_SESSION['register'] = "failed";
           }
       }else{
           $_SESSION['register']= "failed";
       }
        header("Location:".base_url."usuario/registro");
    }

    /**
     * Metodo/Accion que nos creara la ssesion de Usuario
     */
    public function login(){
        if (isset($_POST)) {
            // Identificar al usuario
            // Consulta a la base de datos
            $usuario = new Usuario();
            $usuario->setEmail($_POST['email']);
            $usuario->setPassword($_POST['password']);

            $identity = $usuario->loginDB();// Llamamos al metodo para que compruebe en la base datos si existe

            if ($identity && is_object($identity)) {
                $_SESSION['identity'] = $identity;

                if ($identity->rol == 'admin'){
                    $_SESSION['admin'] = true;
                }
            }else{
                $_SESSION['error_login'] = "identificacion fallida";
            }
            // Crear un sesion
        }
        header("Location:".base_url);
    }

    /**
     * Metodo que desconectara el usuario logueado
     * eliminado las variables de session
     */
    public function logout(){
        if (isset($_SESSION['identity'])) {
            unset($_SESSION['identity']);
        }

        if (isset($_SESSION['admin'])) {
            unset($_SESSION['admin']);
        }

        if (isset($_SESSION['carrito'])) {
            unset($_SESSION['carrito']);
        }
        header("Location:".base_url);
    }
} // Fin de la clase