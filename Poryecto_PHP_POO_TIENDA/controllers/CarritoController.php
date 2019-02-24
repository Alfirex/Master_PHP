<?php
require_once 'models/Producto.php';

class CarritoController
{
    public function index(){
        
         if(isset($_SESSION['carrito']) && count($_SESSION['carrito']) >= 1){
             $carrito = $_SESSION['carrito'];
         }else{
             $carrito = array();
         }

        require_once 'views/carrito/index.php';
    }

    /**
     * Metodo para Añadir
     */
    public function add(){
        if (isset($_GET['id'])) { // Obtenemos el ID del producto
            $producto_id = $_GET['id'];
        }else{// En el caso de que no se reciba nada que vaya a Index
            header('Location:' . base_url);
        }

        if (isset($_SESSION['carrito'])) {// En el caso de que Exista ya el Carrito
            $counter = 0;
            foreach ($_SESSION['carrito'] as $indice => $elemento) {
                if ($elemento['id_producto'] == $producto_id) {
                    $_SESSION['carrito'][$indice]['unidades']++;
                    $counter++;
                }
            }
        }
        if (!isset($counter) || $counter == 0){
            // Conseguir producto
            $oProducto = new Producto();
            $oProducto->setId($producto_id);
            $producto = $oProducto->getFindById();

            // Añadir al carrito
            if (is_object($producto)) {
                $_SESSION['carrito'][] = array(
                    "id_producto" => $producto->id,
                    "precio" => $producto->precio,
                    "unidades" => 1,
                    "producto" => $producto
                );
            }
        }
        header("Location:" . base_url. "carrito/index");

    }

    /**
     * Metodo que eliminara 1 producto del carrito
     */
    public function delete(){
        if (isset($_GET['indice'])) {
            $index = $_GET['indice'];
            unset($_SESSION['carrito'][$index]);
        }
        header("Location:" . base_url. "carrito/index");
    }

    /**
     * Eliminarmos todo lo que contenga el carrito
     */
    public function delete_all(){
        unset($_SESSION['carrito']);
        header("Location:" . base_url. "carrito/index");
    }

    public function up(){
        if (isset($_GET['indice'])) {
            $index = $_GET['indice'];
            $_SESSION['carrito'][$index]['unidades']++;
        }
        header("Location:" . base_url. "carrito/index");
    }

    public function down(){
        if (isset($_GET['indice'])) {
            $index = $_GET['indice'];
            $_SESSION['carrito'][$index]['unidades']--;
            if ($_SESSION['carrito'][$index]['unidades'] == 0) {
                unset($_SESSION['carrito'][$index]);
            }
        }
        header("Location:" . base_url. "carrito/index");
    }
}