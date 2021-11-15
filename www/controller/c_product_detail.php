<?php
require_once __DIR__ . '/../model/connectDB.php';
require_once __DIR__ . '/../model/m_product_detail.php';

$productId = $_GET['id_producte'];
$detailsProducts = getDetallByProduct($productId);

require_once __DIR__ . '/../view/v_product_detail.php';