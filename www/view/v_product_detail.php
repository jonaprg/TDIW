<div class = "product-detail">
<?php foreach ($detailsProducts as $detailsProduct): ?>
    <img src="<?php echo $detailsProduct['url_image'] ?>" />
        <div class= "content-detail">
            <p class="newarrival">NEW</p>
            <h1 class="nom"><?php echo $detailsProduct['nom'] ?></h1>
            <div class="preu"><?php echo $detailsProduct['preu'] ?> EURO</div>
            <p class="descripcio"><?php echo $detailsProduct['descripcio'] ?></p>
            <span>Color</span>
            <div class="color"><?php echo $detailsProduct['color'] ?></div>
            <span>Talla</span>
            <div class="talla"><?php echo $detailsProduct['talla'] ?></div>
        </div>
<?php endforeach;?>
</div>
