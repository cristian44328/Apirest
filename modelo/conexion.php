<?php
class Conexion{
    public static function conectar(){
        $usuario= "root";
        $db = "apirest";
        $password = "";
        $host = "localhost";

        $link = new PDO("mysql:host=".$host.";dbname=".$db,$usuario,$password);
        $link->exec("set names utf8");

        return $link;
    }
}