<?php

//Ejercicio1
//Datos de entrada
$genero = "aventura";

switch ($genero) {
    case "aventura":
        echo "Aventura: 50 €";
        break;

    case "deportes" :
        echo "Deportes: 45 €";
        break;

    case "estrategia" :
        echo "Estrategia: 55 €";
        break;

    case "rpg" :
        echo "RPG: 60 €" ;
        break;

    case "shooter" :
        echo "Shooter: 40 €" ;
        break;
        
    default :
        echo "Otro: 30 €";
}




//Ejercicio2
// Datos de entrada
$zona = "europa";       // "europa", "america", "asia", "oceania"
$peso = 3.5;            // Peso en kg

// 1. Costo base por zona (switch)
switch ($zona) {
    case "europa":
        $costoBase = 10;
        break;
    case "america":
        $costoBase = 25;
        break;
    case "asia":
        $costoBase = 40;
        break;
    case "oceania":
        $costoBase = 35;
        break;
    default:
        $costoBase = 50;
}

// 2. Recargo por peso (if...elseif...else)
if ($peso <= 2) {
    $recargo = 0;
} elseif ($peso <= 5) {
    $recargo = 10;
} elseif ($peso <= 10) {
    $recargo = 20;
} else {
    $recargo = 30;
}

// 3. Calcular costo final
$costoFinal = $costoBase * (1 + $recargo / 100);

// 4. Mostrar resultados
echo "Zona: " . $zona . "\n";
echo "Peso: " . $peso . " kg\n";
echo "Costo base: " . $costoBase . " €\n";
echo "Recargo por peso: " . $recargo . "%\n";
echo "COSTO FINAL: " . $costoFinal . " €\n";



//Ejercicio3
// Datos de entrada
$plan = "premium";      // "basico", "estandar", "premium", "familiar"
$datos = 8;            // GB de datos consumidos
$minutos = 300;        // Minutos consumidos
$lineas = 2;           // Número de líneas (solo para plan familiar)

// 1. Costo base por plan (switch)
switch ($plan) {
    case "basico":
        $costoBase = 15;
        break;
    case "estandar":
        $costoBase = 25;
        break;
    case "premium":
        $costoBase = 40;
        break;
    case "familiar":
        $costoBase = 30 * $lineas;
        break;
    default:
        $costoBase = 0;
}

// 2. Recargo por datos (if...elseif...else)
if ($datos <= 2) {
    $recargoDatos = 0;
} elseif ($datos <= 5) {
    $recargoDatos = 10;
} elseif ($datos <= 10) {
    $recargoDatos = 20;
} else {
    $recargoDatos = 35;
}

// 3. Recargo por minutos (if...elseif...else)
if ($minutos <= 100) {
    $recargoMinutos = 0;
} elseif ($minutos <= 200) {
    $recargoMinutos = 5;
} elseif ($minutos <= 500) {
    $recargoMinutos = 10;
} else {
    $recargoMinutos = 20;
}

// 4. Descuento por plan familiar
if ($plan == "familiar" && $lineas >= 3) {
    $descuento = 10;
} else {
    $descuento = 0;
}

// 5. Calcular costos
$subtotal = $costoBase;
$subtotal += $subtotal * $recargoDatos / 100;
$subtotal += $subtotal * $recargoMinutos / 100;
$costoFinal = $subtotal * (1 - $descuento / 100);

// 6. Mostrar resultados
echo "Plan: " . $plan . "\n";
echo "Datos consumidos: " . $datos . " GB\n";
echo "Minutos consumidos: " . $minutos . " min\n";
echo "Lineas: " . $lineas . "\n";
echo "Costo base: " . $costoBase . " €\n";
echo "Recargo por datos: " . $recargoDatos . "%\n";
echo "Recargo por minutos: " . $recargoMinutos . "%\n";
echo "Descuento: " . $descuento . "%\n";
echo "COSTO FINAL: " . $costoFinal . " €\n";
?>