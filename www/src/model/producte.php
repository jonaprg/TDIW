<?php

/*
* @param $name
* @return array
*/
function getProductByName($name) : array {
    $conn = connectDB::conn();
    $sql = "SELECT * FROM products
    WHERE name = '$name' ";
    $stmt = $conn->prepare($sql);
    $stmt = $conn->exec(['name' => $name]);
    return $stmt->fetch(PDO::FETCH_ASSOC);
}
