<?php


// Incluyo los archivos necesarios
require 'config.php';
require 'funciones.php';
require 'productos.php';
require 'carrito.php';
require 'pedido.php';

// EJERCICIO 1
echo "========= EJERCICIO 1 =========\n";
$precioProducto = 150;
$precioServicio = 75.50;

$precioProductoIva = calcularPrecioConIva($precioProducto);
$precioServicioIva = calcularPrecioConIva($precioServicio);

echo "Producto: " . formatearMoneda($precioProducto) . " (sin IVA)\n";
echo "Producto con IVA: " . formatearMoneda($precioProductoIva) . "\n";
echo "Servicio: " . formatearMoneda($precioServicio) . " (sin IVA)\n";
echo "Servicio con IVA: " . formatearMoneda($precioServicioIva) . "\n";
echo "IVA aplicado: " . IVA . "%\n\n";

// EJERCICIO 2
echo "========= EJERCICIO 2 =========\n";
mostrarProductos($productos);

$cantidades = [1, 2, 1];
$total = calcularTotalCarrito($productos, $cantidades);
$resultado = aplicarDescuento($total);

echo "\n========= RESUMEN DEL CARRITO =========\n";
echo "Subtotal: " . $total . " €\n";

if ($resultado["aplica"]) {
    echo "Descuento (10%): -" . $resultado["descuento"] . " €\n";
    echo "Total con descuento: " . $resultado["total"] . " €\n";
} else {
    echo "No aplica descuento (mínimo " . ENVIO_GRATIS_DESDE . " €)\n";
    echo "Total: " . $resultado["total"] . " €\n";
}

echo "IVA (21%): " . ($resultado["total"] * IVA / 100) . " €\n";
echo "TOTAL FINAL: " . ($resultado["total"] * (1 + IVA / 100)) . " €\n\n";

// EJERCICIO 3
echo "========= EJERCICIO 3 =========\n";
mostrarProductos($productos);

$cliente = "Ana Perez";
$cantidadesPedido = [1, 2, 1, 0, 0];
$pedido = crearPedido($productos, $cantidadesPedido, $cliente);
mostrarPedido($pedido);
?>