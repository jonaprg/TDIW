
<?php if(isset($_SESSION['cart'])) : ?>
<div class="item-summary"><span>Preu total: <?php echo $_SESSION['cart']['total_price'];?> €</span></div>
<div class="item-summary"><span>Quantitat total: <?php echo $_SESSION['cart']['total_elements'];?></span></div>
<?php endif; ?>
