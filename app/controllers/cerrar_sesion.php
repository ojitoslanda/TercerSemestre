<?php
session_start(); //Tenemos que inicializar
session_destroy(); // y luego destruir la sesion
//Redireccionar al login
header("Location: ../index.php");
?>