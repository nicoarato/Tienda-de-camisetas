<?php


class Producto{
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

   public function __construct(){
       $this->db = Database::connect();
   }

    function setId($id){
        $this->id = $id;
    }

    function setCategoriaId($categoria_id){
        $this->categoria_id = $categoria_id;
    }

    function setNombre($nombre){
        $this->nombre = $this->db->real_escape_string($nombre);
    }

    function setDescripcion($descripcion){
        $this->descripcion = $this->db->real_escape_string($descripcion);
    }

    function setPrecio($precio){
        $this->precio = $this->db->real_escape_string($precio);
    }

    function setStock($stock){
        $this->stock = $this->db->real_escape_string($stock);
    }

    function setOferta($oferta){
        $this->oferta = $this->db->real_escape_string($oferta);
    }

    function setFecha($fecha){
        $this->fecha = $fecha;
     }

     function setImagen($imagen){
        $this->imagen = $imagen;
     }

     function getId(){
        return $this->id;
    }

    function getNombre(){
        return $this->nombre;
    }

    function getCategoriaId(){
        return $this->categoria_id;
    }
    
    function getDescripcion(){
        return $this->descripcion;
    }

    function getPrecio(){
        return $this->precio;
    }

    function getStock(){
        return $this->stock;
    }

    function getOferta(){
        return $this->oferta;
    }
    function getFecha(){
        return $this->fecha;
    }

    function getImagen(){
        return $this->imagen;
    }

    public function getAll(){
        $productos = $this->db->query("SELECT * FROM productos ORDER BY id DESC;");
        return $productos;
    }

/* 
    private $id;
    private $categoria_id;
    private $nombre;
    private $descripcion;
    private $precio;
    private $stock;
    private $oferta;
    private $fecha;
    private $imagen; */

    public function save(){
        $sql = "INSERT INTO productos VALUES(NULL, '{$this->getCategoriaId()}', '{$this->getNombre()}', '{$this->getDescripcion()}','{$this->getPrecio()}', '{$this->getStock()}',null ,curdate(), null);";
        $save = $this->db->query($sql);
        
        $result = false;
        if($save){
            $result = true;
        }
        return $result;

    }



}