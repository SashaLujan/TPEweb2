<?php

class BandasModel
{
    private function createConection(){
        $host = 'localhost';
        $userName = 'root';
        $password = '';
        $database = 'db_tuletra';
        $pdo = new PDO("mysql:host=$host;dbname=$database;charset=utf8", $userName, $password);
        return $pdo;
    }

    //devuelve todas las bandas
    public function getAll(){
      // 1. abro la conexión con MySQL 
      $db = $this->createConection();
      // 2. enviamos la consulta (3 pasos)
      $sentencia = $db->prepare("SELECT * FROM bandas"); // prepara la consulta
      $sentencia->execute(); // ejecuta
      $banda = $sentencia->fetchAll(PDO::FETCH_OBJ); // obtiene la respuesta
      return $banda;  
    }
}
