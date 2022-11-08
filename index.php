<?php
require_once('conexion.php');
require_once('controller.php');

$methodHTTP = $_SERVER['REQUEST_METHOD'];

    switch($methodHTTP){
        case'GET':
            if(empty($_GET)){
                $ctl=new Controller();
                $data=$ctl->GetProductos();
                echo json_encode([$data]);
            }
            else{
                $data = $_GET;
                $ctl = new Controller();
                $result = $ctl->GetProductos($data);
                echo json_encode([$data]);
            }
    }
?>