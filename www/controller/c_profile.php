<?php
require_once __DIR__ . '/../model/connectDB.php';
require_once __DIR__ . '/../model/m_user.php';

$id = $_SESSION['userId'];
$user = getUserByID($id);
require_once __DIR__ . '/../view/v_profile.php';
