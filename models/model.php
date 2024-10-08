<?php
require_once('config/config.php');

class Model
{
    public $db;

    public function __construct()
    {
        $this->db = $this->createConection();
    }

    //Crea la conexión a la DB
    protected function crearConexion()
    {
        $host = 'host';
        $user = 'usuario';
        $password = 'password';
        $database = 'database';

        try {
            $pdo = new PDO("mysql:host=$host;dbname=$database;charset=utf8", $user, $password);
        } catch (\Throwable $th) {
            die($th);
        }

        return $pdo;
    }
}
