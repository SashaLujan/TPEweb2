<?php

class CancionesModel{
    private function createConection()
    {
        $host = 'localhost';
        $userName = 'root';
        $password = '';
        $database = 'db_tuletra';
        $pdo = new PDO("mysql:host=$host;dbname=$database;charset=utf8", $userName, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    }

    //muestra las canciones de una banda *preguntar si esta bien hecha la consulta
    public function getCancionesByBandas($id){
        $db = $this->createConection(); // 1. abro la conexión con MySQL 
        //Creamos la consulta para obtener una categoria
        $sentencia = $db->prepare("SELECT * FROM canciones
        WHERE id_banda_fk = ?"); // prepara la consulta
        $sentencia->execute([$id]); // ejecuta
        $cancion = $sentencia->fetchAll(PDO::FETCH_OBJ); // obtiene la respuesta
        return $cancion; 
    }
}