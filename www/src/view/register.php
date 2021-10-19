<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./css/loginStyle.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" >
    <meta name="viewport" content="initial-scale=1.0, width=device-width, user-scalable=yes"/>
</head>
<body>
<form class="formulario">

    <h1>Regístrate</h1>
    <div class="container">

        <div class="input-container">
            <i class="fas fa-user icon"></i>
            <input type="text" required placeholder="Nombre">
        </div>

        <div class="input-container">
            <i class="fas fa-envelope icon"></i>
            <input type="email" required placeholder="Email">
        </div>

        <div class="input-container">
            <i class="fas fa-key icon"></i>
            <input type="password" required placeholder="Contraseña">
        </div>

        <div class="input-container">
            <i class="fas fa-home icon"></i>
            <input type="text" maxlength="30" required placeholder="Dirección">
        </div>

        <div class="input-container">
            <i class="fas fa-building icon"></i>
            <input type="text" maxlength="30" required placeholder="Población">
        </div>

        <div class="input-container">
            <i class="fas fa-window-maximize icon"></i>
            <input type="text" pattern="[0-9]{5}" required placeholder="Codigo Postal">
        </div>

        <input type="submit" value="Regístrate" class="button">
        <p>¿Ya tienes una cuenta?  <a class="link" href="login.php">Iniciar Sesión</a></p>
    </div>
</form>
</body>
</html>