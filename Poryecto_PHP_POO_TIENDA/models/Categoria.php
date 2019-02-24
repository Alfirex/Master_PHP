<?php
/**
 * Entity Categoria
 * Encargada de Tener Los Metodos con Insercion a la BD y Mostrar
 */

class Categoria
{
    private $id;
    private $nombre;

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
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * @param mixed $nombre
     */
    public function setNombre($nombre)
    {
        $this->nombre = $this->db->real_escape_string($nombre);
    }

    /**
     * Devuleve Todas las categorias
     * @return bool|mysqli_result
     */
    public function  getAll(){
        $categorias = $this->db->query("SELECT * FROM categorias ORDER BY id DESC;");
        return $categorias;
    }

    public function  getOne(){
        $categorias = $this->db->query("SELECT * FROM categorias WHERE id={$this->getId()};");
        return $categorias->fetch_object();
    }

    public function saveCategorias(){
        $sql = "INSERT INTO categorias VALUES(NULL, '{$this->getNombre()}')";
        $save = $this->db->query($sql);

        $result = false;
        if ($save) {
            $result = true;
        }
        return $result;
    }

}