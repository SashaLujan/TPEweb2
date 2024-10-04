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

}