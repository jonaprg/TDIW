<?php

/**
 * @return array
 */
function getCategories() : array {
    $conn = connectDB::conn();
    $sql = "SELECT * FROM categories";
    $stmt = $conn->query($sql, PDO::FETCH_ASSOC);
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

/**
 * @param $name
 * @return array
 */
function getCategoriesByName($name) : array {
    $conn = connectDB::conn();
    $sql = "SELECT * FROM categories 
            WHERE name = '$name' ";
    $stmt = $conn->prepare($sql);
    $stmt = $conn->exec(['name' => $name]);
    return $stmt->fetch(PDO::FETCH_ASSOC);
}
