<!DOCTYPE html>
<html>

<head>
    <title>SHAIN - Login</title>
    <?php include __DIR__ . "/../view/header.php"; ?>
    <link rel="stylesheet" href="<?php echo '/../view/resource/css/style_nav.css'?>">
    <link rel="stylesheet" href="<?php echo '/../view/resource/css/style_login_signup.css'?>"

</head>
<body>
<div id="layout">
    <header>
        <?php include __DIR__ . "/../view/nav.php"; ?>
    </header>
    <?php require __DIR__ . '/../controller/c_login.php';?>

</div>
</body>

</html>
