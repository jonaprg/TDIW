<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="../css/loginStyle.css">
    <link rel="stylesheet" href="../css/style.css">
    <?php include "header.html"; ?>

</head>

<body>
<div id="layout">
    <header class="container">
        <?php include "nav.html"; ?>
    </header>
    <form class="formulario">
        <h1>Iniciar Sesión</h1>
        <div class="container">
            <div class="input-container">
                <i class="fas fa-envelope icon"></i>
                <input type="text" placeholder="Email">
            </div>
            <div class="input-container">
                <i class="fas fa-key icon"></i>
                <input type="password" placeholder="Contraseña">
            </div>
            <input type="submit" value="Iniciar Sesión" class="button">
            <p>¿No tienes una cuenta? <a class="link" href="register.html">regístrate</a></p>
        </div>
    </form>
</div>
</body>

</html>