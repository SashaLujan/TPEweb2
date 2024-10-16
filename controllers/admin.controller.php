<?php

require_once 'models/bandas.model.php';
require_once 'models/canciones.model.php';
require_once 'models/login.model.php';
require_once 'views/admin.view.php';
require_once 'views/public.view.php';
require_once 'helpers/auth.helper.php';

class AdminController{

    private $modelBandas;
    private $modelCanciones;
    private $modelLogin;
    private $viewAdmin;
    private $viewPublic;

    public function __construct()
    {
        authHelper::checkLogged();
        $this->modelBandas = new BandasModel();
        $this->modelCanciones = new CancionesModel();
        $this->modelLogin = new LoginModel();
        $this->viewAdmin = new AdminView();
        $this->viewPublic = new PublicView();
    }

    //muestra un formulario vacio para cargar una banda
    public function formBanda(){
        $this->viewAdmin->formBandaAdd();
    }

    //guarda una nueva banda
    public function addBanda(){
        if(empty($_POST['nombre_banda'])){
            $this->viewAdmin->showError("No completo los datos obligatorios");
        } else{
            $banda = $this->modelBandas->getName($_POST['nombre_banda']);
            if(!empty($banda)){
                $this->viewAdmin->showError("La banda ya existe");
            } else{
                $this->modelBandas->insert($_POST['nombre_banda']);
                header('Location: ' . BASE_URL . 'agregarBanda');
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
        if (empty($_POST['nombre_banda'])) {
            $banda = $this->modelBandas->getName($_POST['nombre_banda']);
            $this->viewAdmin->showFormEditBanda($banda, "completar todos los campos");
        }
        else{
            $this->modelBandas->update($_POST['nombre_banda']);
            $banda = $this->modelBandas->getName($_POST['nombre_banda']);
            $this->viewAdmin->showFormEditBanda($banda, "los cambios se guardaron correctamente");
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

    public function formCancion(){
        $bandas=$this->modelBandas->getAll();
        $this->viewAdmin->formCancionAdd($bandas);
    }

    public function addCancion(){
        $nombre_cancion = $_POST["nombreCancion"];
        $id_banda = $_POST["idBanda"];
        $letra_cancion = $_POST["letraCancion"];
        $genero_cancion = $_POST["genero"];

        if(!empty($nombre_cancion)&&!empty($id_banda)&&!empty($letra_cancion)&&!empty($genero_cancion)){
            
           $agregada = $this->modelCanciones->addCancion($nombre_cancion,$letra_cancion,$genero_cancion,$id_banda);
            if($agregada){

                header('Location: ' . BASE_URL . 'listaCanciones');
            }else{

                $this->showError("ERROR! no se pudo agregar la canción, intente nuevamente");
            }
        }else{
            $this->showError("ERROR! quedaron campos vacios");
        }
      
    }
    public function formEditCancion($id_cancion){

        $cancion = $this->modelCanciones->cancion($id_cancion);
        $bandas=$this->modelBandas->getAll();
        $this->viewAdmin->formCancionEdit($cancion, $bandas);
    }

    public function editCancion(){

        $nombre_cancion = $_POST["nombreCancion"];
        $id_banda = $_POST["idBanda"];
        $letra_cancion = $_POST["letraCancion"];
        $genero_cancion = $_POST["genero"];
        $id_cancion=$_POST["id_cancion"];
        if(!empty($nombre_cancion)&&!empty($id_banda)&&!empty($letra_cancion)&&!empty($genero_cancion)&&!empty($id_cancion)){
            
           $editada = $this->modelCanciones->editCancion($nombre_cancion,$letra_cancion,$genero_cancion,$id_banda,$id_cancion);
            if($editada){

                header('Location: ' . BASE_URL . 'listaCanciones');
            }else{

                $this->showError("ERROR! no se pudo editar la canción, intente nuevamente");
            }
        }else{
            $this->showError("ERROR! quedaron campos vacios");
        }
    }
    //deleteCancion($id_cancion){}   
}