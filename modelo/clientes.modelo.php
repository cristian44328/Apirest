<?php
class ModeloCliente{
    static public function index($tabla){

        $stmt=Conexion::conectar()->prepare(("select * from $tabla"));
        $stmt->execute();
        
        return $stmt->fetchAll();
    }
}