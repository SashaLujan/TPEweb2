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
}