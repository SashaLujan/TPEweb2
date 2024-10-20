<?php

require_once 'models/bandas.model.php';
require_once 'models/canciones.model.php';
require_once 'models/login.model.php';
require_once 'views/admin.view.php';
require_once 'views/public.view.php';
require_once 'helpers/auth.helper.php';

class AdminController
{

    private $modelBandas;
    private $modelCanciones;
    private $modelLogin;
    private $viewAdmin;
    private $viewPublic;


    public function __construct()
    {
        $this->modelBandas = new BandasModel();
        $this->modelCanciones = new CancionesModel();
        $this->modelLogin = new LoginModel();
        $this->viewAdmin = new AdminView();
        $this->viewPublic = new PublicView();
        $logueado = AuthHelper::checkLogged();
        if(!$logueado){
            header('Location: ' . BASE_URL . 'suscribirse');
        }
    }

    //muestra un formulario vacio para cargar una banda
    public function formBanda() {

            $this->viewAdmin->formBandaAdd();
    } 
    

    //guarda una nueva banda
    public function addBanda()
    {
     
        $nombre = $_POST['nombre'];
        $foto = $_POST['foto'];
        if (empty($nombre) || empty($foto)) {
            $this->viewAdmin->showError("No completo los datos obligatorios");
        } else {
            $banda = $this->modelBandas->getName($nombre);
            if (!empty($banda)) {
                    $this->viewAdmin->showError("La banda ya existe");
            } else {
                    $this->modelBandas->insert($nombre, $foto);
                    header('Location: ' . BASE_URL . 'listaBandas');
            }
        }
        
    }

    //muestra formulario para editar una banda
    public function editBanda($id_banda)
    {
 
        $banda = $this->modelBandas->get($id_banda);
        $this->viewAdmin->showFormEditBanda($banda);
         
    }

    //modifica una banda
    public function modifyBanda()
    {


        $nombre = $_POST['nombre'];
        $foto = $_POST['foto'];
        $id = $_POST['id'];
        if (empty($nombre) || empty($foto) || empty($id)) {

            $this->showError("Error, debe completar todos los campos");
        } else {
            $editado = $this->modelBandas->update($nombre, $foto, $id);
            if (!$editado){
                $this->showError("ERROR! no se pudo editar la banda, intente nuevamente");
            }
            else{

                 header('Location: ' . BASE_URL . 'listaBandas');
            }
        }
        
    }

    //elimina una banda
    public function deleteBanda($id_Banda)
    { 
        $this->modelBandas->delete($id_Banda);
        header('Location: ' . BASE_URL . 'listaBandas'); 
    }

    public function showError($msg)
    {
        $this->viewAdmin->showError($msg);
    }

    public function formCancion()
    {
        $bandas = $this->modelBandas->getAll();
        $this->viewAdmin->formCancionAdd($bandas);
    }

    public function addCancion()
    {

         $nombre_cancion = $_POST["nombreCancion"];
         $id_banda = $_POST["idBanda"];
        $letra_cancion = $_POST["letraCancion"];
        $genero_cancion = $_POST["genero"];

        if (!empty($nombre_cancion) && !empty($id_banda) && !empty($letra_cancion) && !empty($genero_cancion)) {

               $agregada = $this->modelCanciones->addCancion($nombre_cancion, $letra_cancion, $genero_cancion, $id_banda);
            if ($agregada) {

                header('Location: ' . BASE_URL . 'listaCanciones');
            } else {

                $this->showError("ERROR! no se pudo agregar la canción, intente nuevamente");
            }
        } else {
            $this->showError("ERROR! quedaron campos vacios");
        }
        
    }

    public function formEditCancion($id_cancion)
    {

        $cancion = $this->modelCanciones->cancion($id_cancion);
        $bandas = $this->modelBandas->getAll();
        $this->viewAdmin->formCancionEdit($cancion, $bandas);
    }

    public function editCancion()
    {

        $nombre_cancion = $_POST["nombreCancion"];
        $id_banda = $_POST["idBanda"];
        $letra_cancion = $_POST["letraCancion"];
        $genero_cancion = $_POST["genero"];
        $id_cancion = $_POST["id_cancion"];
        if (!empty($nombre_cancion) && !empty($id_banda) && !empty($letra_cancion) && !empty($genero_cancion) && !empty($id_cancion)) {

            $editada = $this->modelCanciones->editCancion($nombre_cancion, $letra_cancion, $genero_cancion, $id_banda, $id_cancion);
            if ($editada) {

                header('Location: ' . BASE_URL . 'listaCanciones');
            } else {

                $this->showError("ERROR! no se pudo editar la canción, intente nuevamente");
            }
        } else {
            $this->showError("ERROR! quedaron campos vacios");
        }
        
    }
    public function deleteCancion($id_cancion)
    {
        $eliminada = $this->modelCanciones->delete($id_cancion);
        if ($eliminada) {

            header('Location: ' . BASE_URL . 'listaCanciones');
        } else {

            $this->showError("ERROR! no se pudo eliminar la canción, intente nuevamente");
        }
    }
}
