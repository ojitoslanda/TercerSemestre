<?php
//Llamos a la clase Clientes.php
require_once("../models/Clientes.php");
//Inicializamos el objeto de la clase Clientes.php
$objeto = new Clientes();
//Hacemos una condicional si existe el GET['dni_c']
if(isset($_GET['dni_c'])){
    $variable_dni = $_GET['dni_c']; //almacenamos en una variable el dato GET
    //Almacenamos la funcion en la variable $resultado_lista
    $resultado_lista = $objeto->consultar_dni_cliente($variable_dni); 

    //Almacenamos dentro de un Array
    $datos_cliente = [];

    // hacemos un bucle para consultar a los clientes
    // $fila es la variable que almacenaremos todos los datos del cliente
    while($fila = $resultado_lista->fetch_array(MYSQLI_ASSOC)){
        // print_r($fila);
        $datos_cliente[] = $fila;
    }

    //Creamos el formato JSON
    header('Content-Type: application/json');
    echo json_encode($datos_cliente);
}


?>