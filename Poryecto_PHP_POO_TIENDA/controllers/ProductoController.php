<?php
require_once 'models/Producto.php';

class ProductoController{
    public function index(){
        $producto = new Producto();
        $productos = $producto->getRandom(6);

        // renderizar  vista
        require_once 'views/producto/destacados.php';
    }

    public function ver(){
        if (isset($_GET['id'])) {
            $id = $_GET['id'];

            $producto = new Producto();
            $producto->setId($id);
            $pro = $producto->getFindById();
        }
        require_once 'views/producto/ver.php';
    }

    /**
     * Metodo para Listar los productos
     */
    public function gestion(){
        Utils::isAdmin();
        $producto = new Producto();
        $productos = $producto->getAll();// Obtenemos todos los productos de la BD
        require_once 'views/producto/gestion.php';
    }

    /**
     * Metodo para insertar un nuevo Producto
     */
    public function crear(){
        Utils::isAdmin();
        require_once 'views/producto/crear.php';
    }

    /**
     * Metodo para insertar un Producto
     */
    public function save(){
        Utils::isAdmin();
        if (isset($_POST)){
            $nombre = isset($_POST['name']) ? $_POST['name'] : false;
            $descripcion = isset($_POST['description']) ? $_POST['description'] : false;
            $precio = isset($_POST['price']) ? $_POST['price'] : false;
            $stock = isset($_POST['stock']) ? $_POST['stock'] : false;
            $categoria = isset($_POST['category']) ? $_POST['category'] : false;

            if ($nombre && $descripcion && $precio && $stock && $categoria) {
                $producto = new Producto();
                $producto->setNombre($nombre);
                $producto->setDescripcion($descripcion);
                $producto->setPrecio($precio);
                $producto->setStock($stock);
                $producto->setCategoriaId($categoria);

                // Guardar Imagen
                if (isset($_FILES['image'])) {
                    $file = $_FILES['image'];
                    $filename = $file['name'];
                    $mimetype = $file['type'];
                    // Comprobamos de que las extensiones sean d eimagtenes
                    if ($mimetype == "image/jpg" || $mimetype == "image/jpeg" || $mimetype == "image/png" || $mimetype == "image/gif") {
                        if (!is_dir('uploads/images')) {// Comprobamos que este ese directorio
                            mkdir('uploads/images', 0777, true);// Creamos directorio
                        }
                        move_uploaded_file($file['tmp_name'], 'uploads/images/' . $filename);// Guardamos la imagen
                        $producto->setImagen($filename);// Guardamos la imagen a la carpeta.
                    }
                }
                if (isset($_GET['id'])) {
                    $id = $_GET['id'];
                    $producto->setId($id);
                    $save = $producto->editProducto();
                }else{
                    $save = $producto->saveProducto();
                }


                if ($save) {
                    $_SESSION['producto'] = "complete";
                } else {
                    $_SESSION['producto'] = "failed";
                }
            } else {
                $_SESSION['producto'] = "failed";
            }
        } else {
            $_SESSION['producto'] = "failed";
        }
        header("Location:" . base_url . 'producto/gestion');
    }

    /**
     * Metodo para Editar Producto
     */
    public function editar(){
        Utils::isAdmin();
        if (isset($_GET['id'])) {
            $edit = true;
            $id = $_GET['id'];

            $producto = new Producto();
            $producto->setId($id);
            $pro = $producto->getFindById();
            var_dump($pro);

            require_once 'views/producto/crear.php';
        }else{
            header('Location:' . base_url . 'producto/gestion');
        }

    }

    /**
     * Metodo para Eliminar Producto
     */
    public function eliminar(){
        Utils::isAdmin();
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $producto = new Producto();
            $producto->setId($id);
            $delete = $producto->deleteProducto();
            if ($delete) {
                $_SESSION['delete'] = 'complete';
            }else{
                $_SESSION['delete'] = 'failed';
            }
        }else{
            $_SESSION['delete'] = 'failed';
        }
        header('Location:' . base_url . 'producto/gestion');
    }
}// Fin de la clase