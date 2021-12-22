<?php

/**
 * @return array
 */
function getDetallByProduct($productId) : array {

    $conn = connectDB::conn();
    $sql = $conn->prepare("SELECT * FROM productes WHERE id = :product_id LIMIT 1");
    $sql->bindValue(':product_id', $productId);
    $sql->execute();
    return $sql->fetch(PDO::FETCH_ASSOC);
}