<?php
require_once __DIR__ . '/../model/connectDB.php';
require_once __DIR__ . '/../model/m_categories.php';
$categories = getCategories();

require_once __DIR__ . '/../view/v_categories.php';