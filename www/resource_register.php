<?php ob_start();?>
    <!DOCTYPE html>
    <html lang="es">
    <head>
        <title>SHAIN - Register</title>
        <?php include __DIR__ . "/view/header.php"; ?>
    </head>
    <body>
    <div id="layout">
        <header>
            <?php include __DIR__ . "/controller/c_controller_nav.php"; ?>
        </header>
        <div class="container">
            <?php require __DIR__ . '/controller/c_register.php'; ?>
        </div>
    </div>
    </body>
    <script type="text/javascript" src="view/resource/js/register.js"></script>
    </html>
<?php ob_end_flush(); ?>