<?php
include_once __DIR__ . '/../model/connectDB.php';
include_once __DIR__ . '/../model/m_comanda.php';

$comanda = [];
if (isset($_SESSION['userId']) && isset($_SESSION['cart'])) {
    $data = date("Y-m-d H:i:s");
    if(insertComanda($data)) {
        $comandaId = getComandaByUserIdAndDate($_SESSION['userId'], $data);
        foreach ($_SESSION['cart'] as $items => $item) {
            if($item['pId'] != null) {
                insertLiniasComandes((float)$item['priceTotal'], (int)$item['qty'], (int)$comandaId['id'], (int)$item['pId'])) {


            }
            array_push($comanda, $item);

        }
        include_once __DIR__ . '/../view/v_confirma_comanda.php';

    }else {
        header('Location: index.php?action=checkoutCart');
    }

}

