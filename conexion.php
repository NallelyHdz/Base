<?php
    class Conexion
    {
        public static function getConexion(){
            $server="localhost";
            $db="base";
            $user="root";
            $password="Fundamentosweb1&";
            $conn="";
            try
            {
                $conn = new PDO("mysql:host=$server;dbname=$db",$user,$password);
                echo("Conectado correctamente a la Base de Datos");
            }
            catch(PDOException $exp)
            {
                echo("No se pudo conectar a la Base de Datos");

            }
            return $conn;
        }
    }
?>        
