<?php

require_once 'views/base.view.php';

class PublicView extends BaseView{

    public function __construct()
    {
        parent::__construct();
    }

    public function showError($msg)
    {
        $this->getSmarty()->assign('mensaje', $msg);
        $this->getSmarty()->display('templates/error.tpl');
    }

    //muetra todas las bandas
    public function showBandas($bandas)
    {
        $this->getSmarty()->assign('listaBandas', $bandas);
        $this->getSmarty()->display('showBandas.tpl');
    }

    //muetra todas las computadoras de una marca
    public function cancionesByBanda($cancionesPorBanda)
    {
        $this->getSmarty()->assign('cancionesPorBanda', $cancionesPorBanda);
        $this->getSmarty()->display('cancionesPorBanda.tpl');
    }

     //muestra un formulario para poder cargar un usuario nuevo
     public function formCheck($error=null){
        $this->getSmarty()->assign('error', $error);
        $this->getSmarty()->display('formUser.tpl');
    }

    public function showcanciones($canciones){
        $this->getSmarty()->assign('listaCanciones', $canciones);
        $this->getSmarty()->display('showCanciones.tpl');
    }

    public function showcancion($cancion){
        
        $this->getSmarty()->assign('cancion', $cancion);
        $this->getSmarty()->display('showCancion.tpl');
    }
}