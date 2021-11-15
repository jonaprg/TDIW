<?php
require_once __DIR__ . '/../model/connectDB.php';
require_once __DIR__ . '/../model/m_login.php';

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $filters = filter_input_array(
        INPUT_POST, [
            'email' => FILTER_VALIDATE_EMAIL,
            'password' => FILTER_DEFAULT
        ]
    );

    $email = stripslashes($filters['email']);
    $password = stripslashes($filters['password']);


    $user = login($email, $password);
    if($user) {
        $_SESSION['userId'] = $user['id'];
        require __DIR__ . '/../resource/resource_login_success.php';
        return;
    }
}
require_once __DIR__ . '/../view/v_login.php';