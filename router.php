<?php

require_once 'controllers/public.controller.php';
require_once 'controllers/login.controller.php';
require_once 'controllers/admin.controller.php';

// definimos la base url de forma dinamica
define('BASE_URL', '//' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/');

//defino una accion por defecto
if (empty($_GET['action'])) {
    $_GET['action'] = 'listaBandas';
}
$accion = $_GET['action'];

$parametros = explode('/', $accion);

switch ($parametros[0]) {

        //acciones del public.controller
    case 'listaCanciones':
        $controller = new PublicController();
        $controller -> showCanciones();
        break;
    
    case 'mostrarCancion':
        $controller = new PublicController();
        $controller->showCancion($parametros[1]);
        break;


    case 'listaBandas':
        $controller = new PublicController();
        $controller->showBandas();
        break;

    case 'cancionesPorBanda':
        $controller = new PublicController();
        $controller->showCancionesByBanda($parametros[1]);
        break;

        //acciones del login.controller
    case 'suscribirse':
        $controller = new LoginController();
        $controller->formCheckIn();
        break;

    case 'guardar_usuario':
        $controller = new LoginController();
        $controller->addUser();
        break;

    case 'abrir_sesion':
        $controller = new LoginController();
        $controller->login();
        break;

    case 'cerrar_sesion':
        $controller = new LoginController();
        $controller->logout();
        break;

        //acciones del admin.controller
    case 'agregarBanda':
        $controller = new AdminController();
        $controller->formBanda();
        break;
    case 'guardarBanda':
        $controller = new AdminController();
        $controller->addBanda();
        break;
    case 'editarBanda':
        $controller = new AdminController();
        $controller->editBanda($parametros[1]);
        break;
    case 'guardarEditBanda':
        $controller = new AdminController();
        $controller->modifyBanda();
        break;
    case 'eliminarBanda':
        $controller = new AdminController();
        $controller->deleteBanda($parametros[1]);
        break;


    default:
        $controller = new PublicController();
        $controller->showError("Se ha producido un error, vuelva a intentarlo");
        break;
}
