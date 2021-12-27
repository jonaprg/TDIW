<?php
if (isset($_SESSION['cart'])) {
    $id = $_GET['id_producte'];

    foreach ($_SESSION['cart'] as $key => $value):
        if ($_SESSION['cart'][$key]['pId'] == $id) :
            $_SESSION['cart'][$key]['qty'] -= 1;
            $_SESSION['cart']['total_elements'] -= 1;
            $_SESSION['cart'][$key]['priceTotal'] -= $_SESSION['cart'][$key]['price'];
            $_SESSION['cart']['total_price'] -= $_SESSION['cart'][$key]['price'];
            $arr = array("qty" => $_SESSION['cart'][$key]['qty'],
                "totalElements" => $_SESSION['cart']['total_elements'],
                "totalPriceProduct" => round($_SESSION['cart'][$key]['priceTotal'],2));
            echo json_encode($arr);
            if($_SESSION['cart'][$key]['qty'] == 0) {
                unset($_SESSION['cart'][$key]['pId']);

            }
            if($_SESSION['cart']['total_elements'] == 0) {
                unset($_SESSION['cart']);
            }

        endif;
    endforeach;




}