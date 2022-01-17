<?php include_once __DIR__ . '/controller/c_cartConfirm.php';
if(isset($_SESSION['cart'])) {
    unset($_SESSION['cart']);
}
require __DIR__ . '/resource_vista_confirmar_compra.php';
