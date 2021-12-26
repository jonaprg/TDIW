<div class="container-checkout">
    <div class="shopping-cart-title">
        <h1>CESTA</h1>
        <h5>TOTAL</h5>
    </div>
    <?php if (isset($_SESSION['cart'])) : ?>
        <ul class="shopping-cart-row">
        <?php foreach ($_SESSION['cart'] as $key => $value):
            if ($_SESSION['cart'][$key]['pId']) : ?>
            <li class="clearfix">
                <img src="<?php echo $_SESSION['cart'][$key]['image']; ?>" width="150px">
                <span class="item-name"><h3><?php echo $_SESSION['cart'][$key]['name']; ?></h3></span>
                <span class="item-price"><?php echo $_SESSION['cart'][$key]['price']; ?> €</span>
                <span class="item-qty">Cantidad: <?php echo $_SESSION['cart'][$key]['qty']; ?></span>
                <span class="item-total"><?php echo $_SESSION['cart'][$key]['priceTotal']; ?> €</span>
            </li>
        <?php endif;
        endforeach;?>
        </ul>

    <?php else: ?>
    <div>
        <h5>NO HAY PRODUCTOS</h5>
    </div>
    <?php endif;?>
</div>