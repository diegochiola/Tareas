<?php
require_once '../config/config.php';
class Conexion{
    public static function conect(){
        $mysql = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME); //conexion a base de datos
        $mysql->set_charset(DB_CHARSET); //para que se vean bien los caracteres
        //validacion
        if(mysqli_connect_errno()){
            echo "Error en la conexion: " .mysqli_connect_errno();
        /*}else{
            echo "Conexion exitosa";
        }*/
        return $mysql;
    }
}
//comento
//print_r(Conexion::conect());//para que nos muestre por pantalla
?>