
<!DOCTYPE html>
<html>

<head>
    <title>SHAIN - Category list</title>
    <?php include __DIR__ . "/../view/header.php"; ?>
    <link rel="stylesheet" href="<?php echo '/../view/resource/css/style.css'?>">
    <link rel="stylesheet" href="<?php echo '/../view/resource/css/style_categories.css' ?>">

</head>
<body>
<div id="layout">
    <header>
        <?php include __DIR__ . "/../view/nav.php"; ?>
    </header>
    <div class="categories-container">
        <?php require __DIR__ . '/../controller/category_list.php';?>

    </div>
</div>
</body>

</html>
