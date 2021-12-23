
<?php if(isset($_SESSION['cart'])) : ?>
<div class="item-summary"><span>Preu total: <?php echo $_SESSION['cart']['total_price'];?> €</span></div>
<div class="item-summary"><span>Quantitat total: <?php echo $_SESSION['cart']['total_elements'];?></span></div>
<div class="item-summary" id="cart-clear-summary"><a href="?action=clearCart"><span>Eliminar carrito</span></a></div>
<?php else: ?>
    <div class="item-summary"><span>No hay productos en la cesta</span></div>
<?php endif; ?>

