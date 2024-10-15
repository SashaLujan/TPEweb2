<?php

require_once 'models/login.model.php';
require_once 'views/public.view.php';
require_once 'views/admin.view.php';
require_once 'helpers/auth.helper.php';

class LoginController
{
    private $modelLogin;
    private $viewAdmin;
    private $viewPublic;

    public function __construct()
    {
        $this->modelLogin = new LoginModel();
        $this->viewAdmin = new AdminView();
        $this->viewPublic = new PublicView();
    }

    
    public function login(){
        if(!empty($_POST)){
            $nombre_usuario= $_POST['username'];
            $contraseña= $_POST['contraseña'];            
        }
 
        $usuario = $this->modelLogin->getUser($nombre_usuario);
        if(!empty($usuario)){
            if($contraseña==$usuario->contraseña){

                AuthHelper::login($usuario);
                header("location: " . BASE_URL . 'listaBandas');
            }
        }else{
            //TODO debería mostrar a la vista que el username no existe
        }
        

    }

    //cierra la sesion que esta abierta y redirige al home
    public function logout()
    {
        if(session_status()!=PHP_SESSION_ACTIVE){
            session_start();
        }
        session_destroy();
        header('Location:' . BASE_URL . 'listaBandas');
    }


    //agregar usuario
    public function addUser() {}

    //verifica que tipo de usuario es
    public function formCheckIn()
    {
        $this->viewPublic->formCheck();
    }
}
