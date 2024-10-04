<?php

require_once 'libs/Smarty.class.php';
require_once 'helpers/auth.helper.php';

class AdminView
{

    private $smarty;

    public function __construct()
    {
        $this->smarty = new Smarty();
        $nameUser = authHelper::nameLogged();
        $this->smarty->assign('nameUser', $nameUser);
    }

    //muestra un formulario para agregar una banda
    public function formBandaAdd($error = null)
    {
        $this->smarty->assign('error', $error);
        $this->smarty->display('formBandaAdd.tpl');
    }

    //muestra un formulario para editar una banda
    public function showFormEditBanda($banda)
    {
        $this->smarty->assign('listaBandas', $banda);
        $this->smarty->display('showFormEditBanda.tpl');
    }

    public function showError($msg)
    {
        $this->smarty->assign('mensaje', $msg);
        $this->smarty->display('error.tpl');
    }
}