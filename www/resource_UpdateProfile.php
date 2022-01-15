<!DOCTYPE html>
    <html lang="es">
    <head>
        <title>SHAIN - Editar perfil</title>
        <?php include __DIR__ . "/view/header.php"; ?>
    </head>
    <body>
    <div id="layout">
        <header>
            <?php include __DIR__ . "/controller/c_controller_nav.php"; ?>
        </header>
        <div class="container">
        <?php include_once __DIR__ . '/controller/c_actualizarPerfil.php'; ?>
        </div>
    </div>
    </body>
    </html>
