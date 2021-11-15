<?php
require_once __DIR__ . "/connectDB.php";

function login(string $email, string $password) {
    $db_connection = connectDB::conn();
    $sql = $db_connection->prepare('SELECT id, email, password
        FROM usuaris WHERE email = :email');
    $sql->bindParam("email", $email);
    $sql->execute();

    $result = $sql->fetch(PDO::FETCH_ASSOC);


    return password_verify($password, $result['password']) ? $result : null;
}
