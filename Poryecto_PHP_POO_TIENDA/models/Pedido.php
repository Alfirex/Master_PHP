<?php
/**
 * Created by PhpStorm.
 * User: Alfirex
 * Date: 23/02/2019
 * Time: 0:51
 */

class Pedido
{
    private $id;
    private $usuario_id;
    private $provincia;
    private $localidad;
    private $direccion;
    private $coste;
    private $estado;
    private $fecha;
    private $hora;

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
    public function getUsuarioId()
    {
        return $this->usuario_id;
    }

    /**
     * @param mixed $usuario_id
     */
    public function setUsuarioId($usuario_id)
    {
        $this->usuario_id = $usuario_id;
    }

    /**
     * @return mixed
     */
    public function getProvincia()
    {
        return $this->provincia;
    }

    /**
     * @param mixed $provincia
     */
    public function setProvincia($provincia)
    {
        $this->provincia = $this->db->real_escape_string($provincia);
    }

    /**
     * @return mixed
     */
    public function getLocalidad()
    {
        return $this->localidad;
    }

    /**
     * @param mixed $localidad
     */
    public function setLocalidad($localidad)
    {
        $this->localidad = $this->db->real_escape_string($localidad);
    }

    /**
     * @return mixed
     */
    public function getDireccion()
    {
        return $this->direccion;
    }

    /**
     * @param mixed $direccion
     */
    public function setDireccion($direccion)
    {
        $this->direccion = $this->db->real_escape_string($direccion);
    }

    /**
     * @return mixed
     */
    public function getCoste()
    {
        return $this->coste;
    }

    /**
     * @param mixed $coste
     */
    public function setCoste($coste)
    {
        $this->coste = $coste;
    }

    /**
     * @return mixed
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * @param mixed $estado
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;
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
    public function getHora()
    {
        return $this->hora;
    }

    /**
     * @param mixed $hora
     */
    public function setHora($hora)
    {
        $this->hora = $hora;
    }


    /**
     * Obtenemos todos los Productos
     * @return bool|mysqli_result
     */
    public function getAll(){
        $productos = $this->db->query("SELECT * FROM pedidos ORDER BY id DESC;");
        return $productos;
    }

    /**
     * Devolvemos 1 objeto por ID
     * @return object|stdClass
     */
    public function getFindById(){
        $productos = $this->db->query("SELECT * FROM pedidos WHERE id = {$this->getId()};");
        return $productos->fetch_object();
    }

    /**
     * Este metodo saca el ultimo pedido de un Usuario
     * @return object|stdClass
     */
    public function getOneByUser(){
        $sql = "SELECT p.id, p.coste FROM pedidos p "
                //. "INNER JOIN lineas_pedidos lp ON lp.pedido_id = p.id "
                . "WHERE usuario_id = {$this->getUsuarioId()} ORDER BY id DESC LIMIT 1";
        $pedido = $this->db->query($sql);
        return $pedido->fetch_object();
    }

    public function getAllByUser(){
        $sql = "SELECT p.* FROM pedidos p "
             . "WHERE usuario_id = {$this->getUsuarioId()} ORDER BY id DESC";
        $pedido = $this->db->query($sql);
        return $pedido;
    }


    public function getProductosByPedido($id){
//        $sql = "SELECT * FROM productos WHERE id "
//              . "IN (SELECT producto_id FROM lineas_pedidos WHERE pedido_id={$id});";

        $sql = "SELECT pr.*, lp.unidades  FROM productos pr "
             . "INNER JOIN lineas_pedidos lp ON pr.id = lp.producto_id "
             . "WHERE lp.pedido_id = {$id}";

        $productos = $this->db->query($sql);
        return $productos;
    }

    /**
     * Insertamos un Prducto en la BD
     * @return bool
     */
    public function savePedido(){
        $sql = "INSERT INTO pedidos VALUES(NULL,'" . $this->getUsuarioId() . "','" . $this->getProvincia() . "','" . $this->getLocalidad() . "','" . $this->getDireccion() . "'," . $this->getCoste() . ", 'confirm', CURDATE(), CURTIME() );";
        $save = $this->db->query($sql);

        $result = false;
        if ($save) {
            $result = true;
        }
        return $result;
    }

    /**
     * Este metodo se encargar de insertar en la tabla de Intermedia de Producto y Pedido
     * @return bool
     */
    public function save_linea(){
        // Obtenemos el ultimo id de la ultima SQL
        $sql = "SELECT LAST_INSERT_ID() as 'pedido';";
        $query = $this->db->query($sql);
        $pedido_id = $query->fetch_object()->pedido;

        // Recorremos un array para ir Insertando cada producto de nuestro carrito
        foreach ($_SESSION['carrito'] as $elemento){
            $producto = $elemento['producto'];// Obtenemos todo el objeto del producto

            // SQL de Inserccion
            $insert = "INSERT INTO lineas_pedidos VALUES (NULL, {$pedido_id}, {$producto->id}, {$elemento['unidades']} )";
            $save = $this->db->query($insert);
        }

        $result = false;
        if ($save) {
            $result = true;
        }
        return $result;
    }

    /**
     * Metodo que acutalizara el estado de un Pedido
     * @return bool
     */
    public function updateStatus(){
        $sql = "UPDATE pedidos SET estado='{$this->getEstado()}' ";
        $sql .= " WHERE id ={$this->getId()} ;";

        $save = $this->db->query($sql);

        $result = false;
        if ($save) {
            $result = true;
        }
        return $result;
    }

}// Fin de la Clase