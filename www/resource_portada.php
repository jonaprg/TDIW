<!DOCTYPE html>
<html>
<head>
    <title>SHAIN - Category list</title>
    <?php include __DIR__ . "/view/header.php"; ?>
</head>
<body>
<div id="layout">
    <header>
        <?php include __DIR__ . "/controller/c_controller_nav.php"; ?>
    </header>
    <div class="container">
        <?php require __DIR__ . '/controller/c_category_list.php';?>
    </div>
</div>
<footer>
    <?php require __DIR__ .'/resource_add_to_cart.php'; ?>
</footer>
</body>

</html>