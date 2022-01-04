<div class="container-checkout">
    <div class="shopping-cart-title">
        <h1>CESTA</h1>
        <?php if (isset($_SESSION['cart'])) : ?>
        <h5>TOTAL</h5>
    </div>
        <ul class="shopping-cart-row">
        <?php foreach ($_SESSION['cart'] as $key => $item):
            if ($item['pId']) : ?>
            <li class="clearfix">
                <img src="<?php echo $item['image']; ?>" width="100px">
                <span class="item-name"><h3><?php echo $item['name']; ?></h3></span>
                <span class="item-price"><?php echo $item['price']; ?> €/unidad</span>
                <div class="container-quantity-total">
                    <span class="item-less" id="<?php echo $item['pId'];?>">-</span>
                    <span class="item-qty" id="qty-<?php echo $item['pId'];?>"><?php echo $item['qty']; ?></span>
                    <span class="item-more" id="<?php echo $item['pId'];?>">+</span>
                    <span class="item-total" id="priceTotal-<?php echo $item['pId'];?>"><?php echo $item['priceTotal']; ?> €</span>
                </div>
                <span class="item-trash" id="<?php echo $item['pId'];?>">ELIMINAR</span>
            </li>
        <?php endif;
        endforeach;?>
            <?php if(isset($_SESSION['userId'])) : ?>
            <li>
                <button id="cart-confirm">CONFIRMAR COMPRA</button>
            </li>
            <?php else : ?>
            <li>
                <h5>TIENES QUE INICIAR SESSIÓN</h5>
            </li>
            <?php endif;?>
        </ul>

    <?php else: ?>
    <div>
        <h5>NO HAY PRODUCTOS</h5>
    </div>
    <?php endif;?>
</div>
<script type="text/javascript" src="/view/resource/js/checkoutCart.js"></script>