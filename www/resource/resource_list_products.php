<!DOCTYPE html>
<html>

<head>
    <title>SHAIN - List Products</title>
    <?php include __DIR__ . "/../view/header.php"; ?>
    <link rel="stylesheet" href="<?php echo '/../view/resource/css/style.css'?>">
    <link rel="stylesheet" href="<?php echo '/../view/resource/css/style_list_products.css' ?>">

</head>
<body>
<div id="layout">
                <header>
                    <?php include __DIR__ . "/../view/nav.php"; ?>
                </header>
    <div class = "product-list">
        <?php require __DIR__ . '/../controller/list_products.php';?>
    </div>
</body>

</html>