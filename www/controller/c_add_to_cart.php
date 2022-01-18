<?php
require_once __DIR__ . '/../model/connectDB.php';
require_once __DIR__ . '/../model/m_product_detail.php';

$id = $_GET['id-product'];
$productDetail = getDetallByProduct($id);
$totalPrice = 0;
$quantity = (int)$_GET['quantity'];

if (isset($_SESSION['cart'])) { //HAY CESTA
    $is_available = 0;
    foreach ($_SESSION['cart'] as $key => $value) { //SE RECORRE LA CESTA
        if ($_SESSION['cart'][$key]['pId'] === $id) { //SI HAY PRODUCTO SE AÑADE LA CANTIDAD AL ITEM
            $is_available++;
            $_SESSION['cart'][$key]['qty'] += $quantity;
            $_SESSION['cart']['total_elements'] += $quantity;
            $_SESSION['cart'][$key]['priceTotal'] = $_SESSION['cart'][$key]['qty'] * $_SESSION['cart'][$key]['price'];
            echo "Se ha añadido correctamente, con un total de " . $_SESSION['cart'][$key]['qty'] . " productos.";
        }
    }
    if ($is_available == 0) { //SI NO EXISTE ESE PRODUCTO EN LA CESTA, SE AÑADE A LA CESTA
        $item_array = array("pId" => $id, "name" => $productDetail['nom'], "image" => $productDetail['url_image'],
            "qty" => $quantity, 'price' => $productDetail['preu'], 'priceTotal' => $productDetail['preu']*$quantity);

        $_SESSION['cart'][] = $item_array;
        $_SESSION['cart']['total_elements'] += $item_array['qty'];

        echo "Se ha añadido correctamente, con un total de " . $item_array['qty'] . " productos.";

    }

} else { //NO HAY CESTA, SE AÑADE A LA CESTA

    $item_array = array("pId" => $id, "name" => $productDetail['nom'], "image" => $productDetail['url_image'],
        "qty" => $quantity, 'price' => $productDetail['preu'], 'priceTotal' => $productDetail['preu']*$quantity);
    $_SESSION['cart'][] = $item_array;
    $_SESSION['cart']['total_elements'] = $item_array['qty'];
    echo "Se ha añadido correctamente, con un total de " . $item_array['qty'] . " productos.";
}

foreach ($_SESSION['cart'] as $key => $value) { //SE AÑADE EL PRECIO TOTAL DE CADA PRODUCTO AL PRECIO TOTAL DE LA CESTA
    $totalPrice = $_SESSION['cart'][$key]['priceTotal'] + $totalPrice;
    $_SESSION['cart']['total_price'] = $totalPrice;
}

