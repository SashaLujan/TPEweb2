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
}
