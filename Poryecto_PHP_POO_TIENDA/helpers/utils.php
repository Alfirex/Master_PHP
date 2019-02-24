<?php

/**
 * Class Utils Su funcion es:
 * Eliminar sesion
 * Comprobar que el Usuario es ADMIN o No
 * Mostrar Categorias MENUS/OPTIOS(FORMS)
 */
class Utils{
    /**
     * Metodo para eliminar alguna session que le indiquemos
     * @param $name
     * @return mixed
     */
    public static function deleteSession($name)
    {
        if (isset($_SESSION[$name])) {
            $_SESSION[$name] = null;
            unset($_SESSION[$name]);
        }
        return $name;
    }

    /**
     * Metodo que comprueba si el Usuario es Admin o no
     * Si no es admin lo redirecciona a otra pagina
     */
    public static function isAdmin(){
        if (!isset($_SESSION['admin'])) {
            header("Location:" . base_url);
        }else{
            return true;
        }
    }

    /**
     * Metodo que se encargara de comprobar de que el Usuario esta logueado o no.
     */
    public static function isIdentity(){
        if (!isset($_SESSION['identity'])) {
            header("Location:" . base_url);
        }else{
            return true;
        }
    }

    /**
     * Metodo Para mostrar las categorias en el Menu/Options
     * @return bool|mysqli_result
     */
    public static function showCategorias(){
        require_once 'models/Categoria.php';
        $categoria = new Categoria();
        $categorias = $categoria->getAll();
        return $categorias;
    }

    /**
     * Este metodo nos ira contando los productos que tenemos en total y el precio total
     * @return array
     */
    public static function statsCarrito(){
        $stats = array(
            'count' => 0,
            'total' => 0
        );

        if (isset($_SESSION['carrito'])) {
            $stats['count'] = count($_SESSION['carrito']);// Obtenemos las unidades de productos tenemos

            // Aqui recorremos todos los productos y vamos sumando el precio de cada producto por unidad
            foreach ($_SESSION['carrito'] as $producto) {
                $stats['total'] += $producto['precio'] * $producto['unidades'];
            }
        }
        return $stats;
    }// Fin del metodo statsCarrito()

    /**
     * Este metodo nos devolvera la informacion del estado que este el pedido
     * @param $status
     * @return string
     */
    public static function showStatus($status){
        $value = 'Pendiente';

        if ($status == "confirm") {
            $value = 'Pendiente';
        } elseif ($status == "Preparation") {
            $value = 'En preparacion';
        }elseif ($status == "ready") {
            $value = 'Preparado para enviar';
        }elseif ($status == "sended") {
            $value = 'Enviado';
        }
        return $value;
    }
}