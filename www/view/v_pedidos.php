<div class="container-pedidos">
    <h2 class="title" ">PEDIDOS</h2>
    <br>
    <ul class="container-pedido">
        <?php foreach ($comandas as $comanda) : ?>
            <li class="clearfix">
                <span class="item-data"><h4>Dia y hora: <?php echo $comanda['data']; ?></h4></span>
                <img src="<?php echo $comanda['url_image']; ?>" width="100px">
                <span class="item-name"><h3><?php echo $comanda['nom']; ?></h3></span>
                <span class="item-price">Total del producte: <?php echo $comanda['preu_total_linia']; ?> €</span>
                <div class="container-quantity-total">
                    <span class="item-qty">Cantidad: <?php echo $comanda['quantitat']; ?></span>
                </div>
            </li>
        <?php endforeach; ?>
    </ul>
</div>
