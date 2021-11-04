<div class="row">
    <ul>
        <?php foreach ($categories as $category): ?>
            <li class="col">
                <a href="index.php?request=products&category_id="<?php echo $category['id'] ?>"></a>
            </li>
        <?php endforeach;?>
    </ul>
</div>