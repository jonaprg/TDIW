<?php

require_once __DIR__ . '/connectDB.php';
function registre(string $nom, string $email, string $password, string $poblacio, string $adreca, string $codiPostal): bool
{
    $db_conexio = connectDB::conn();
    if(!ifExistUserByEmail($email)) {
        $sql = $db_conexio->prepare("INSERT INTO usuaris (nom, email, password, poblacio, adreca, codi_postal)
            VALUES (:nom, :email, :password, :poblacio, :adreca, :codi_postal)");
        $sql->bindValue(':nom', $nom);
        $sql->bindValue(':email', $email);
        $sql->bindValue('password', $password);
        $sql->bindValue(':poblacio', $poblacio);
        $sql->bindValue(':adreca', $adreca);
        $sql->bindValue(':codi_postal', $codiPostal);

        $sql->execute();
        return true;
    }
    return false;
}

function ifExistUserByEmail(string $email): bool {
    $conn = connectDB::conn();
    $sql = "SELECT * FROM usuaris
        WHERE email = :email";
    $query = $conn->prepare($sql);
    $query->bindValue(':email', $email);
    $query->execute();
    return (bool) $query->fetch(PDO::FETCH_ASSOC);

}