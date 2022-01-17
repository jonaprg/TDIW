<?php

function getUserByID(int $user_id): array
{

    $conn = connectDB::conn();
    $sql = $conn->prepare("SELECT id, nom, email, poblacio, adreca, codi_postal, foto 
                FROM usuaris WHERE id = :user_id LIMIT 1");
    $sql->bindValue(':user_id', $user_id);
    $sql->execute();
    return $sql->fetch(PDO::FETCH_ASSOC);
}

function updateUserById(int $id_user, $email, $password, $name, $address, $city, $c_postal, $imageName)
{
    $conn = connectDB::conn();

    if(!empty($password)) {
        $sql = $conn->prepare("UPDATE usuaris SET nom = :name, password = :password, email = :email, 
                   poblacio = :city, adreca = :address, codi_postal = :c_postal, foto = :imageName
                WHERE id = :user_id");
        $sql->bindValue(':user_id', $id_user);
        $sql->bindValue(':password', password_hash($password, PASSWORD_DEFAULT));
        $sql->bindValue(':name', $name);
        $sql->bindValue(':email', $email);
        $sql->bindValue(':city', $city);
        $sql->bindValue(':address', $address);
        $sql->bindValue(':c_postal', $c_postal);
        $sql->bindValue(':imageName', $imageName);
        $sql->execute();
    } else {
        $sql = $conn->prepare("UPDATE usuaris SET nom = :name, email = :email, 
                   poblacio = :city, adreca = :address, codi_postal = :c_postal, foto = :imageName
                WHERE id = :user_id");

        $sql->bindValue(':user_id', $id_user);
        $sql->bindValue(':name', $name);
        $sql->bindValue(':email', $email);
        $sql->bindValue(':city', $city);
        $sql->bindValue(':address', $address);
        $sql->bindValue(':c_postal', $c_postal);
        $sql->bindValue(':imageName', $imageName);
        $sql->execute();
    }


}