<?php

require_once 'libs/Smarty.class.php';
require_once 'views/base.view.php';

class AdminView extends BaseView{


    public function __construct()
    {
        parent::__construct();
      
    }

    //muestra un formulario para agregar una banda
    public function formBandaAdd($error = null)
    {
        $this->getSmarty()->assign('error', $error);
        $this->getSmarty()->display('formBandaAdd.tpl');
    }

    //muestra un formulario para editar una banda
    public function showFormEditBanda($banda)
    {
        $this->getSmarty()->assign('banda', $banda);
        $this->getSmarty()->display('showFormEditBanda.tpl');
    }

    public function showError($msg)
    {
        $this->getSmarty()->assign('mensaje', $msg);
        $this->getSmarty()->display('error.tpl');
    }

    public function formCancionAdd($bandas,$error = null)
    {
        $this->getSmarty()->assign('error', $error);
        $this->getSmarty()->assign('bandas', $bandas);
        $this->getSmarty()->display('formAddCancion.tpl');
    }
    public function formCancionEdit($cancion,$bandas,$error = null)
    {
        $this->getSmarty()->assign('error', $error);
        $this->getSmarty()->assign('cancion', $cancion);
        $this->getSmarty()->assign('bandas', $bandas);
        $this->getSmarty()->display('formEditCancion.tpl');
    }
}