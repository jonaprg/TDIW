<?php
require_once __DIR__ . '/../model/connectDB.php';
require_once __DIR__ . '/../model/m_user.php';

$id_user = $_SESSION['userId'];

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $filters = filter_input_array(
        INPUT_POST, ['email' => FILTER_VALIDATE_EMAIL]
    );
    $email = $filters['email'];
    $password = $_POST['password'];
    $name = $_POST['nom'];
    $address = $_POST['adreca'];
    $city = $_POST['poblacio'];
    $c_postal = $_POST['codi_postal'];

    if(isset($_FILES['image']) && !empty($_FILES['image'])) {
        $imageName = basename($_FILES['image']['name']);
        $imagePath = sprintf('%s%s', FILE_ABSOLUT_PATH, $imageName);
        move_uploaded_file($_FILES['image']['tmp_name'], $imagePath);
    }
    updateUserById((int)$id_user, $email, $password, $name, $address, $city, $c_postal, $imageName);
    require __DIR__ . '/../resource_perfil.php';
    return;

}
