<?php
require_once __DIR__ . '/../model/connectDB.php';
require_once __DIR__ . '/../model/m_login.php';

if($_SERVER['REQUEST_METHOD'] === 'POST' &&
    isset($_POST['email']) && !empty($_POST['email'])
        && isset($_POST['password']) && !empty($_POST['password'])) {

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
        header('Location: index.php');
    }else {
        echo "
            <script type=\"text/javascript\">
                let e = document.getElementById('formLogin').innerHTML = 'Incorrecte login'
            </script>
        ";
    }
}
require_once __DIR__ . '/../view/v_login.php';