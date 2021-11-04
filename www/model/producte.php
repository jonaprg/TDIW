<?php

/*
* @param $name
* @return array
*/
function getProductByCategory(int $name) : array {
    $conn = connectDB::conn();
    $sql = "SELECT id, `title`, `author`
    WHERE name = '$name' ";
    $stmt = $conn->prepare($sql);
    $stmt = $conn->exec(['name' => $name]);
    return $stmt->fetch(PDO::FETCH_ASSOC);
}
