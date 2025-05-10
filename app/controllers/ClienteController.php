<?php
//Llamos a la clase Clientes.php
require_once("../models/Clientes.php");
 //Inicializamos el objeto de la clase Clientes.php
$objeto = new Clientes();
//Almacenamos los datos del formulario del panel_clientes.php dentro de una variable
$dni = trim($_POST['dni_c']);
$nombre = trim($_POST['nombre_c']);
$apellido = trim($_POST['apellido_c']);
$correo = trim($_POST['correo_c']);
//Utilizamos el metodo o funcion para registrar
if($objeto->registrar_cliente($dni,$nombre,$apellido,$correo)){
    header("Location: ../views/panel_clientes.php");
}else{
    header("Location: ../views/panel_clientes.php");
}
?>