<?php 

    class Conexion{
        public static function conexion() 
        {
            $conexion = new PDO('mysql:host=localhost;dbname=konectadr','root',"");
            $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $conexion->exec("SET CHARACTER SET utf8");
            return $conexion;
        }
    }


?>