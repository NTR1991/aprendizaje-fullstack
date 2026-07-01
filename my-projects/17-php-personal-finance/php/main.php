<?php
// Datos de entrada
$ingresos = [
    "salario" => 1800,
    "freelance" => 350,
    "alquiler" => 500
];

$gastos = [
    "comida" => 400,
    "transporte" => 120,
    "ocio" => 80,
    "servicios" => 150,
    "seguro" => 60
];

// Calcular total de ingresos
$totalIngresos = array_sum($ingresos);

// Calcular total de gastos
$totalGastos = array_sum($gastos);

// Calcular saldo neto
$saldoNeto = $totalIngresos - $totalGastos;  

// Mostrar resultados básicos
echo "========= RESUMEN DEL PRESUPUESTO =========\n";
echo "Total ingresos: " . number_format($totalIngresos, 0, ',', '.') . " €\n";
echo "Total gastos: " . number_format($totalGastos, 0, ',', '.') . " €\n";
echo "Saldo neto: " . number_format($saldoNeto, 0, ',', '.') . " €\n";

// Mostrar título de ingresos
echo "--- INGRESOS ---\n";

// Recorrer el array de ingresos
foreach ($ingresos as $nombre => $valor) {
    echo $nombre . ": " . number_format($valor, 0, ',', '.') . " €\n";
}

// Mostrar título de gastos
echo "--- GASTOS ---\n";

// Recorrer el array de gastos
foreach ($gastos as $nombre => $valor) {
    echo $nombre . ": " . number_format($valor, 0, ',', '.') . " €\n"; 
}

// Calcular porcentaje de cada gasto
echo "--- PORCENTAJE DE GASTOS ---\n";
foreach ($gastos as $nombre => $valor) {
    $porcentaje = ($valor / $totalGastos) * 100; 
    echo $nombre . ": " . round($porcentaje, 1) . "%\n";
}

// Mostrar alerta según saldo neto
echo "--- ALERTA ---\n";
if ($saldoNeto < 0) {
    echo "ALERTA: Tus gastos superan tus ingresos.\n";
} elseif ($saldoNeto > 0) {
    echo "Buen trabajo: Tus ingresos superan tus gastos.\n";
} else {
    echo "Estas en equilibrio: Gastos igual a ingresos.\n";
}

?>