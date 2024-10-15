<?php

require_once 'models/login.model.php';
require_once 'views/public.view.php';
require_once 'views/admin.view.php';

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

            $email= $_
            
        }
    }

    //cierra la sesion que esta abierta y redirige al home
    public function logout()
    {
        session_start();
        session_destroy();
        header('Location:' . BASE_URL . 'showBandas');
    }


    //agregar usuario
    public function addUser() {}

    //verifica que tipo de usuario es
    public function formCheckIn()
    {
        $this->viewPublic->formCheck();
    }
}
