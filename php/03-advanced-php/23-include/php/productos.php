<?php
// LISTA DE PRODUCTOS

// Array con los productos de la tienda
$productos = [
    ["nombre" => "Portatil", "precio" => 650, "stock" => 10, "categoria" => "electronica"],
    ["nombre" => "Raton", "precio" => 25, "stock" => 30, "categoria" => "electronica"],
    ["nombre" => "Teclado", "precio" => 45, "stock" => 15, "categoria" => "electronica"],
    ["nombre" => "Monitor", "precio" => 180, "stock" => 8, "categoria" => "electronica"],
    ["nombre" => "Auriculares", "precio" => 35, "stock" => 20, "categoria" => "electronica"]
];

// Función para mostrar todos los productos
function mostrarProductos($productos) {
    echo "========= LISTA DE PRODUCTOS =========\n";
    foreach ($productos as $producto) {
        echo "Producto: " . $producto["nombre"] . "\n";
        echo "Precio: " . $producto["precio"] . " €\n";
        echo "Stock: " . $producto["stock"] . " unidades\n";
        echo "Categoría: " . $producto["categoria"] . "\n";
        echo "------------------------\n";
    }
}

// Función para buscar un producto por nombre
function buscarProducto($nombre, $productos) {
    foreach ($productos as $producto) {
        if (strtolower($producto["nombre"]) == strtolower($nombre)) {
            return $producto;
        }
    }
    return null;
}
?>