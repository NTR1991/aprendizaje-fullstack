<?php
// FUNCIONES DE PEDIDO

// Función para crear un pedido
function crearPedido($productos, $cantidades, $cliente) {
    $subtotal = 0;
    $items = [];
    
    // Calculo el subtotal y guardo los items
    foreach ($productos as $indice => $producto) {
        if ($cantidades[$indice] > 0) {
            $totalProducto = $producto["precio"] * $cantidades[$indice];
            $subtotal += $totalProducto;
            $items[] = [
                "nombre" => $producto["nombre"],
                "precio" => $producto["precio"],
                "cantidad" => $cantidades[$indice],
                "total" => $totalProducto
            ];
        }
    }
    
    // Aplico descuento del 10% si subtotal > 100
    if ($subtotal > 100) {
        $descuento = $subtotal * 0.10;
    } else {
        $descuento = 0;
    }
    
    // Aplico gastos de envío si subtotal < 50
    if ($subtotal < 50) {
        $gastosEnvio = GASTOS_ENVIO;
    } else {
        $gastosEnvio = 0;
    }
    
    // Calculo el total con IVA
    $totalSinIva = $subtotal - $descuento + $gastosEnvio;
    $iva = $totalSinIva * IVA / 100;
    $totalFinal = $totalSinIva + $iva;
    
    // Devuelvo todos los datos del pedido
    return [
        "cliente" => $cliente,
        "items" => $items,
        "subtotal" => $subtotal,
        "descuento" => $descuento,
        "gastos_envio" => $gastosEnvio,
        "total_sin_iva" => $totalSinIva,
        "iva" => $iva,
        "total_final" => $totalFinal
    ];
}

// Función para mostrar el pedido
function mostrarPedido($pedido) {
    echo "========= RESUMEN DEL PEDIDO =========\n";
    echo "Cliente: " . $pedido["cliente"] . "\n";
    echo "------------------------\n";
    
    foreach ($pedido["items"] as $item) {
        echo $item["nombre"] . " x" . $item["cantidad"] . " = " . $item["total"] . " €\n";
    }
    
    echo "------------------------\n";
    echo "Subtotal: " . $pedido["subtotal"] . " €\n";
    
    if ($pedido["descuento"] > 0) {
        echo "Descuento (10%): -" . $pedido["descuento"] . " €\n";
    }
    
    if ($pedido["gastos_envio"] > 0) {
        echo "Gastos de envío: " . $pedido["gastos_envio"] . " €\n";
    } else {
        echo "Gastos de envío: Gratis\n";
    }
    
    echo "IVA (21%): " . $pedido["iva"] . " €\n";
    echo "TOTAL FINAL: " . $pedido["total_final"] . " €\n";
    echo "========================\n";
}
?>