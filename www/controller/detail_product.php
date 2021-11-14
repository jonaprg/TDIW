<?php
require_once __DIR__ . '/../model/connectDB.php';
require_once __DIR__ . '/../model/categories.php';
require_once __DIR__ . '/../model/productes.php';
$categoryId = $_GET['category_id'] ? (int)$_GET['category_id'] : 1;
$products = getProductsByCategory($categoryId);

require_once __DIR__ . '/../view/detail_product.php';

?>


