<?php
require_once 'helpers/auth.helper.php';
class BaseView{

    private $smarty;
    public function __construct(){

        $this->smarty= new Smarty();
        $this->smarty->assign('base_url' , BASE_URL);
        $this->smarty->assign('aviso', NULL);
        $nameUser = authHelper::nameLogged();
        $this->smarty->assign('nameUser', $nameUser);
        $logueado= authHelper::checkLogged();
        $this->smarty->assign('logueado', $logueado);

    }

    public function setAviso($aviso){

        $this->smarty->assign('aviso', $aviso);
    }
    public function getSmarty(){
        return $this->smarty;
    }

}