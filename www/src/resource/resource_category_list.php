<!DOCTYPE html>
<html>

<head>

    <link rel="stylesheet" href="./src/css/style.css">
    <?php include __DIR__ . "/../view/header.html"; ?>
</head>

<body>
<div id="layout">
    <header class="container">
        <?php include __DIR__ . "/../view/nav.html"; ?>
    </header>
    <div class="app">
        <?php require __DIR__ . '/../controller/category_list.php';?>
    </div>
</div>


</body>

</html>
