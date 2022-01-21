<div class="container-categories">
    <?php foreach ($categories as $category): ?>
    <div class="card-category" id="<?php echo $category['id']; ?>">
            <div class="img-category">
                <img src="<?php echo $category['url_image']; ?>">
            </div>
            <div class="content-category">
                <span><?php echo htmlentities($category['nom'], ENT_QUOTES | ENT_HTML5, 'UTF-8');?></span>
            </div>
    </div>
    <?php endforeach;?>
</div>
<script type="text/javascript" src="/view/resource/js/categories.js">
</script>

