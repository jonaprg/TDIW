<?php

require_once __DIR__ . '/../model/connectDB.php';
require_once __DIR__ . '/../model/categories.php';
require_once __DIR__ . '/../model/productes.php';

$categoryId = $_GET['category_id'] ? (int)$_GET['category_id'] : 1;

$categories = getCategoryById($categoryId);
$products = getProductsByCategory($categoryId);

$title = $categories['name'];

require_once __DIR__ . '/../view/list_product.php';

?>