<?php
require_once __DIR__ . '/config.php';
session_start();

$request = $_GET['action'] ?? null;
switch ($request) {
    case 'login' :
        require __DIR__ . '/resource/resource_login.php';
        break;
    case 'register' :
        require __DIR__ . '/resource/resource_register.php';
        break;
    case 'products' :
        require __DIR__ . '/resource/resource_list_products.php';
        break;
    case 'product' :
        require __DIR__ . '/resource/resource_product_detail.php';
        break;
    case 'logout' :
        require __DIR__ .'/resource/resource_logout.php';
    default:
        require __DIR__ . '/resource/resource_category_list.php';
        break;
}