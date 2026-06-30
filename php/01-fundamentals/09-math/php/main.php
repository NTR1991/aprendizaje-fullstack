<?php

//Ejercicio1

// Datos de entrada
$lado1 = 15;
$lado2 = 8;
$lado3 = 12;
$radio = 5;
$temperaturas = [-3, 5, 12, -1, 8, 0, -5];
$precios = [99.99, 45.50, 12.75, 89.30, 25.00];

// Calcular el área de un rectángulo
$areaRectangulo = $lado1 * $lado2;

// Calcular el perímetro de un rectángulo
$perimetroRectangulo = 2 * ($lado1 + $lado2);

// Calcular el área de un círculo
$areaCirculo = pi() * pow($radio, 2);

// Calcular la circunferencia de un círculo
$circunferencia = 2 * pi() * $radio;

// Encontrar el número mayor
$numeroMayor = max($lado1, $lado2, $lado3);

// Encontrar el número menor
$numeroMenor = min($lado1, $lado2, $lado3);

// Calcular el valor absoluto
$absTemperatura = abs($temperaturas[0]);

// Calcular la raíz cuadrada de $lado1
$raizCuadrada = sqrt($lado1);

// Redondear
$redondear = round($precios[0], 2);

// Generar un número aleatorio entre 1 y 100
$numAleatorio = rand(1, 100);

// Mostrar resultados

echo "Area del rectangulo (15 x 8): " . $areaRectangulo . "\n";
echo "Perimetro del rectangulo (15 x 8): " . $perimetroRectangulo . "\n";
echo "Area del circulo (radio 5): " . $areaCirculo . "\n";
echo "Circunferencia (radio 5): " . $circunferencia . "\n";
echo "Numero mayor entre 15, 8 y 12: " . $numeroMayor . "\n";
echo "Numero menor entre 15, 8 y 12: " . $numeroMenor . "\n";
echo "Valor absoluto de -3: " . $absTemperatura . "\n";
echo "Raiz cuadrada de 15: " . $raizCuadrada . "\n";
echo "Precio redondeado (99.99 a 2 decimales): " . $redondear . "\n";
echo "Numero aleatorio entre 1 y 100: " . $numAleatorio . "\n";



//Ejercicio2

// Datos de entrada
$ventas = [1250, 980, 2100, 750, 1650, 1900, 850, 2200, 1400, 1750, 1100, 1950];

// Calcular el número total de meses
$totalMeses = count($ventas);

// Calcular la venta total del año
$ventasTotal = array_sum($ventas);

// Calcular el promedio de ventas
$promedio = $ventasTotal / $totalMeses;

// Redondear el promedio a 2 decimales
$promedioRedondeado = round($promedio, 2);

// Encontrar la venta máxima
$ventaMaxima = max($ventas);

// Encontrar la venta mínima
$ventaMinima = min($ventas);

// Calcular el rango
$rango = $ventaMaxima - $ventaMinima;

// Calcular la raíz cuadrada de la venta total
$raizVentaTotal = sqrt($ventasTotal);

// Redondear la raíz cuadrada a 2 decimales
$raizRedondeada = round($raizVentaTotal, 2);



// Mostrar resultados
echo "Total de meses: " . $totalMeses . "\n";
echo "Venta total del año: " . $ventasTotal . " €\n";
echo "Promedio de ventas: " . $promedioRedondeado . " €\n";
echo "Venta maxima: " . $ventaMaxima . " €\n";
echo "Venta minima: " . $ventaMinima . " €\n";
echo "Rango: " . $rango . " €\n";
echo "Raiz cuadrada de la venta total: " . $raizRedondeada . "\n";




//Ejercicio3

$fondo1 = [1200, 1350, 1100, 1450, 1600, 1300, 1500, 1700, 1400, 1550, 1250, 1650];
$fondo2 = [900, 850, 1100, 950, 1200, 1050, 1300, 1150, 1400, 1250, 1500, 1350];
$fondo3 = [1800, 1650, 1900, 1750, 2000, 1850, 2100, 1950, 2200, 2050, 2300, 2150];


//Calcular el rendimiento total de cada fondo
$total1 = array_sum($fondo1);
$total2 = array_sum($fondo2);
$total3 = array_sum($fondo3);


//Calcular el rendimiento promedio de cada fondo (total / número de meses)

$totalMeses1 = count($fondo1);
$totalMeses2 = count($fondo2);
$totalMeses3 = count($fondo3);

$promedio1 = $total1 / $totalMeses1;
$promedio2 = $total2 / $totalMeses2;
$promedio3 = $total3 / $totalMeses3;


//Redondear los promedios a 2 decimales
$promedioRed1 = round($promedio1, 2);
$promedioRed2 = round($promedio2, 2);
$promedioRed3 = round($promedio3, 2);


//Encontrar el máximo rendimiento
$max1 = max($fondo1);
$max2 = max($fondo2);
$max3 = max($fondo3);


//Encontrar el mínimo rendimiento
$min1 = min($fondo1);
$min2 = min($fondo2);
$min3 = min($fondo3);


//Calcular la desviación (máximo - mínimo) de cada fondo
$desviacion1 = $max1 - $min1;
$desviacion2 = $max2 - $min2;
$desviacion3 = $max3 - $min3;



//Raíz cuadrada del total de cada fondo
$raiz1 = sqrt($total1);
$raiz2 = sqrt($total2);
$raiz3 = sqrt($total3);

$raizRed1 = round($raiz1, 2);
$raizRed2 = round($raiz2, 2);
$raizRed3 = round($raiz3, 2);


//Comparación de totales
$totales = [$total1, $total2, $total3];
$totalMaximo = max($totales);
$totalMinimo = min($totales);


// Mostrar resultados
echo "--- FONDO 1 ---\n";
echo "Total: " . $total1 . " €\n";
echo "Promedio: " . $promedioRed1 . " €\n";
echo "Maximo: " . $max1 . " €\n";
echo "Minimo: " . $min1 . " €\n";
echo "Desviacion: " . $desviacion1 . " €\n";
echo "Raiz cuadrada del total: " . $raizRed1 . "\n";
echo "--- FONDO 2 ---\n";
echo "Total: " . $total2 . " €\n";
echo "Promedio: " . $promedioRed2 . " €\n";
echo "Maximo: " . $max2 . " €\n";
echo "Minimo: " . $min2 . " €\n";
echo "Desviacion: " . $desviacion2 . " €\n";
echo "Raiz cuadrada del total: " . $raizRed2 . "\n";
echo "--- FONDO 3 ---\n";
echo "Total: " . $total3 . " €\n";
echo "Promedio: " . $promedioRed3 . " €\n";
echo "Maximo: " . $max3 . " €\n";
echo "Minimo: " . $min3 . " €\n";
echo "Desviacion: " . $desviacion3 . " €\n";
echo "Raiz cuadrada del total: " . $raizRed3 . "\n";
echo "--- COMPARACION ---\n";
echo "Rendimiento total mas alto: " . $totalMaximo . " €\n";
echo "Rendimiento total mas bajo: " . $totalMinimo . " €\n";

?>

