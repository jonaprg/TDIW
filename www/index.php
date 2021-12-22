<?php
require_once __DIR__ . '/config.php';
session_start();
$request = $_GET['action'] ?? null;

switch ($request) {
    case 'login' :
        require __DIR__ . '/resource_login.php';
        break;
    case 'register' :
        require __DIR__ . '/resource_register.php';
        break;
    case 'profile' :
        require __DIR__ . '/resource_perfil.php';
        break;
    case 'products' :
        require __DIR__ . '/resource_products.php';
        break;
    case 'productDetail' :
        require __DIR__ . '/resource_product_detail.php';
        break;
    case 'logout' :
        require __DIR__ . '/resource_logout.php';
        break;
    case 'addToCart' :
        require __DIR__ . '/resource_add_to_cart.php';
        break;
    case 'checkoutCart' :
        require __DIR__ . '/resource_checkoutCart.php';
        break;
    case 'summaryCart' :
        require __DIR__ . '/resource_summaryCart.php';
        break;
    case 'portada' :
    default:
        require __DIR__ . '/resource_portada.php';
        break;
}