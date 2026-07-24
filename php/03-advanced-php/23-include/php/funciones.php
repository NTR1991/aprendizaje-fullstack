<?php
// FUNCIONES REUTILIZABLES

// Función para calcular el precio con IVA
function calcularPrecioConIva($precio) {
    return $precio * (1 + IVA / 100);
}

// Función para formatear el precio con moneda
function formatearMoneda($cantidad) {
    return number_format($cantidad, 2, ',', '.') . " " . MONEDA;
}
?>