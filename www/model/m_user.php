<?php

/**
 * @return array
 */
function getUserByID(string $user_id): array
{

    $conn = connectDB::conn();
    $sql = $conn->prepare("SELECT * FROM usuaris WHERE id = :user_id LIMIT 1");
    $sql->bindValue(':user_id', $user_id);
    $sql->execute();
    return $sql->fetchAll(PDO::FETCH_ASSOC);
}


?>