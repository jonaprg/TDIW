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
    <div id="cart">
        <?php include_once __DIR__ . '/controller/c_summaryCart.php'; ?>
    </div>
    <div class="container">
        <?php require __DIR__ . '/controller/c_category_list.php';?>
    </div>

</div>
</body>
<footer>
    <!--<?php //unset($_SESSION['cart']) ?>-->
</footer>
</html>