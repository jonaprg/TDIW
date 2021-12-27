<?php
if (isset($_SESSION['cart'])) {
    $id_product = $_GET['id_producte'];
    foreach ($_SESSION['cart'] as $key => $value) {
        if($_SESSION['cart'][$key]['pId'] == $id_product) {
            $_SESSION['cart']['total_elements'] -= $_SESSION['cart'][$key]['qty'];
            $_SESSION['cart'][$key]['qty'] = 0;
            $_SESSION['cart']['total_price'] -= $_SESSION['cart'][$key]['priceTotal'];
            $_SESSION['cart'][$key]['priceTotal'] = 0;
            unset($_SESSION['cart'][$key]['pId']);
            $arr = array("totalElements" => $_SESSION['cart']['total_elements'],
                "qty" => $_SESSION['cart'][$key]['qty']);
            echo json_encode($arr);

            if($_SESSION['cart']['total_elements'] == 0) {
                unset($_SESSION['cart']);
            }
        }
    }
}