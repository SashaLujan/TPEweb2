<?php

require_once 'libs/Smarty.class.php';

class PublicView{

    private $smarty;

    public function __construct()
    {
        $this->smarty = new Smarty();
    }

    public function showHome($error = null)
    {
        $this->smarty->assign('error', $error);
        $this->smarty->display('templates/showHome.tpl');
    }

    public function showError($msg)
    {
        $this->smarty->assign('mensaje', $msg);
        $this->smarty->display('templates/error.tpl');
    }

    //muetra todas las bandas
    public function showBandas($bandas)
    {
        $this->smarty->assign('listaBandas', $bandas);
        $this->smarty->display('templates/showBandas.tpl');
    }

    //muetra todas las computadoras de una marca
    public function cancionesByBanda($cancionesPorBanda)
    {
        $this->smarty->assign('cancionesPorBanda', $cancionesPorBanda);
        $this->smarty->display('templates/cancionesByBanda.tpl');
    }
}