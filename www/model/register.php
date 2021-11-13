<?php

require_once __DIR__ . '/connectDB.php';
function registre(string $nom, string $email, string $password, string $poblacio, string $adreca, string $codiPostal)
{
    $db_conexio = connectDB::conn();
    $sql = $db_conexio->prepare("INSERT INTO usuaris (nom, email, password, poblacio, adreca, codi_postal)
            VALUES (:nom, :email, :password, :poblacio, :adreca, :codi_postal)");
    $sql->bindValue(':nom', $nom);
    $sql->bindValue(':email', $email);
    $sql->bindValue('password', $password);
    $sql->bindValue(':poblacio', $poblacio);
    $sql->bindValue(':adreca', $adreca);
    $sql->bindValue(':codi_postal', $codiPostal);

    $sql->execute();
}
