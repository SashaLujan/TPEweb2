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

    public function showError($msg)
    {
        $this->viewAdmin->showError($msg);
    }

    
    public function login(){
        if(!empty($_POST)){
            $nombre_usuario= $_POST['username'];
            $contraseña= $_POST['contraseña'];            
        }
 
        $usuario = $this->modelLogin->getUser($nombre_usuario);
    
            if(!empty($usuario)&& password_verify($contraseña,$usuario->contraseña)){

                AuthHelper::login($usuario);
                header("location: " . BASE_URL . 'listaBandas');
            }else{
                $this->showError("los datos ingresados no coinciden");
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
