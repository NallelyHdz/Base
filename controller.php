<?php
    class Controller{
        public function GetProductos(){
            try{
                $list = array();
                $conexion = new Conexion();
                $db = $conexion->getConexion();
                $statement = $db->prepare("SELECT * FROM productos1");
                $statement->execute();

                while($row = $statement->fetch()){
                    $list[]=array(
                        "Nombre"=>$row['Nombre'],
                        "Cantidad"=>$row['Cantidad'],
                        "Precio"=>$row['Precio']);
                }
                return $list;
            }
            catch(PDOException $e){
                echo "Error",$e->getMenssage();

            }
        }
    }
?>