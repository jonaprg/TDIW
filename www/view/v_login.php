<form class="formulario" id="formLogin" method="POST" action="?action=login">
    <h1>Iniciar Sesión</h1>
    <div class="input-container">
        <input type="text" name="email" id="email" placeholder="Email">
        <small>Error message</small>
    </div>
    <div class="input-container">
        <input type="password" name="password" id="password" placeholder="Contraseña">
        <small>Error message</small>
    </div>
    <input type="submit" value="Iniciar Sesión" class="button">
    <p>¿No tienes una cuenta? <a class="link" href="?action=register">regístrate</a></p>
</form>