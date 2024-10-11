<?php

require_once 'libs/Smarty.class.php';
require_once 'helpers/auth.helper.php';

class PublicView{

    private $smarty;

    public function __construct()
    {
        $this->smarty = new Smarty();
        $nameUser = authHelper::nameLogged();
        $this->smarty->assign('nameUser', $nameUser);
    }

    public function showError($msg)
    {
        $this->smarty->assign('mensaje', $msg);
        $this->smarty->display('templates/error.tpl');
    }

    //muetra todas las bandas
    public function showBandas($bandas, $logueado)
    {
        $this->smarty->assign('listaBandas', $bandas);
        $this->smarty->assign('logueado', $logueado);
        $this->smarty->display('showBandas.tpl');
    }

    //muetra todas las computadoras de una marca
    public function cancionesByBanda($cancionesPorBanda)
    {
        $this->smarty->assign('cancionesPorBanda', $cancionesPorBanda);
        $this->smarty->display('cancionesPorBanda.tpl');
    }

     //muestra un formulario para poder cargar un usuario nuevo
     public function formCheck($error=null){
        $this->smarty->assign('error', $error);
        $this->smarty->display('formUser.tpl');
    }

    public function showcanciones($canciones){
        $this->smarty->assign('listaCanciones', $canciones);
        $this->smarty->display('showCanciones.tpl');
    }

    public function showcancion($cancion){
        $this->smarty->assign('cancion', $cancion);
        $this->smarty->display('showCancion.tpl');
    }
}