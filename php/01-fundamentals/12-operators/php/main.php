<?php
//Ejercicio1

//Datos de entrada
$precioBase = 100;
$descuento = 15;
$iva = 21;


// 1. Calcular el precio con descuento
$precioDescuento = $precioBase * (1 - $descuento / 100);

// 2. Calcular el precio con IVA
$precioIva = $precioDescuento * (1 + $iva / 100);

// 3. Usar operadores de asignación compuestos
$total = 0;
$total += $precioDescuento;    // $total = 85
$total += 5;                   // $total = 90 (gastos de envío)
$total -= 2;                   // $total = 88 (cupón descuento)

// 4. Comparar si el precio final es mayor a 100 €
$precioFinal = $total;
$esMayor = $precioFinal > 100;  // true o false

// 5. Operador ternario
$estado = $precioFinal > 100 ? "Caro" : "Barato";

// 6. Operador null coalescing (??)
$cupon = $_GET['cupon'] ?? "SIN_CUPON";

echo "Precio base: " . $precioBase . " €\n";
echo "Descuento aplicado: " . $descuento . "%\n";
echo "Precio con descuento: " . $precioDescuento . " €\n";
echo "IVA aplicado: " . $iva . "%\n";
echo "Precio con IVA: " . $precioIva . " €\n";
echo "Gastos de envío: 5 €\n";
echo "Cupón descuento: -2 €\n";
echo "Precio final: " . $precioFinal . " €\n";
echo "El precio final " . ($esMayor ? "SI" : "NO") . " es mayor a 100 €\n";
echo "Estado: " . $estado . "\n";
echo "Cupón: " . $cupon . "\n";


//Ejercicio2
$promedio = ($rendimiento + $puntualidad + $trabajoEquipo) / 3;

$promocion = ($rendimiento > 7 && $puntualidad > 8) ? "Candidato a promocion" : "No candidato";
$mejorarEquipo = $trabajoEquipo < 5 ? "Necesita mejorar en equipo" : "Buen trabajo en equipo";

$rendimiento++;  // Mejora el rendimiento en 1 punto

$estado = $promedio >= 6 ? "Aprobado" : "Reprobado";

$comentario = $_GET['comentario'] ?? "Sin comentarios";


echo "Rendimiento: " . $rendimiento . "\n";
echo "Puntualidad: " . $puntualidad . "\n";
echo "Trabajo en equipo: " . $trabajoEquipo . "\n";
echo "Promedio: " . $promedio . "\n";
echo "Estado: " . $estado . "\n";
echo "Promocion: " . $promocion . "\n";
echo "Equipo: " . $mejorarEquipo . "\n";
echo "Comentario: " . $comentario . "\n";



//Ejercicio3

$costoBase = $peso * 1.50;
$costoDistancia = $distancia * 0.10;
$subtotal = $costoBase + $costoDistancia;

$recargoTipo = $tipoPaquete == "urgente" ? $subtotal * 0.25 : 0;
$recargoZona = $zona == "europa" ? $subtotal * 0.10 : ($zona == "america" ? $subtotal * 0.25 : $subtotal * 0.40);

$total = $subtotal + $recargoTipo + $recargoZona;

$descuento = $total > 100 ? $total * 0.10 : 0;
$totalFinal = $total - $descuento;

$tipoEnvio = $_GET['tipo'] ?? "Estandar";


echo "Peso: " . $peso . " kg\n";
echo "Distancia: " . $distancia . " km\n";
echo "Tipo de paquete: " . $tipoPaquete . "\n";
echo "Zona de envío: " . $zona . "\n";
echo "Costo base: " . $costoBase . " €\n";
echo "Costo por distancia: " . $costoDistancia . " €\n";
echo "Subtotal: " . $subtotal . " €\n";
echo "Recargo por tipo: " . $recargoTipo . " €\n";
echo "Recargo por zona: " . $recargoZona . " €\n";
echo "Total: " . $total . " €\n";
echo "Descuento aplicado: " . $descuento . " €\n";
echo "Total final: " . $totalFinal . " €\n";
echo "Tipo de envío: " . $tipoEnvio . "\n";



?>