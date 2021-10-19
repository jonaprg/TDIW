<?php

$request = $_SERVER['REQUEST_URI'];

switch ($request) {
    case '':
    case '/' :
        require __DIR__ . '/src/view/index.php';
        break;
    case '/login' :
        require __DIR__ . '/src/view/login.php';
        break;
    case '/register' :
        require  __DIR__ . '/src/view/register.php';
        break;
    case '/list_products' :
        require __DIR__ . '/src/view/list_products.php';
        break;
    default:
        http_response_code(404);
        require __DIR__ . '/src/view/404.php';
        break;
}