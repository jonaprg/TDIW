<nav>
    <ul class="menu">
        <li class="nav-logo"><a href="/">SHAIN</a></li>
        <?php foreach ($categories as $category):?>
        <li class="nav-item categories" id="<?php echo $category['id'];?>">
            <span><?php echo htmlentities($category['nom'], ENT_QUOTES | ENT_HTML5, 'UTF-8'); ?></span>
        </li>
        <?php endforeach?>
        <li class="nav-item" id="checkoutCart">
            <img src="/view/resource/img/icons/icon_ShoppingCart.png" width="25px">
        </li>
        <?php if(isset($_SESSION['userId'])):?>
        <li class="nav-item" id="profile">
            <img src="/view/resource/img/icons/icon_human.png" width="25px">
            <ul class="nav-session">
            <li class="nav-item-session"><img src="/view/resource/img/icons/icon_user.png" width="25px"><a href="?action=profile"><span>  Mi cuenta</span></a></li>
                <li class="nav-item-session"><img src="/view/resource/img/icons/icon_shopping-bag.png" width="25px"><a href="?action=pedidos"><span>  Mis pedidos</span></a></li>
                <li class="nav-item-session"><img src="/view/resource/img/icons/icon_LogOut.png" width="25px"><a href="?action=logout"><span>  Cerrar sessión</span></a></li>
            </ul>
        </li>
        <?php else: ?>
        <li class="nav-item nav-button">
            <a title="Login" href="index.php?action=login">Iniciar Sesión</a>
        </li>
        <li class="nav-item nav-button">
            <a title="Register" href="index.php?action=register">Registrarse</a>
        </li>
        <?php endif; ?>
        <li class="toggle">
            <span class="bars"></span>
        </li>
    </ul>
</nav>

