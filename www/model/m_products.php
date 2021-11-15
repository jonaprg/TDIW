<?php

function getProductsByCategory(int $categoryId) : array
{
    $conn = connectDB::conn();
    $query = $conn->prepare('SELECT * 
            FROM productes
            WHERE id_categoria = :categoryId');
    $query->bindValue(':categoryId', $categoryId);
    $query->execute();
    return $query->fetchAll(PDO::FETCH_ASSOC);
}