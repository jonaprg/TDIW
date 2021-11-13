<?php
require_once __DIR__ . '/../model/connectDB.php';
require_once __DIR__ . '/../model/login.php';

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $filters = filter_input_array(
        INPUT_POST, [
            'email' => FILTER_VALIDATE_EMAIL,
            'password' => FILTER_DEFAULT
        ]
    );

    $email = $filters['email'];
    $password = $filters['password'];


    $user = login($email, $password);
    $_SESSION['userId'] = $user['id'];

    require_once __DIR__ . '/../resource/resource_portada.php';
    return;
}
require_once __DIR__ . '/../view/login.php';
