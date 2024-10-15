<?php

require_once 'model.php';
class LoginModel extends Model{
    
    public function getUser($nombre_usuario)
    {
        //Creamos la consulta para obtener una categoria
        $sentencia = $this->db->prepare("SELECT * FROM usuario
        WHERE nombre_usuario = ?"); // prepara la consulta
        $sentencia->execute([$nombre_usuario]); // ejecuta
        $usuario = $sentencia->fetch(PDO::FETCH_OBJ); // obtiene la respuesta
        return $usuario;
    }
}