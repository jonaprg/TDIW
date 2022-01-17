<!DOCTYPE html>
<html lang="es">
<head>
    <title>SHAIN - PEDIDOS</title>
    <?php include __DIR__ . "/view/header.php"; ?>
    <link rel="stylesheet" href="<?php echo '/view/resource/css/style_pedidos.css'; ?>">

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
        <?php include_once __DIR__ . '/controller/c_pedidos.php'; ?>
    </div>
</div>
</body>
</html>
