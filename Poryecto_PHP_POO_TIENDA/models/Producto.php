<?php
/**
 * Created by PhpStorm.
 * User: Alfirex
 * Date: 21/02/2019
 * Time: 1:59
 */

class Producto
{
    private $id;
    private $categoria_id;
    private $nombre;
    private $descripcion;
    private $precio;
    private $stock;
    private $oferta;
    private $fecha;
    private $imagen;

    private $db;



    public function __construct()
    {
        $this->db = Database::connect();
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getCategoriaId()
    {
        return $this->categoria_id;
    }

    /**
     * @param mixed $categoria_id
     */
    public function setCategoriaId($categoria_id)
    {
        $this->categoria_id = $categoria_id;
    }

    /**
     * @return mixed
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * @param mixed $nombre
     */
    public function setNombre($nombre)
    {
        $this->nombre = $this->db->real_escape_string($nombre) ;
    }

    /**
     * @return mixed
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * @param mixed $descripcion
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $this->db->real_escape_string($descripcion);
    }

    /**
     * @return mixed
     */
    public function getPrecio()
    {
        return $this->precio;
    }

    /**
     * @param mixed $precio
     */
    public function setPrecio($precio)
    {
        $this->precio = $this->db->real_escape_string($precio);
    }

    /**
     * @return mixed
     */
    public function getStock()
    {
        return $this->stock;
    }

    /**
     * @param mixed $stock
     */
    public function setStock($stock)
    {
        $this->stock = $this->db->real_escape_string($stock);
    }

    /**
     * @return mixed
     */
    public function getOferta()
    {
        return $this->oferta;
    }

    /**
     * @param mixed $oferta
     */
    public function setOferta($oferta)
    {
        $this->oferta = $this->db->real_escape_string($oferta);
    }

    /**
     * @return mixed
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * @param mixed $fecha
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;
    }

    /**
     * @return mixed
     */
    public function getImagen()
    {
        return $this->imagen;
    }

    /**
     * @param mixed $imagen
     */
    public function setImagen($imagen)
    {
        $this->imagen = $this->db->real_escape_string($imagen);
    }

    /**
     * Obtenemos todos los Productos
     * @return bool|mysqli_result
     */
    public function getAll(){
        $productos = $this->db->query("SELECT * FROM productos ORDER BY id DESC;");
        return $productos;
    }

    public function getAllCategory(){
        $sql = "SELECT p.*, c.nombre AS 'catnombre' FROM productos p "
                ."INNER JOIN categorias c ON c.id = p.categoria_id "
                ."WHERE p.categoria_id = {$this->getCategoriaId()};";
        $productos = $this->db->query($sql);
        return $productos;
    }

    /**
     * Este Metodo lo que hara es mostrarnos aleatoriamente X productos que seleccionemos
     * Se mostrar en la principal
     * @param $limit indicamos el limite de cuantos se van a ver
     * @return bool|mysqli_result
     */
    public function getRandom($limit){
        $productos = $this->db->query("SELECT * FROM productos ORDER BY RAND() limit $limit;");
        return $productos;
    }

    /**
     * Devolvemos 1 objeto por ID
     * @return object|stdClass
     */
    public function getFindById(){
        $productos = $this->db->query("SELECT * FROM productos WHERE id = {$this->getId()};");
        return $productos->fetch_object();
    }

    /**
     * Insertamos un Prducto en la BD
     * @return bool
     */
    public function saveProducto(){
        $sql = "INSERT INTO productos VALUES(NULL,'" . $this->getCategoriaId() . "','" . $this->getNombre() . "','" . $this->getDescripcion() . "'," . $this->getPrecio() . "," . $this->getStock() . ", null, CURDATE(), '" . $this->getImagen()."')";
        $save = $this->db->query($sql);

        $result = false;
        if ($save) {
            $result = true;
        }
        return $result;
    }

    /**
     * Editamos Producto por la BD
     * @return bool
     */
    public function editProducto(){
        $sql = "UPDATE productos SET nombre='{$this->getNombre()}',descripcion='{$this->getDescripcion()}', precio='{$this->getPrecio()}', stock='{$this->getStock()}', categoria_id={$this->getCategoriaId()} ";
        if ($this->getImagen() != null) {
            $sql .=    ", imagen='{$this->getImagen()}'";
        }
        $sql .= " WHERE id ={$this->getId()} ;";
        $save = $this->db->query($sql);

        $result = false;
        if ($save) {
            $result = true;
        }
        return $result;
    }

    /**
     * Eliminamos  Producto por la BD
     * @return bool
     */
    public function deleteProducto(){
        $sql = "DELETE FROM productos WHERE id={$this->id}";
        $delete = $this->db->query($sql);

        $result = false;
        if ($delete) {
            $result = true;
        }
        return $result;
    }
}// Fin de la CLase