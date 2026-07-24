<?php
// FUNCIONES DEL CARRITO

// Función para calcular el total del carrito
function calcularTotalCarrito($productos, $cantidades) {
    $total = 0;
    foreach ($productos as $indice => $producto) {
        $total += $producto["precio"] * $cantidades[$indice];
    }
    return $total;
}

// Función para aplicar descuento
function aplicarDescuento($total) {
    if ($total > ENVIO_GRATIS_DESDE) {
        $descuento = $total * 0.10;
        $totalConDescuento = $total - $descuento;
        return [
            "total" => $totalConDescuento,
            "descuento" => $descuento,
            "aplica" => true
        ];
    } else {
        return [
            "total" => $total,
            "descuento" => 0,
            "aplica" => false
        ];
    }
}
?>