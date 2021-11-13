<?php
require_once __DIR__ .'/../model/connectDB.php';
require_once __DIR__ . '/../model/register.php';

session_start();

if (isset($_SESSION['id']) && isset($_SESSION['userId'])) {
    echo "Estoy dentro del IF ISSET DE SESSION";
    require_once __DIR__ . '/../resource/resource_portada.php';
    return;
}
echo "HOLA ESTOY FUERA DEL ID";



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
    $email = $filters['email'];
    $password = $filters['password'];
    $name = $filters['name'];
    $address = $filters['address'];
    $city = $filters['city'];
    $postal = $filters['postal'];
    $password_hash =  password_hash($password, PASSWORD_DEFAULT);
    registre($name, $email, $password_hash, $city, $address, $postal);
    require_once __DIR__ . '/../resource/resource_portada.php';
    return;
}

require_once __DIR__ . '/../view/register.php';