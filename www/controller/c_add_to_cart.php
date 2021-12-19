<?php
require_once __DIR__ . '/../model/connectDB.php';

$_SESSION['cart'] = array();

require_once __DIR__ . '/../view/v_add_to_cart.php';