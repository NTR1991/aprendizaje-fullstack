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


$salarioBase = 1500;

// 1. Clasificación por puntuación
if ($puntuacion >= 90) {
    $clasificacion = "Excelente";
} elseif ($puntuacion >= 70) {
    $clasificacion = "Bueno";
} elseif ($puntuacion >= 50) {
    $clasificacion = "Regular";
} else {
    $clasificacion = "Insuficiente";
}

// 2. Bonificación por experiencia
if ($experiencia >= 5) {
    $bonificacionExperiencia = 10;
} elseif ($experiencia >= 3) {
    $bonificacionExperiencia = 5;
} else {
    $bonificacionExperiencia = 0;
}

// 3. Bonificación extra por objetivos
if ($cumpleObjetivos) {
    $bonificacionObjetivos = 5;
} else {
    $bonificacionObjetivos = 0;
}

// 4. Total bonificación
$bonificacionTotal = $bonificacionExperiencia + $bonificacionObjetivos;

// 5. Salario final
$salarioFinal = $salarioBase + ($salarioBase * $bonificacionTotal / 100);

echo "Puntuación: " . $puntuacion . "\n";
echo "Clasificación: " . $clasificacion . "\n";
echo "Experiencia: " . $experiencia . " años\n";
echo "Cumple objetivos: " . ($cumpleObjetivos ? "Sí" : "No") . "\n";
echo "Bonificación por experiencia: " . $bonificacionExperiencia . "%\n";
echo "Bonificación por objetivos: " . $bonificacionObjetivos . "%\n";
echo "Bonificación total: " . $bonificacionTotal . "%\n";
echo "Salario base: " . $salarioBase . " €\n";
echo "SALARIO FINAL: " . $salarioFinal . " €\n";



//Ejercicio3

$costoBase = 500;

// 1. Recargo por edad
if ($edad >= 18 && $edad <= 25) {
    $recargoEdad = 30;
} elseif ($edad >= 26 && $edad <= 35) {
    $recargoEdad = 15;
} elseif ($edad >= 36 && $edad <= 50) {
    $recargoEdad = 5;
} else {
    $recargoEdad = 0;
}

// 2. Recargo por años de carnet
if ($añosCarnet < 2) {
    $recargoCarnet = 20;
} elseif ($añosCarnet >= 2 && $añosCarnet <= 5) {
    $recargoCarnet = 10;
} else {
    $recargoCarnet = 0;
}

// 3. Recargo por tipo de vehículo
if ($tipoVehiculo == "deportivo") {
    $recargoVehiculo = 25;
} elseif ($tipoVehiculo == "sedan") {
    $recargoVehiculo = 10;
} elseif ($tipoVehiculo == "furgoneta") {
    $recargoVehiculo = 15;
} else {
    $recargoVehiculo = 0;
}

// 4. Recargo por siniestros
if ($siniestros == 0) {
    $recargoSiniestros = 0;
} elseif ($siniestros == 1) {
    $recargoSiniestros = 10;
} else {
    $recargoSiniestros = 25;
}

// 5. Descuento por zona
if ($zona == "rural") {
    $descuentoZona = 10;
} else {
    $descuentoZona = 0;
}

// 6. Descuento por buen conductor
if ($añosCarnet >= 5 && $siniestros == 0) {
    $descuentoBuenConductor = 5;
} else {
    $descuentoBuenConductor = 0;
}

// Total recargos
$totalRecargos = $recargoEdad + $recargoCarnet + $recargoVehiculo + $recargoSiniestros;
$totalDescuentos = $descuentoZona + $descuentoBuenConductor;

// Costo final
$costoFinal = $costoBase * (1 + $totalRecargos / 100) * (1 - $totalDescuentos / 100);


echo "Edad: " . $edad . " años\n";
echo "Años de carnet: " . $añosCarnet . " años\n";
echo "Tipo de vehículo: " . $tipoVehiculo . "\n";
echo "Siniestros: " . $siniestros . "\n";
echo "Zona: " . $zona . "\n";
echo "Costo base: " . $costoBase . " €\n";
echo "Recargo por edad: " . $recargoEdad . "%\n";
echo "Recargo por carnet: " . $recargoCarnet . "%\n";
echo "Recargo por vehículo: " . $recargoVehiculo . "%\n";
echo "Recargo por siniestros: " . $recargoSiniestros . "%\n";
echo "Descuento por zona: " . $descuentoZona . "%\n";
echo "Descuento buen conductor: " . $descuentoBuenConductor . "%\n";
echo "COSTO FINAL: " . $costoFinal . " €\n";

?>
