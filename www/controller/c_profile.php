<?php
require_once __DIR__ . '/../model/connectDB.php';
require_once __DIR__ . '/../model/m_user.php';
$userId = $_SESSION['userId'];
$user = getUserByID($userId);
require_once __DIR__ . '/../view/v_profile.php';