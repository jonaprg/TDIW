<?php

if (!isset($_SESSION['userId']) || empty($_SESSION['userId'])){
    require_once __DIR__ . '/../view/v_login.php';
}

require_once __DIR__ . '/../view/v_login_successful.php';