<?php

class motorModel {
function getProductos() {
    $db = new PDO('mysql:host=localhost;dbname=db_motores;charset=utf8', 'root', '');

    $query = $db->prepare('SELECT * FROM productos');
    $query->execute();
    $productos = $query->fetchAll(PDO::FETCH_OBJ);
    return $productos;
}

function getMarcas() {
    $db = new PDO('mysql:host=localhost;dbname=db_motores;charset=utf8', 'root', '');

    $query = $db->prepare('SELECT * FROM marcas');
    $query->execute();
    $marca = $query->fetchAll(PDO::FETCH_OBJ);
    return $marca;
}

}
?>
