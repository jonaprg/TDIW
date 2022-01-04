<?php
require_once __DIR__ .'/../model/connectDB.php';
require_once __DIR__ . '/../model/m_register.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' &&
    isset($_POST['email']) && !empty($_POST['email'])
    && isset($_POST['password']) && !empty($_POST['password'])
    && isset($_POST['name']) && !empty($_POST['name'])
    && isset($_POST['city']) && !empty($_POST['city'])
    && isset($_POST['postal']) && !empty($_POST['postal'])){

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
        $incorrectRegister = "No se ha añadido el usuario, porque ya existe!";
        require_once __DIR__ . '/../view/v_register.php';
    }
}

require_once __DIR__ . '/../view/v_register.php';