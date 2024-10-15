<?php
require_once 'models/bandas.model.php';
require_once 'models/canciones.model.php';
require_once 'views/public.view.php';
require_once 'helpers/auth.helper.php';

class PublicController{
    private $modelBandas;
    private $modelCanciones;
    private $viewPublic;
    private $auth;

    public function __construct()
    {
        $this->modelBandas = new BandasModel();
        $this->modelCanciones = new CancionesModel();
        $this->viewPublic = new PublicView();
        $this->auth = new AuthHelper();
    }

    //muestra todas las bandas de la db
    public function showBandas(){
        //le pido las bandas al modelo
        $bandas = $this->modelBandas->getAll();

        //actualiazo la vista
        $this->viewPublic->showBandas($bandas);
    }

    //muestro las canciones que tiene una banda
    public function showCancionesByBanda($banda){
        $cancionesPorBanda = $this->modelCanciones->getCancionesByBandas($banda);
        if(empty($cancionesPorBanda)){
            $this->viewPublic->showError("no tiene canciones");
        }
        else{
            $this->viewPublic->cancionesByBanda($cancionesPorBanda);
        }
    }

    public function showError($msg){
        $this->viewPublic->showError($msg);
    }

    public function showCanciones(){

        //le pido las canciones al modelo
        $canciones = $this->modelCanciones->getAll();

        //actualiazo la vista
        $this->viewPublic->showCanciones($canciones);
    }
    public function showCancion($id){
        //le pido las canciones al modelo
        $cancion = $this->modelCanciones->cancion($id);
        //actualiazo la vista
        $this->viewPublic->showCancion($cancion);
    }
}