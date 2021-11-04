<!DOCTYPE html>
<html>

<head>
    <title>SHAIN - Category list</title>
    <link rel="stylesheet" href="<?php echo '/view/resources/css/style.css'?>">

</head>
<body>
<?php error_reporting(E_ALL); ?>
<script type="javascript"> console.log("Funciona o no")</script>
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
