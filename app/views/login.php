<?php
//Escribimos el codigo
session_start();
if (isset($_SESSION["usuario_sesion"])) {
    header("Location: views/dashboard.php");
} else {
    
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
    <!-- Mis propios estilos -->
    <link rel="stylesheet" href="views/assets/css/login.css">
    <!-- Poner icono -->
    <link rel="shortcut icon" href="#" type="image/x-icon"> 
</head>
<body>
    <form action="controllers/UserController.php" method="POST" style="border:1px solid;">
        <fieldset>
            <legend>FORMULARIO-EMPRESA</legend>
            <label for="user">Usuario</label>
            <input type="text" name="user" placeholder="Escribe tu usuario">
            <label for="pass">Contraseña</label>
            <input type="password" name="pass" placeholder="Escribe tu contraseña">
            <input type="submit" value="Iniciar Sesión">
        </fieldset>
    </form>

</body>

</html>