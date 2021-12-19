<div class="container-products">
<?php foreach ($products as $product): ?>
    <div class="card-product" id="<?php echo $product['id']; ?>">
        <div class="img-product">
            <img src="<?php echo $product['url_image']; ?>">
        </div>
        <div class="content-product">
            <span><?php echo $product['nom']; ?></span>
        </div>
    </div>
<?php endforeach;?>
</div>
<script type="text/javascript" src="/view/resource/js/products.js"></script>
