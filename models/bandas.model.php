<?php

require_once 'model.php';
class BandasModel extends Model
{
    //devuelve todas las bandas
    public function getAll()
    {

        // 2. enviamos la consulta (3 pasos)
        $sentencia = $this->db->prepare("SELECT * FROM bandas"); // prepara la consulta
        $sentencia->execute(); // ejecuta
        $banda = $sentencia->fetchAll(PDO::FETCH_OBJ); // obtiene la respuesta
        return $banda;
    }

    //muestra la banda que el usuario paso por parametro
    public function get($id_banda)
    {
        //Creamos la consulta para obtener una categoria
        $sentencia = $this->db->prepare("SELECT * FROM bandas  WHERE id_banda=?"); // prepara la consulta
        $sentencia->execute([$id_banda]); // ejecuta
        $banda = $sentencia->fetch(PDO::FETCH_OBJ); // obtiene la respuesta
        return $banda;
    }

    public function getName($nombre)
    {
        // 2. enviamos la consulta (3 pasos)
        $sentencia = $this->db->prepare("SELECT * FROM bandas WHERE nombre_banda=?"); // prepara la consulta
        $sentencia->execute([$nombre]); // ejecuta
        $marca = $sentencia->fetch(PDO::FETCH_OBJ); // obtiene la respuesta
        return $marca;
    }

    public function insert($nombre)
    {
        // 2. enviamos la consulta
        $sentencia = $this->db->prepare("INSERT INTO bandas(nombre_banda) VALUES(?)"); // prepara la consulta        
        return $sentencia->execute([$nombre]); // ejecuta
    }

    public function update($nombre, $id)
    {
        // 2. enviamos la consulta (3 pasos)
        $sentencia = $this->db->prepare("UPDATE bandas SET nombre_banda=? WHERE id_banda=?"); // prepara la consulta
        return $sentencia->execute([$nombre, $id]); // ejecuta
    }

    public function delete($id_banda)
    {
        $sentencia = $this->db->prepare("DELETE FROM bandas  WHERE id_banda = ?"); // prepara la consulta
        $sentencia->execute([$id_banda]); // ejecuta 
        return $sentencia;
    }
}
