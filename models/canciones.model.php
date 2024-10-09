<?php

require_once 'model.php';
class CancionesModel extends Model
{

    //muestra las canciones de una banda 
    public function getCancionesByBandas($id)
    {
        //Creamos la consulta para obtener una categoria
        $sentencia = $this->db->prepare("SELECT * FROM canciones
        WHERE id_banda_fk = ?"); // prepara la consulta
        $sentencia->execute([$id]); // ejecuta
        $cancion = $sentencia->fetchAll(PDO::FETCH_OBJ); // obtiene la respuesta
        return $cancion;
    }

    public function getAll(){

        //Creamos la consulta para obtener todos los items
        $sentencia = $this->db->prepare("SELECT * FROM canciones"); // prepara la consulta
        $sentencia->execute(); // ejecuta
        $canciones = $sentencia->fetchAll(PDO::FETCH_OBJ); // obtiene la respuesta
        return $canciones;
    }

    public function cancion($id){

        //Creamos la consulta para obtener la cancion
        $sentencia = $this->db->prepare("SELECT * FROM canciones WHERE id_cancion = ?"); // prepara la consulta
        $sentencia->execute([$id]); // ejecuta
        $cancion = $sentencia->fetchAll(PDO::FETCH_OBJ); // obtiene la respuesta
        return $cancion;
    }
}
