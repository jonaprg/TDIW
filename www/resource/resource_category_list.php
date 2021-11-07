<!DOCTYPE html>
<html>

<head>
    <title>SHAIN - Category list</title>
    <link rel="stylesheet" href="<?php echo '/../view/resource/css/style.css'?>">

</head>
<body>

<div id="layout">
    <header class="container">
        <?php include __DIR__ . "/../view/nav.php"; ?>
    </header>
    <div class="app">
        <?php require __DIR__ . '/../controller/category_list.php';?>
    </div>
</div>


</body>

</html>
