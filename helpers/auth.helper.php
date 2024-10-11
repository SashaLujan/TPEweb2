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
            return $_SESSION['nombre_usuario'];
        }
        return null;
    }

    //verifica que haya algun usuario logueado y si no hay ninguno te manda al home
    static public function checkLogged()
    {
        session_start();
        if (isset($_SESSION['nombre_usuario'])) {
            return true;
        } else {
            return false;
        }
    }
}