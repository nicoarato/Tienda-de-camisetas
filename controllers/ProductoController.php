<?php

class productoController{
    public function index(){
        //echo "controlador producto accion INDEX";

        //cargar una vista
        require_once 'views/producto/destacados.php';
    }
}