<?php
    require_once __DIR__ . '/../model/connectDB.php';
    require_once __DIR__ . '/../model/categories.php';
    $categories = getCategories();
?>
<div class="nav">
    <div class="nav-left">
        <a title="SHAIN" href="/"><img src="/view/resource/img/logo.png" height="50px" style="
            display: block;" /></a>
    </div>
    <div class="nav-center">
        <ul class="nav-bar-level-1">
            <?php foreach ($categories as $category): ?>
            <li class="nav-item">
                <a href=""><span><?php echo $category['nom']; ?></span></a>
            </li>
            <?php endforeach ?>
        </ul>
    </div>

    <div class="nav-right">
        <a title="My account" href="hp"><img src="/view/resource/img/icons/icon_human.png" width="25px"></a>
        <a title="Shooping Cart" href="/"><img src="/view/resource/img/icons/icon_ShoppingCart.png" width="25px"></a>
        <a title="Search"><img src="/view/resource/img/icons/icon_search.png" width="25px"></a>
        <!--
        <div class="nav_search">
            <input type="text" placeholder="Search..">
        </div>-->

    </div>
</div>