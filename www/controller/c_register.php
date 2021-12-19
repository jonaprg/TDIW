<?php
require_once __DIR__ .'/../model/connectDB.php';
require_once __DIR__ . '/../model/m_register.php';

var_dump($_POST);
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['register']) && !empty($_POST['register'])){

    $filters = filter_input_array(
        INPUT_POST, [
            'email' => FILTER_VALIDATE_EMAIL,
            'password' => FILTER_DEFAULT,
            'name' => FILTER_DEFAULT,
            'address' => FILTER_DEFAULT,
            'city' => FILTER_DEFAULT,
            'postal' => FILTER_DEFAULT,
        ]
    );
    $email = stripslashes($filters['email']);
    $password = stripslashes($filters['password']);
    $name = stripslashes($filters['name']);
    $address = stripslashes($filters['address']);
    $city = stripslashes($filters['city']);
    $postal = stripslashes($filters['postal']);
    $password_hash =  password_hash($password, PASSWORD_DEFAULT);
    if(registre($name, $email, $password_hash, $city, $address, $postal)) {
        header('Location: index.php');
    }else {
        require_once __DIR__ . '/../view/v_register.php';
    }
}

require_once __DIR__ . '/../view/v_register.php';