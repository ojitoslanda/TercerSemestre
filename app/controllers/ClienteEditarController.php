<?php
//Llamos a la clase Clientes.php
require_once("../models/Clientes.php");
//Inicializamos el objeto de la clase Clientes.php
$objeto = new Clientes();
//Almacenamos las variables de reporte_clientes.js
$variable_dni = $_POST['dni_c'];
$variable_nombre = $_POST['name_c'];
$variable_apellido = $_POST['apellido_c'];
$variable_correo = $_POST['correo_c'];
//Creamos un condicional para saber si se actualizo correctamente
if($objeto->editar_cliente($variable_dni,$variable_nombre,$variable_apellido,$variable_correo)){
    echo "yes";
}else{
    echo "nope";
}



?>