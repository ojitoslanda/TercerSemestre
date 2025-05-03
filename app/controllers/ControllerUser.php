<?php
//requerir la clase model/usuario.php
require_once '../models/Usuario.php';
//Creamos un objeto (obj)
$obj = new Usuario();
//Llamos al metodo del OBJETO CREADO
$resultado = $obj->getLoginUsuario();
//Almacenar dentro de una variable
$user = trim($_POST["user"]);
$clave = trim($_POST["pass"]);
//Creamos variables nuevas
$encontrados = 0;
//Ejecutamos el metodo getLoginUsuario
while($fila=$resultado->fetch_array(MYSQLI_ASSOC)){
    //print_r($fila); //Monstramos los resultados
    if($fila['usuario'] == $user && $fila['password'] == $clave)
    {   
        //Activamos el sesion storage
        session_start(); 
        //almacenamos informacion del usuario en el sesion storage
        $_SESSION["usuario_sesion"]=$fila; 
        $encontrados = 1;
        break;
    }else{
        $encontrados = 0;
    }
}

//Validamos
if($encontrados){
    // echo "¡Hola bienvenido!";
    header('Location: ../views/dashboard.php'); //Redireccionamiento al panel administrativo
}else{
    header('Location: ../index.php'); //Redireccionamiento al login
    // echo "Usuario Incorrecto";
}