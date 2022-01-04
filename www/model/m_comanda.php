<?php
require_once __DIR__ . '/connectDB.php';
function insertComanda($data): bool
{

    $db_connect = connectDB::conn();
    $sql = $db_connect->prepare("INSERT INTO comandes (preu_total, data, n_producte, id_usuari)
        VALUES (:preuTotal, :date, :nProducte, :idUsuari)");
    $sql->bindValue(':preuTotal', $_SESSION['cart']['total_price']);
    $sql->bindValue(':date', $data);
    $sql->bindValue(':nProducte', (int)$_SESSION['cart']['total_elements']);
    $sql->bindValue(':idUsuari', (int)$_SESSION['userId']);

    if ($sql->execute()) { return true; }
    return false;
}

function getComandaByUserIdAndDate($userId, $data): array
{
    $conn = connectDB::conn();
    $sql = $conn->prepare("SELECT id FROM comandes WHERE id_usuari = :idUser 
                            AND data = :date LIMIT 1");
    $sql->bindValue(':idUser', $userId);
    $sql->bindValue(':date', $data);
    $sql->execute();
    return $sql->fetch(PDO::FETCH_ASSOC);
}

function insertLiniasComandes(float $priceTotal, int $qty, int $comandaId, int $pId) {
    $db_connect = connectDB::conn();
    $sql = $db_connect->prepare("INSERT INTO linies_comandes (preu_total_linia, quantitat, comanda_id, producte_id)
        VALUES (:preuTotal, :cantidad, :comandaId, :producteId)");
    $sql->bindValue(':preuTotal', $priceTotal);
    $sql->bindValue(':cantidad', $qty);
    $sql->bindValue(':comandaId', $comandaId);
    $sql->bindValue(':producteId', $pId);

    $sql->execute();
}


