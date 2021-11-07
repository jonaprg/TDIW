<div class="row">
    <ul>
        <?php var_dump($categories); ?>
        <?php foreach ($categories as $category): ?>
            <li class="col">
                <a href="index.php?request=products&category_id="<?php echo $category['id'] ?>"></a>
                <img src="<?php echo $category['url_image'] ?>">
            </li>
        <?php endforeach;?>
    </ul>
</div>