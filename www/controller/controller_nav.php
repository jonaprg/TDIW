<?php
require_once __DIR__ . '/../model/connectDB.php';
require_once __DIR__ . '/../model/categories.php';
$categories = getCategories();

require_once __DIR__ . '/../view/nav.php';
?>