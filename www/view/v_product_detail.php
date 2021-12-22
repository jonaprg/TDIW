<div class = "product-detail">
    <img src="<?php echo $detailsProduct['url_image']; ?>" />
    <div class= "content-detail">
        <div id="correctAdd"></div>
        <p class="newarrival">NEW</p>
        <h1 class="nom"><?php echo $detailsProduct['nom']; ?></h1>
        <div class="preu"><?php echo $detailsProduct['preu']; ?> EURO</div>
        <p class="descripcio"><?php echo $detailsProduct['descripcio']; ?></p>
        <span>Color</span>
        <div class="color"><?php echo $detailsProduct['color']; ?></div>
        <span>Talla</span>
        <div class="talla"><?php echo $detailsProduct['talla']; ?></div>
        <div id="add_to_cart" >
            <button class="add-item-cart" id="<?php echo $detailsProduct['id']; ?>"> Añadir a la cesta</button>
            <input type="number" value="1" step="1" name="quantity" id="quantity">
        </div>
    </div>
</div>
<script type="text/javascript" src="/view/resource/js/add_cart.js"></script>

