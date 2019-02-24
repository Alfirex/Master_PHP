<?php
require_once 'models/pedido.php';
class PedidoController{
    /**
     * Metodo Que Nos Llevara al formulario de Direccion
     */
    public function hacer(){
        // renderizamos vista
        require_once 'views/pedido/hacer.php';
    }// Fin Metodo hacer()

    /**
     * Metodo para Insertar un Pedido
     */
    public function add(){
        if (isset($_SESSION['identity'])) {// Comprobamos que hay un usuario logueado
            $usuario_id = $_SESSION['identity']->id;// Obtenemos el ID del Usuario logueado
            $sProvincia = isset($_POST['province']) ? $_POST['province'] : false;
            $sLocalidad = isset($_POST['location']) ? $_POST['location'] : false;
            $sDireccion = isset($_POST['address']) ? $_POST['address'] : false;

            $stats = Utils::statsCarrito();
            $coste = $stats['total'];// Obtenemos el coste total del pedido


            if ($sProvincia && $sLocalidad && $sDireccion){
                // Guardar datos en bd
                $oPedido = new Pedido();
                $oPedido->setUsuarioId($usuario_id);
                $oPedido->setProvincia($sProvincia);
                $oPedido->setLocalidad($sLocalidad);
                $oPedido->setDireccion($sDireccion);
                $oPedido->setCoste($coste);

                $save = $oPedido->savePedido();// Insertamos el Pedido en BD

                // Guardar Linea Pedido
                $save_linea = $oPedido->save_linea();

                if ($save && $save_linea){// Comprobamos que La inserccion a sido correcta
                    $_SESSION['pedido'] = "complete";
                }else{
                    $_SESSION['pedido'] = "failed";
                }
            }else{
                $_SESSION['pedido'] = "failed";

            }
            header("Location:" . base_url .'pedido/confirmado');
        }else{
            // Redirigir al Index
            header("Location:" . base_url);
        }
    }// Fin Metodo add()

    /**
     * Metodo Que nos cargara una pagina Diciendo que hemos llegado a comprar.
     */
    public function confirmado(){
        if (isset($_SESSION['identity'])){
            $identity = $_SESSION['identity'];
            $oPedido = new Pedido();
            $oPedido->setUsuarioId($identity->id);

            $pedido = $oPedido->getOneByUser();

            $oPedido_Productos = new Pedido();
            $productos = $oPedido_Productos->getProductosByPedido($pedido->id);
        }

        require_once 'views/pedido/confirmado.php';
    }// Fin Metodo confirmado()

    /**
     * Carga una vista y Muestra un listado de los pedidos que ha llegado ha hacer el Usuario
     */
    public function mis_pedidos(){
        Utils::isIdentity();
        $usuario_id = $_SESSION['identity']->id;

        // Sacar los pedidos del usuario
        $oPedido = new Pedido();
        $oPedido->setUsuarioId($usuario_id);
        $pedidos = $oPedido->getAllByUser();

        require_once 'views/pedido/mis_pedidos.php';
    }// Fin metodo mis_pedidos()

    public function detalle(){
        Utils::isIdentity();

        if (isset($_GET['id'])){
            $id = $_GET['id'];

            // Sacar el pedido
            $oPedido = new Pedido();
            $oPedido->setId($id);
            $pedido = $oPedido->getFindById();

            // Sacar Los productos
            $oPedido_Productos = new Pedido();
            $productos = $oPedido_Productos->getProductosByPedido($id);

            require_once 'views/pedido/detalle.php';
        }else{
            header('Location:' . base_url . 'pedido/mis_pedidos');
        }
    }// Fin metodo detalles()

    /**
     * Metodo que cargar una vista donde se visualizara todos los pedidos de la tienda,
     * al cual solo podra ver el admin
     */
    public function gestionPedidos(){
        Utils::isAdmin();
        $gestion = true;

        $oPedido = new Pedido();
        $pedidos = $oPedido->getAll();

        require_once 'views/pedido/mis_pedidos.php';
    }// Fin metodo gestionPedidos()

    public function estado(){
        Utils::isAdmin();
        if (isset($_POST['pedido_id']) && isset($_POST['estado'])) {
            // Recogemos la Informacion del Formulario
            $id = $_POST['pedido_id'];
            $estado = $_POST['estado'];

            // Update del pedido
            $oPedido = new Pedido();
            $oPedido->setId($id);
            $oPedido->setEstado($estado);
            $oPedido->updateStatus();

            header("Location:" . base_url . 'pedido/detalle&id=' . $id);
        }else{
            header("Location:" . base_url);
        }
    }
}// Fin de Clase