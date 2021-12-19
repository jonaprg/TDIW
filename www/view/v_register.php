<form class="formulario" action="?action=register" method="POST">
    <h1>Regístrate</h1>
    <div class="container">
        <div class="input-container">
            <i class="fas fa-user icon"></i>
            <input type="text" name="name" required placeholder="Nombre">
        </div>
        <div class="input-container">
            <i class="fas fa-envelope icon"></i>
            <input type="email" name="email" required placeholder="Email">
        </div>
        <div class="input-container">
            <i class="fas fa-key icon"></i>
            <input type="password" name="password" required placeholder="Contraseña">
        </div>
        <div class="input-container">
            <i class="fas fa-home icon"></i>
            <input type="text" maxlength="30" name="address" required placeholder="Dirección">
        </div>
        <div class="input-container">
            <i class="fas fa-building icon"></i>
            <input type="text" maxlength="30" name="city" required placeholder="Población">
        </div>
        <div class="input-container">
            <i class="fas fa-window-maximize icon"></i>
            <input type="text" pattern="[0-9]{5}" name="postal" required placeholder="Codigo Postal">
        </div>
        <button type="submit" name="register" class="button">Regístrate</button>
        <p>¿Ya tienes una cuenta?  <a class="link" href="?action=login">Iniciar Sesión</a></p>
    </div>
</form>