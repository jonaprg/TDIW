<?php foreach ($productes as $product): ?>

    <div class = "product-detail">
    <img src="<?php echo $product['url_image'] ?>" />

        <div class= "content-detail">
            <h1 class="nom"><span><?php echo $product['nom'] ?></span></h1>
            <p class="descripcio"><?php echo $product['descripcio'] ?></p>
            <div class="talla"><?php echo $product['talla'] ?></div>
            <div class="color"><?php echo $product['color'] ?></div>
            <div class="preu"><span><?php echo $product['preu'] ?>EURO</span></div>

        </div>
    </div>

<?php endforeach;?>

        <script type="text/javascript" src="/view/resource/js/detail.js"></script>
