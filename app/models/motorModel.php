<?php

class motorModel {
function getProductos() {
    $db = new PDO('mysql:host=localhost;dbname=db_motores;charset=utf8', 'root', '');

    $query = $db->prepare('SELECT * FROM productos');
    $query->execute();
    $productos = $query->fetchAll(PDO::FETCH_OBJ);
    return $productos;
}

function getCategorias() {
    $db = new PDO('mysql:host=localhost;dbname=db_motores;charset=utf8', 'root', '');

    $query = $db->prepare('SELECT * FROM categoria');
    $query->execute();
    $categoria = $query->fetchAll(PDO::FETCH_OBJ);
    return $categoria;
}

}
?>
