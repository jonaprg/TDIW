<?php

require_once __DIR__ . '/../model/connectDB.php';
require_once __DIR__ . '/../model/m_products.php';

$categoryId = $_GET['category_id'];

$products = getProductsByCategory($categoryId);

require_once __DIR__ . '/../view/v_products.php';