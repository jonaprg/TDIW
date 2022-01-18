<?php
include_once __DIR__ . '/../model/connectDB.php';
include_once __DIR__ . '/../model/m_pedidos.php';

(int) $id_user = $_SESSION['userId'];
$comandas = getPedidosByUserId($id_user);

include_once __DIR__ . '/../view/v_pedidos.php';

