<?php ob_start();?>
<!DOCTYPE html>
<html lang="es">
<head>
    <title>SHAIN - Login</title>
    <?php include __DIR__ . "/view/header.php"; ?>
</head>
<body>
<div id="layout">
    <header>
        <?php include __DIR__ . "/controller/c_controller_nav.php"; ?>
    </header>
    <div class="container">
        <?php require __DIR__ . '/controller/c_login.php'; ?>
    </div>
</div>
<script type="text/javascript" src="view/resource/js/login.js"></script>
</body>
</html>
<?php ob_end_flush(); ?>