<div class = "product-detail">
<?php foreach ($detailsProducts as $detailsProduct): ?>
    <img src="<?php echo $detailsProduct['url_image'] ?>" />
        <div class= "content-detail">
            <h1 class="nom"><span><?php echo $detailsProduct['nom'] ?></span></h1>
            <p class="descripcio"><?php echo $detailsProduct['descripcio'] ?></p>
            <div class="talla"><?php echo $detailsProduct['talla'] ?></div>
            <div class="color"><?php echo $detailsProduct['color'] ?></div>
            <div class="preu"><span><?php echo $detailsProduct['preu'] ?>EURO</span></div>
        </div>
<?php endforeach;?>
</div>
