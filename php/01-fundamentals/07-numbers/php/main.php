<?php
//Ejercicio1


// ==========================================
// TEMA 7: NUMBERS - EJERCICIO 1 (Normal)
// ==========================================

// Datos de entrada
$precioBase = 150.75;
$iva = 21;
$descuento = 10;

// Calcular precio con IVA
$precioConIva = $precioBase * (1 + $iva / 100);

// Calcular descuento aplicado
$descuentoAplicado = $precioConIva * $descuento / 100;

// Calcular precio final
$precioFinal = $precioConIva - $descuentoAplicado;

// Redondear a 2 decimales
$precioFinalRedondeado = round($precioFinal, 2);

// Formatear con number_format()
$precioBaseFormateado = number_format($precioBase, 2, ',', '.');
$precioConIvaFormateado = number_format($precioConIva, 2, ',', '.');
$descuentoFormateado = number_format($descuentoAplicado, 2, ',', '.');
$precioFinalFormateado = number_format($precioFinalRedondeado, 2, ',', '.');

// Mostrar resultados
echo "========= TIENDA EN LINEA =========\n";
echo "Precio base: " . $precioBaseFormateado . " €\n";
echo "Precio con IVA (21%): " . $precioConIvaFormateado . " €\n";
echo "Descuento aplicado (10%): " . $descuentoFormateado . " €\n";
echo "-----------------------------------\n";
echo "PRECIO FINAL: " . $precioFinalFormateado . " €\n";
echo "===================================\n";




//Ejercicio2


// Datos de entrada
$distancia = 350;
$peso = 4.5;
$costoPorKm = 0.75;
$costoPorKg = 1.25;
$iva = 21;

// Calcular costo base
$costoBase = ($distancia * $costoPorKm) + ($peso * $costoPorKg);

// Calcular IVA
$ivaAplicado = $costoBase * $iva / 100;

// Calcular total
$total = $costoBase + $ivaAplicado;

// Redondear a 2 decimales
$totalRedondeado = round($total, 2);

// Formatear con number_format()
$distanciaFormateada = number_format($distancia, 0, ',', '.');
$pesoFormateado = number_format($peso, 1, ',', '.');
$costoBaseFormateado = number_format($costoBase, 2, ',', '.');
$ivaFormateado = number_format($ivaAplicado, 2, ',', '.');
$totalFormateado = number_format($totalRedondeado, 2, ',', '.');

// Mostrar resultados
echo "========= LOGISTICA EXPRESS =========\n";
echo "Distancia: " . $distanciaFormateada . " km\n";
echo "Peso: " . $pesoFormateado . " kg\n";
echo "Costo base: " . $costoBaseFormateado . " €\n";
echo "IVA (21%): " . $ivaFormateado . " €\n";
echo "-----------------------------------\n";
echo "TOTAL: " . $totalFormateado . " €\n";
echo "====================================\n";


//Ejercicio3

//Ejercicio3

// Datos de entrada
$principal = 5000;          // monto principal en euros
$tasa = 5.5;                // tasa de interés anual (%)
$capitalizacion = 12;       // veces por año (12 = mensual)
$tiempo = 3;                // años

$tasaDecimal = $tasa / 100;

$montoFinal = $principal * pow(1 + $tasaDecimal / $capitalizacion, $capitalizacion * $tiempo);

$interes = $montoFinal - $principal;

// Redondear a 2 decimales
$montoFinalRedondeado = round($montoFinal, 2);
$interesRedondeado = round($interes, 2);

// Formatear con number_format()
$principalFormateado = number_format($principal, 2, ',', '.');
$tasaFormateada = number_format($tasa, 2, ',', '.');
$montoFinalFormateado = number_format($montoFinalRedondeado, 2, ',', '.');
$interesFormateado = number_format($interesRedondeado, 2, ',', '.');

echo "========= INVERSION FINANCIERA =========\n";
echo "Monto inicial: " . $principalFormateado . " €\n";
echo "Tasa de interés: " . $tasaFormateada . "% anual\n";
echo "Capitalización: " . $capitalizacion . " veces al año (mensual)\n";
echo "Período: " . $tiempo . " años\n";
echo "----------------------------------------\n";
echo "Monto final: " . $montoFinalFormateado . " €\n";
echo "Interés ganado: " . $interesFormateado . " €\n";
echo "=======================================\n";

?>

