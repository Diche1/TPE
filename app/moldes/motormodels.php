<?php
function getproductos() {
    $db = new PDO('mysql:host=localhost;dbname=db_motores;charset=utf8', 'root', '');

    $query = $db->prepare('SELECT * FROM productos');
    $query->execute();
    $productos = $query->fetchAll(PDO::FETCH_OBJ);
    return $productos;
}

$productos = getproductos();
echo "<h2>Lista de Productos</h2>";
echo "<ul>";
foreach ($productos as $product) {
    echo "<li>Identificación: $product->Id. Fabricante: $product->Fabricante.Potencia: $product->Potencia.Velocidad: $product->Velocidad.Voltaje: $product->Voltaje.Frecuencia: $product->Frecuencia</li>";
  
}
echo "</ul>";

function getcompra() {
    $db = new PDO('mysql:host=localhost;dbname=db_motores;charset=utf8', 'root', '');

    $query = $db->prepare('SELECT * FROM compra');
    $query->execute();
    $compra = $query->fetchAll(PDO::FETCH_OBJ);
    return $compra;
}

$compras = getcompra();
echo "<h2>Lista de Compras</h2>";
echo "<ul>";
foreach ($compras as $compra) {
    echo "<li>Identificación: $compra->Id.Identificación Producto: $compra->Id_producto.Cantidad: $compra->Cantidad.Forma de Pago: $compra->FormaPago.Fecha: $compra->Fecha.Total a Pagar: $compra->Total</li>";
   
}
echo "</ul>";
?>
