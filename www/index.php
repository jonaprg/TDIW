<?php
require_once __DIR__ . '/config.php';

$request = isset($_GET['request']) ? $_GET['request'] : null;

switch ($request) {
    case '/login' :
        require __DIR__ . '/src/resource/resource_login_register.php';
        break;
    case '/categories' :
        require __DIR__ . 'src/resource/resource_category_list.php';
        break;
    case '/products' :
        require __DIR__ . 'src/resource/resource_list_products.php';
        break;
    case '/product' :
        require __DIR__ . 'src/resource/resource_product_datail.php';
        break;
    default:
        require __DIR__ . '/src/resource/resource_category_list.php';
        break;
}