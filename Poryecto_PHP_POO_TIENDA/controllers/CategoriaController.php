<?php
require_once 'models/Categoria.php';
require_once 'models/Producto.php';

class CategoriaController{

    /**
     * Metodo para cargar la vista de listado de Categorias
     */
    public function index(){
        Utils::isAdmin();
        $categoria = new Categoria();
        $categorias = $categoria->getAll();// Obtenemos todos los productos de la BD

        require_once 'views/categoria/index.php';
    }

    /**
     * Metodo para cargar la vista de insertar Categoria
     */
    public function crear(){
        Utils::isAdmin();
        require_once 'views/categoria/crear.php';
    }

    public function ver(){
        if (isset($_GET['id'])) {
            $id = $_GET['id'];

            // Conseguir Categoria
            $oCategoria = new Categoria();
            $oCategoria->setId($id);
            $categoria = $oCategoria->getOne();//Obtenemos la categoria de ese Id

            // Conseguir Productos
            $oProducto = new Producto();
            $oProducto->setCategoriaId($id);
            $productos = $oProducto->getAllCategory();
        }
        require_once 'views/categoria/ver.php';
    }

    /**
     * Metodo de Insetar Categoria
     */
    public function save(){
        Utils::isAdmin();
        if (isset($_POST) && isset($_POST['name'])) {
            // Guardar la Categoria en BD
            $categoria = new Categoria();
            $categoria->setNombre($_POST['name']);
            $categoria->saveCategorias();// Inserta la categoria en la BD
        }
        header("Location:" . base_url . "categoria/index");
    }
}// Fin de la clase