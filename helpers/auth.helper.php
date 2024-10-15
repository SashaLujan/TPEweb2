<?php

class AuthHelper
{

    //verifica que haya un usuario logueado
    static public function userLogged()
    {
        if (session_status() != PHP_SESSION_ACTIVE) {
            session_start();
        }
        if (isset($_SESSION['IS_LOGGED'])) {
            return true;
        }
        return false;
    }

    //verifica que haya un usuario logueado y si lo hay devuelve su nombre
    static public function nameLogged()
    {
        if (session_status() != PHP_SESSION_ACTIVE) {
            session_start();
        }
        if (isset($_SESSION['IS_LOGGED'])) {
            return $_SESSION['USER_NAME'];
        }
        return null;
    }

    //verifica que haya algun usuario logueado y si no hay ninguno te manda al home
    static public function checkLogged()
    {
        if (session_status() != PHP_SESSION_ACTIVE) {
            session_start();
        }
        if (isset($_SESSION['USER_NAME'])) {
            return true;
        } else {
            return false;
        }
    }

    static public function login($usuario){
        if(session_status()!=PHP_SESSION_ACTIVE){
            session_start();
        }
        $_SESSION['IS_LOGGED']=true;
        $_SESSION['USER_NAME']=$usuario->nombre_usuario;
    }
}