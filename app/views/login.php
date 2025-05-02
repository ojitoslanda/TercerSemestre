<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
</head>

<body>
    <form action="controllers/ControllerUser.php" method="POST" style="border:1px solid;">
        <fieldset>
        <legend>Formulario</legend>
        <label>Usuario</label>
        <input type="text" name="user" placeholder="Escribe tu usuario">
        <label>Contraseña</label>
        <input type="password" name="pass" placeholder="Escribe tu contraseña">
        <input type="submit" value="Iniciar Sesión">
        </fieldset>
    </form>
</body>

</html>