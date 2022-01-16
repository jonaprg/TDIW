<div class="container-checkout-linia">
    <ul class="shopping-cart-row">
        <?php foreach ($comanda as $item): ?>
            <?php if ($item['pId']) : ?>
                <li class="clearfix">
                    <img src="<?php echo $item['image']; ?>" width="200px">
                    <span class="item-name"><h3><?php echo $item['name']; ?></h3></span>
                    <span class="item-price"><?php echo $item['price']; ?> €/unidad</span>
                    <div class="container-quantity-total">
                        <span class="item-total" id="priceTotal-<?php echo $item['pId'];?>"><?php echo $item['priceTotal']; ?> €</span>
                    </div>
                </li>
            <?php endif;
        endforeach;?>
    </ul>
</div>
