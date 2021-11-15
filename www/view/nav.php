<?php include_once __DIR__ . '/../controller/c_controller_nav.php' ?>
<script src="/view/resource/js/nav.js"></script>
<nav>
    <ul class="menu">
        <li class="nav-logo"><a href="/">SHAIN</a></li>
        <?php foreach ($categories as $category): ?>
        <li class="nav-item categories" id="<?php echo $category['id'] ?>">
            <span><?php echo $category['nom']; ?></span>
        </li>
        <?php endforeach ?>
        <?php if(isset($_SESSION['userId'])): ?>
        <li class="nav-item">
            <a title="My account" href="/"><img src="/view/resource/img/icons/icon_human.png" width="25px"></a>
            <ul class="nav-session-start">
                <li class="nav-item-session"><a href="/"><span>Perfil</span></a></li>
                <li class="nav-item-session"><a href="/"><span>Mis pedidos</span></a></li>
                <li class="nav-item-session"><a href="?action=logout"><span>Cerrar sessión</span></a></li>

            </ul>
        </li>
        <li class="nav-item">
            <a title="Shooping Cart" href="/"><img src="/view/resource/img/icons/icon_ShoppingCart.png" width="25px"></a>
        </li>
        <?php  else: ?>
        <li class="nav-item nav-button">
            <a title="Login" href="?action=login">Iniciar Sesión</a>
        </li>
        <li class="nav-item nav-button">
            <a title="Register" href="?action=register">Registrarse</a>
        </li>
        <?php endif; ?>
        <li class="toggle">
            <span class="bars"></span>
        </li>
    </ul>
</nav>

<script>

</script>