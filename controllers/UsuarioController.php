<?php
require_once 'models/usuario.php';

class usuarioController{
    public function index(){
        echo "controlador usuario accion INDEX";
    }

    public function registro(){
        require_once 'views/usuario/registro.php';
    }

    public function save(){
        if(isset($_POST)){
            $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : false;
            $apellido = isset($_POST['apellido']) ? $_POST['apellido'] : false;
            $email = isset($_POST['email']) ? $_POST['email'] : false;
            $password = isset($_POST['password']) ? $_POST['password'] : false;

            if($nombre && $apellido && $email && $password){
                $usuario = new Usuario();
                $usuario->setNombre($nombre);
                $usuario->setApellido($apellido);
                $usuario->setEmail($email);
                $usuario->setPassword($password);
                
                $save = $usuario->save();

                if($save){
                    $_SESSION['register']= "complete";
                }else{
                    $_SESSION['register']= "failed";
                }
            }else{
                $_SESSION['register']= "failed";

            }
        }else{
            $_SESSION['register']= "complete";
        }
       header("Location: ". base_url . 'usuario/registro');
    }

    public function login(){
        if(isset($_POST)){
            //identificar al usuario
            //conslta a la base de dats
            $usuario = new Usuario();
            $usuario->setEmail($_POST['email']);
            $usuario->setPassword($_POST['password']);
           
           
            $identity = $usuario->login();
            
            if($identity && is_object($identity)){
                $_SESSION['identity']= $identity;

                if($identity->rol == 'admin'){
                    $_SESSION['admin'] = true;
                }

            }else{
                $_SESSION['error_login']= 'Identificación fallida';
            }

            //crear una sesion
        }
        header("Location: ". base_url);

    }

    public function logout(){
        if(isset($_SESSION['identity'])){
            unset($_SESSION['identity']);
        }

        if(isset($_SESSION['admin'])){
            unset($_SESSION['admin']);
        }

        if(isset($_SESSION['carrito'])){
            unset($_SESSION['carrito']);
        }

        header("Location: ".base_url);

    }
}//fin clase