<!DOCTYPE html>
<html lang="es">
<head>
    <title>SHAIN - Editar perfil</title>
    <?php include __DIR__ . "/view/header.php"; ?>
    <link rel="stylesheet" href="<?php echo '/view/resource/css/style_myAccount.css'; ?>">

</head>
<body>
<div id="layout">
    <header>
        <?php include __DIR__ . "/controller/c_controller_nav.php"; ?>
    </header>
    <div class="container">
        <?php include_once __DIR__ . '/controller/c_profile.php'; ?>
    </div>
</div>
</body>
</html>
