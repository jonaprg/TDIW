    <?php foreach ($categories as $category): ?>
    <div class="card-category">
        <div class="img-category">
            <a href="index.php?request=products&category_id=<?php echo $category['id'] ?>">
                <img src="<?php echo $category['url_image'] ?>">
            </a>
        </div>
        <div class="content-category">
            <span><?php echo $category['nom'] ?></span>
        </div>
    </div>
    <?php endforeach;?>