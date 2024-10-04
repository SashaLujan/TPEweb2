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

    //muestra la banda que el usuario paso por parametro
    public function get($id_banda)
    {
        $db = $this->createConection(); // 1. abro la conexión con MySQL 
        //Creamos la consulta para obtener una categoria
        $sentencia = $db->prepare("SELECT * FROM bandas  WHERE id_banda=?"); // prepara la consulta
        $sentencia->execute([$id_banda]); // ejecuta
        $banda = $sentencia->fetch(PDO::FETCH_OBJ); // obtiene la respuesta
        return $banda;
    }

    public function getName($nombre)
    {
        // 1. abro la conexión con MySQL 
        $db = $this->createConection();
        // 2. enviamos la consulta (3 pasos)
        $sentencia = $db->prepare("SELECT * FROM bandas WHERE nombre_banda=?"); // prepara la consulta
        $sentencia->execute([$nombre]); // ejecuta
        $marca = $sentencia->fetch(PDO::FETCH_OBJ); // obtiene la respuesta
        return $marca;
    }

    public function insert($nombre)
    {
        // 1. abro la conexión con MySQL 
        $db = $this->createConection();
        // 2. enviamos la consulta
        $sentencia = $db->prepare("INSERT INTO bandas(nombre_banda) VALUES(?)"); // prepara la consulta        
        return $sentencia->execute([$nombre]); // ejecuta
    }

    public function update($nombre)
    {
        // 1. abro la conexión con MySQL 
        $db = $this->createConection();
        // 2. enviamos la consulta (3 pasos)
        $sentencia = $db->prepare("UPDATE bandas SET nombre_banda=? WHERE id_banda=?"); // prepara la consulta
        return $sentencia->execute([$nombre]); // ejecuta
    }

    public function delete($id_banda)
    {
        // 1. abro la conexión con MySQL 
        $db = $this->createConection();
        // 2. enviamos la consulta
        $sentencia = $db->prepare("DELETE FROM bandas  WHERE id_banda = ?"); // prepara la consulta
        $sentencia->execute([$id_banda]); // ejecuta 
        return $sentencia;
    }
}
