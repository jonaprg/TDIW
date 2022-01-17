<?php

function getPedidosByUserId(int $user_id) : array {
    $db_connection = connectDB::conn();
    $sql = $db_connection->prepare('SELECT p.nom, p.url_image, c.preu_total, 
        c.data, c.n_producte, lc.preu_total_linia, lc.quantitat 
        FROM productes p, comandes c, linies_comandes lc, usuaris u 
        WHERE u.id = c.id_usuari and c.id = lc.comanda_id and lc.producte_id = p.id
        and u.id = :user_id ORDER BY 4');
    $sql->bindParam(":user_id", $user_id);
    $sql->execute();

    return $sql->fetchAll(PDO::FETCH_ASSOC);
}