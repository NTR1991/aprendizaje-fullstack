<?php

//Ejercicio1

// Variable de entrada
$genero = "aventura";

// Variable para almacenar el precio
$precio = 0;

// Estructura switch para asignar el precio según el género
switch ($genero) {
    case "aventura":
        $precio = 50;
        break;
    
    case "deportes":
        $precio = 45;
        break;

    case "estrategia":
        $precio = 55;
        break;

    case "rpg":
        $precio = 60;
        break;

    case "shooter":
        $precio = 40;
        break;

    default:
        $precio = 30;  // Género no listado
}

// Mostrar resultados
echo "Genero: " . $genero . "\n";
echo "Precio: " . $precio . " €\n";




//Ejercicio2
//datos de entrada
$zona = "europa";
$peso = 3.5;

///variables para resultados
$costoBase = 0;
$recargo = 0;
$costoFinal = 0;


//costo base por zona
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



//recargo por peso
if ($peso <= 2) {
    $recargo = 0;
} elseif ($peso <= 5) {
    $recargo = 10;
} elseif ($peso <= 10) {
    $recargo = 20;
} else {
    $recargo = 30;
}



$costoFinal = $costoBase * (1 + $recargo / 100);


echo "========= LOGISTICA =========\n";
echo "Zona: " . $zona . "\n";
echo "Peso: " . $peso . " kg\n";
echo "Costo base: " . $costoBase . " €\n";
echo "Recargo por peso: " . $recargo . "%\n";
echo "COSTO FINAL: " . $costoFinal . " €\n";



//Ejercicio3


//datos de entrada
$plan = "premium";      // "basico", "estandar", "premium", "familiar"
$datos = 8;            // GB de datos consumidos
$minutos = 300;        // Minutos consumidos
$lineas = 2;           // Número de líneas (solo para plan familiar)



//variables para resultados
$costoBase = 0;
$recargoDatos = 0;
$recargoMinutos = 0;
$descuento = 0;
$subtotal = 0;
$costoFinal = 0;


//costo base por plan 
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
        $costoBase =  30 * $lineas;
        break;

    default :
    $costoBase = 0;
}



//recargo por datos
if ($datos <= 2) {
    $recargoDatos = 0;
} elseif ($datos <= 5) {
    $recargoDatos = 10;
} elseif ($datos <= 10) {
    $recargoDatos = 20;
} else {
    $recargoDatos = 35;
}




//recargo por minutos
if ($minutos <= 100) {
    $recargoMinutos = 0;
} elseif ($minutos <= 200) {
    $recargoMinutos = 5;
} elseif ($minutos <= 500) {
    $recargoMinutos = 10;
} else {
    $recargoMinutos = 20;
}



//descuento por plan familiar
if ($plan == "familiar" && $lineas >= 3) {
    $descuento = 10;
} else {
    $descuento = 0;
}



//calcular subtotal
$subtotal = $costoBase;
$subtotal += $subtotal * $recargoDatos / 100;   // Aplicar recargo por datos
$subtotal += $subtotal * $recargoMinutos / 100; // Aplicar recargo por minutos

//calcular costo final
$costoFinal = $subtotal * (1 - $descuento / 100);




echo "========= TELECOMUNICACIONES =========\n";
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

