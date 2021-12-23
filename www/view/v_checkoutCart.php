<div class="container-checkout">
    <?php if (isset($_SESSION['cart'])) : ?>
        <span><?php var_dump($_SESSION['cart']);?></span>
        <?php foreach ($_SESSION['cart'] as $key => $value): ?>
            <?php var_dump($_SESSION['cart'][] ) ?>
        <?php endforeach;?>
    <?php else: ?>
    <?php endif;?>
</div>