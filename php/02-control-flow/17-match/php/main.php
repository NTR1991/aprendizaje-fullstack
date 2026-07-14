<?php

//Ejercicio1
//datos de entrada
$zona = "europa";  // "europa", "america", "asia", "oceania"


//asisgno costo
$costoEnvio = match ($zona) {
    "europa" => 10,
    "america" => 25,
    "asia" => 40,
    "oceania" => 35,
    default => 50
};

echo "Zona: " . $zona . "\n";
echo "Costo de envio: " . $costoEnvio . "\n";





//Ejercicio2

//variables de entrada
$tipoCliente = "vip";
$monto = 250;


//variable resultados
$descuentoBase = 0;
$descuentoExtra = 0;
$precioFinal = 0;


//asignar descuento
$descuentoBase = match ($tipoCliente) {
    "regular" => 0,
    "premium" => 10,
    "vip" => 20,
    default => 0;
}


//descuento extra
if ($monto > 200) {
    $descuentoExtra = 5;
} else {
    $descuentoExtra = 0;
}


//precio con descuento base
$precioConDescuentoBase = $monto * (1 - $descuentoBase / 100);


//precio final
$precioFinal = $precioConDescuentoBase * ( 1 - $descuentoExtra / 100);

echo "========= TIENDA DE ROPA =========\n";
echo "Tipo de cliente: " . $tipoCliente . "\n";
echo "Monto de compra: " . $monto . " €\n";
echo "Descuento base: " . $descuentoBase . "%\n";
echo "Descuento extra: " . $descuentoExtra . "%\n";
echo "PRECIO FINAL: " . $precioFinal . " €\n";





//Ejercicio3

//Datos de entrada
$tipoCobertura = "completa";
$edad = 35;
$buenHistorial = true;

//Variables para resultados
$costoBase = 0;
$recargoEdad = 0;
$descuento = 0;
$costoFinal = 0;

//Costo base
$costoBase = match ($tipoCobertura) {
    "basica" => 300,
    "completa" => 500,
    "premium" => 800,
    default => 0
};

//recargo por edad
if ($edad < 25) {
    $recargoEdad = 20;
} elseif ($edad >= 25 && $edad <= 40) {
    $recargoEdad = 10;
} else {
    $recargoEdad = 5;
}

//descuento por buen historial
if ($buenHistorial) {
    $descuento = 10;
} else {
    $descuento = 0;
}

// PASO 6: Costo con recargo
$costoConRecargo = $costoBase * (1 + $recargoEdad / 100);

// PASO 7: Costo final
$costoFinal = $costoConRecargo * (1 - $descuento / 100);

// PASO 8: Mostrar resultados
echo "========= SEGUROS =========\n";
echo "Tipo de cobertura: " . $tipoCobertura . "\n";
echo "Edad: " . $edad . " años\n";
echo "Buen historial: " . ($buenHistorial ? "Sí" : "No") . "\n";
echo "Costo base: " . $costoBase . " €\n";
echo "Recargo por edad: " . $recargoEdad . "%\n";
echo "Descuento: " . $descuento . "%\n";
echo "COSTO FINAL: " . $costoFinal . " €\n";

?>