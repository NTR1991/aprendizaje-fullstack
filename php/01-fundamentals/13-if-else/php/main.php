<?php

//Ejercicio1

//Datos de entrada
$precioBase = 100;
$tipoCliente = "vip";  // "vip", "regular", "nuevo"


// Calcular el descuento según el tipo de cliente
if ($tipoCliente == "vip") {
    $descuento = 20;
} elseif ($tipoCliente == "regular") {
    $descuento = 10;
} elseif ($tipoCliente == "nuevo") {
    $descuento = 5;
} else {
    $descuento = 0;
}

// Calcular el precio con descuento
$precioDescuento = $precioBase * (1 - $descuento / 100);

// Aplicar descuento extra si el precio es mayor a 100 €
if ($precioDescuento > 100) {
    $descuentoExtra = $precioDescuento * 0.05;
} else {
    $descuentoExtra = 0;
}

// Calcular el precio final
$precioFinal = $precioDescuento - $descuentoExtra;  

// Mostrar resultados

echo "Precio base: " . $precioBase . " €\n";
echo "Tipo de cliente: " . $tipoCliente . "\n";
echo "Descuento aplicado: " . $descuento . "%\n";
echo "Precio con descuento: " . $precioDescuento . " €\n";
echo "Descuento extra: " . $descuentoExtra . " €\n";
echo "PRECIO FINAL: " . $precioFinal . " €\n";



//Ejercicio2

//datos de entrada
$puntuacion = 85;        // Puntuación de rendimiento (0-100)
$experiencia = 5;        // Años de experiencia
$cumpleObjetivos = true; // Si cumple objetivos o no





?>