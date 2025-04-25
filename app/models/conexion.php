<?php
//Variables
$servidor = "localhost";
$user = "root";
$clave = "";
$database = "minimarket_db";
$conexion = new mysqli($servidor,$user,$clave,$database);
if($conexion->connect_error){
    die("ERROR EN LA CONEXION: ".$conexion->connect_error);
}else{
    echo "OK";
}
