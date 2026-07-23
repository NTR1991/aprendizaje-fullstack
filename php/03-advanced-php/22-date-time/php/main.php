<?php

//Ejercicio1
// Establecer zona horaria
date_default_timezone_set('Europe/Madrid');

// Datos de entrada
$fechaPedido = "2026-07-22";

// 1. Mostrar fecha en formato español (día/mes/año)
echo "Fecha del pedido (español): " . date('d/m/Y', strtotime($fechaPedido)) . "\n";

// 2. Mostrar fecha en formato ISO (año-mes-día)
echo "Fecha del pedido (ISO): " . $fechaPedido . "\n";

// 3. Mostrar el día de la semana
echo "Día de la semana: " . date('l', strtotime($fechaPedido)) . "\n";

// 4. Calcular fecha de entrega (5 días después)
$fechaEntrega = date('d/m/Y', strtotime($fechaPedido . ' +5 days'));
echo "Fecha de entrega (5 días): " . $fechaEntrega . "\n";

// 5. Calcular fecha de pago (15 días después)
$fechaPago = date('d/m/Y', strtotime($fechaPedido . ' +15 days'));
echo "Fecha de pago (15 días): " . $fechaPago . "\n";

// 6. Calcular tiempo restante de entrega en días
$timestampPedido = strtotime($fechaPedido);
$timestampEntrega = strtotime($fechaPedido . ' +5 days');
$diferencia = $timestampEntrega - $timestampPedido;
$diasRestantes = $diferencia / (60 * 60 * 24);

echo "Tiempo restante de entrega: " . $diasRestantes . " días\n";




//Ejercicio2
// Establezco la zona horaria de España para que las fechas sean correctas
date_default_timezone_set('Europe/Madrid');

// Fechas que voy a usar para los cálculos
$fechaContratacion = "2020-03-15";
$fechaNacimiento = "1995-06-15";
$fechaActual = "2026-07-23";

// Creo objetos DateTime para poder calcular diferencias entre fechas
$fechaContratacionObj = new DateTime($fechaContratacion);
$fechaNacimientoObj = new DateTime($fechaNacimiento);
$fechaActualObj = new DateTime($fechaActual);

// Calculo la antigüedad del empleado restando la fecha de contratación a la actual
$antiguedad = $fechaContratacionObj->diff($fechaActualObj);
echo "Antigüedad: " . $antiguedad->y . " años, " . $antiguedad->m . " meses, " . $antiguedad->d . " días\n";

// Calculo los días totales que han pasado desde que contrataron al empleado
$timestampContratacion = strtotime($fechaContratacion);
$timestampActual = strtotime($fechaActual);
$diasDesdeContratacion = ($timestampActual - $timestampContratacion) / (60 * 60 * 24);
echo "Días desde la contratación: " . floor($diasDesdeContratacion) . " días\n";

// Calculo la edad actual del empleado restando su fecha de nacimiento a la actual
$edad = $fechaNacimientoObj->diff($fechaActualObj);
echo "Edad actual: " . $edad->y . " años\n";

// Calculo los días que faltan para su próximo cumpleaños
// Primero saco el mes y día de nacimiento
$mesNacimiento = (int) date('m', strtotime($fechaNacimiento));
$diaNacimiento = (int) date('d', strtotime($fechaNacimiento));
$anioActual = (int) date('Y', strtotime($fechaActual));

// Armo la fecha del próximo cumpleaños en el año actual
$proximoCumpleanos = $anioActual . '-' . $mesNacimiento . '-' . $diaNacimiento;

// Si el cumpleaños de este año ya pasó, uso el del año que viene
if ($proximoCumpleanos < $fechaActual) {
    $proximoCumpleanos = ($anioActual + 1) . '-' . $mesNacimiento . '-' . $diaNacimiento;
}

// Calculo los días que faltan restando el timestamp de hoy al del próximo cumpleaños
$timestampProximo = strtotime($proximoCumpleanos);
$timestampActual = strtotime($fechaActual);
$diasHastaCumple = ($timestampProximo - $timestampActual) / (60 * 60 * 24);
echo "Días hasta el próximo cumpleaños: " . floor($diasHastaCumple) . " días\n";




//Ejercicio3
// Establezco la zona horaria de España
date_default_timezone_set('Europe/Madrid');

// Fechas y datos que voy a usar
$fechaPedido = "2026-07-23";
$diasEntrega = 5;
$diasPago = 15;
$diasHabiles = true;

// Función para sumar días hábiles (salta fines de semana)
function sumarDiasHabiles($fechaInicio, $dias) {
    // Creo un objeto DateTime con la fecha de inicio
    $fecha = new DateTime($fechaInicio);
    $contador = 0;

    // Mientras no haya sumado todos los días
    while ($contador < $dias) {
        // Añado un día a la fecha
        $fecha->modify('+1 day');

        // Obtengo el número del día de la semana (1=lunes, 7=domingo)
        $diaSemana = (int) $fecha->format('N');

        // Si es día laborable (lunes a viernes), aumento el contador
        if ($diaSemana <= 5) {
            $contador++;
        }
    }

    // Devuelvo la fecha formateada
    return $fecha->format('d/m/Y');
}

// Calculo la fecha de entrega
if ($diasHabiles) {
    // Sumo días hábiles (saltando fines de semana)
    $fechaEntrega = sumarDiasHabiles($fechaPedido, $diasEntrega);
} else {
    // Sumo días calendario normales
    $fechaEntrega = date('d/m/Y', strtotime($fechaPedido . ' + ' . $diasEntrega . ' days'));
}

// Calculo la fecha de pago (siempre días calendario)
$fechaPago = date('d/m/Y', strtotime($fechaPedido . ' + ' . $diasPago . ' days'));

// Muestro los resultados
echo "========= CÁLCULO DE FECHAS =========\n";
echo "Fecha del pedido: " . date('d/m/Y', strtotime($fechaPedido)) . "\n";
echo "Días de entrega (hábiles): " . $diasEntrega . "\n";
echo "Fecha de entrega: " . $fechaEntrega . "\n";
echo "Días de pago (calendario): " . $diasPago . "\n";
echo "Fecha de pago: " . $fechaPago . "\n";



?>






















?>