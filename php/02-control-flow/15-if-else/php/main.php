<?php

//Ejercicio1
//datos de entrada
$monto = 250;
$categoriaCliente = "regular"; //"regular", "premium", "vip"


//variables para descuentos
$descuentoBase = o;
$descuentoExtra = 0;
$precioFinal = 0;


//1-descuento base segun categoria

if ($categoriaCliente == "vip") {
    $descuentoBase = 20;
} elseif ($categoriaCliente == "premium") {
    $descuentoBase = 10;
} elseif ($categoriaCliente == "regular") {
    $descuentoBase = 0;
} else {
    $descuentoBase = 0;
}

//2-calcular el precio con descuento base

$precioConDescuento = $monto * (1 - $descuentoBase / 100);

//3-descuento extra (si monto > 200 y es vip o premium)

if ($monto > 200 && ($categoiaCliente == "vip" || $categoriaCliente == "premium")) {
    $descuentoExtra = $precioConDescuento * 0.05;
}


//Calcular precio final

$precioFinal = $precioConDescuento - $descuentoExtra;


echo "========= TIENDA DE ROPA =========\n";
echo "Monto de compra: " . $monto . " €\n";
echo "Categoría del cliente: " . $categoriaCliente . "\n";
echo "Descuento base: " . $descuentoBase . "%\n";
echo "Precio con descuento base: " . $precioConDescuento . " €\n";
echo "Descuento extra: " . $descuentoExtra . " €\n";
echo "PRECIO FINAL: " . $precioFinal . " €\n";


//Ejercicio2

//datos de entrada
$puntuacion = 85;
$experiencia = 5;
$cumpleObjetivos = true;


//variables resulados
$clasificacion = "";
$bonificacionExperiencia = 0;
$bonificacionObjetivos = 0;
$bonificacionTotal = 0;
$salarioFinal = 0;



//1-clasificacion por puntuacion
if ($puntuacion >= 90) {
    $clasificacion = "Excelente";
} elseif ($puntuacion >= 70) {
    $clasificacion = "Bueno";
} elseif ($puntuacion >= 50) {
    $clasificacion = "Regular";
} else {
    $clasificacion = "Insuficiente";
}


///2-bonificacion por experiencia
if ($experiencia >= 5) {
    $bonificacionExperiencia = 10;
} elseif ($experiencia >= 3) {
    $bonificacionExperiencia = 5;
} else {
    $bonificacionExperiencia = 0;
}


//3-bonificacion por objetivos
if ($cumpleObjetivos) {
    $bonificacionObjetivos = 5;
} else {
    $bonificacionObjetivos = 0;
}



//4-bonificacion total
$bonificacionTotal = $bonificacionExperiencia + $bonificacionObjetivos;



//salario final
$salarioBase = 1500;
$salarioFinal = $salarioBase + ($salarioBase * $bonificacionTotal / 100);


echo "========= RECURSOS HUMANOS =========\n";
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

//datos de entrada
$edad = 25;
$añosCarnet = 3;
$tipoVehiculo = "deportivo";
$siniestros = 1;
$zona = "urbana";


//variables resultado
$costoBase = 500;
$recargoEdad = 0;
$recargoCarnet = 0;
$recargoVehiculo = 0;
$recargoSiniestros = 0;
$descuentoZona = 0;
$descuentoBuenConductor = 0;
$costoFinal = 0;


//recargo edad
if ($edad >= 18 && $edad <= 25) {
    $recargoEdad = 30;
} elseif ($edad >= 26 && $edad <= 35) {
    $recargoEdad = 15;
} elseif ($edad >= 36 && $edad <= 50) {
    $recargoEdad = 5;
} else {
    $recargoEdad = 0;
}


//recargo carnet
if ($anosCarnet < 2) {
    $recargoCarnet = 20;
} elseif ($anosCarnet >= 2 && $anosCarnet <= 5) {
    $recargoCarnet = 10;
} else {
    $recargoCarnet = 0;
}



//recargo tipo de vehiculo
if ($tipoVehiculo == "deportivo") {
    $recargoVehiculo = 25;
} elseif ($tipoVehiculo == "sedan") {
    $recargoVehiculo = 10;
} elseif ($tipoVehiculo == "furgoneta") {
    $recargoVehiculo = 15;
} else {
    $recargoVehiculo = 0;
}




//recargo por sieniestros
if ($siniestros == 0) {
    $recargoSiniestros = 0;
} elseif ($siniestros == 1) {
    $recargoSiniestros = 10;
} else {
    $recargoSiniestros = 25;
}


//descuento zona
if ($zona == "rural") {
    $descuentoZona = 10;
} else {
    $descuentoZona = 0;
}


//descuento por buen conductor
if ($anosCarnet >= 5 && $siniestros == 0) {
    $descuentoBuenConductor = 5;
} else {
    $descuentoBuenConductor = 0;
}



//costo final
$totalRecargos = $recargoEdad + $recargoCarnet + $recargoVehiculo + $recargoSiniestros;
$totalDescuentos = $descuentoZona + $descuentoBuenConductor;


$costoFinal = $costoBase * (1 + $totalRecargos / 100) * (1 - $totalDescuentos / 100);



echo "========= SEGUROS DE AUTO =========\n";
echo "Edad: " . $edad . " años\n";
echo "Años de carnet: " . $anosCarnet . " años\n";
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

