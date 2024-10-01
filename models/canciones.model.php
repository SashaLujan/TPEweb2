<?php

class CancionesModel{
    private function createConection()
    {
        $host = 'localhost';
        $userName = 'root';
        $password = '';
        $database = 'canciones';
        $pdo = new PDO("mysql:host=$host;dbname=$database;charset=utf8", $userName, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    }

    //muestra las canciones de una banda *preguntar si esta bien hecha la consulta
    public function getCancionesByBandas(){
        $db = $this->createConection(); // 1. abro la conexión con MySQL 
        //Creamos la consulta para obtener una categoria
        $sentencia = $db->prepare("SELECT * FROM canciones  WHERE nombre_banda=?"); // prepara la consulta
        $sentencia->execute(); // ejecuta
        $cancion = $sentencia->fetchAll(PDO::FETCH_OBJ); // obtiene la respuesta
        return $cancion; 
    }
}