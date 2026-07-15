<?php

//Ejercicio1
// Datos de entrada
$precio = 150;
$descuento = 20;
$iva = 21;

// Función para calcular el precio final
function calcularPrecioFinal($precio, $descuento, $iva) {
    $precioConDescuento = $precio * (1 - $descuento / 100);
    $precioFinal = $precioConDescuento * (1 + $iva / 100);
    return $precioFinal;
}

// Llamar a la función
$resultado = calcularPrecioFinal($precio, $descuento, $iva);

// Mostrar el resultado
echo "Precio final: " . $resultado . " €\n";





//Ejercicio2
// PASO 1: Datos de entrada
$salarioBruto = 2500;
$retencionIRPF = 15;
$seguridadSocial = 6.35;

// PASO 2: Crear la función
function calcularSalarioNeto($salarioBruto, $irpf, $ss) {
    // PASO 3: Calcular el IRPF
    $irpfAplicado = $salarioBruto * $irpf / 100;
    
    // PASO 4: Calcular la Seguridad Social
    $ssAplicado = $salarioBruto * $ss / 100;
    
    // PASO 5: Calcular el salario neto
    $salarioNeto = $salarioBruto - $irpfAplicado - $ssAplicado;
    
    // PASO 6: Devolver el salario neto
    return $salarioNeto;
}

// PASO 7: Llamar a la función
$resultado = calcularSalarioNeto($salarioBruto, $retencionIRPF, $seguridadSocial);

// PASO 8: Mostrar el resultado
echo "========= RECURSOS HUMANOS =========\n";
echo "Salario bruto: " . $salarioBruto . " €\n";
echo "Retención IRPF: " . $retencionIRPF . "%\n";
echo "Retención Seguridad Social: " . $seguridadSocial . "%\n";
echo "SALARIO NETO: " . $resultado . " €\n";







//Ejercicio3
// Datos de entrada
$precioBase = 200;
$tipoCliente = "premium";
$metodoPago = "tarjeta";

// Función para calcular el precio final
function calcularPrecioFinal($precio, $cliente, $pago) {
    // Descuento por tipo de cliente
    $descuentoCliente = match ($cliente) {
        "regular" => 0,
        "premium" => 10,
        "vip" => 20,
        default => 0
    };
    
    // Recargo por método de pago
    $recargoPago = match ($pago) {
        "tarjeta" => 2,
        "paypal" => 3,
        "transferencia" => 0,
        default => 0
    };
    
    // Descuento especial: VIP + transferencia
    $descuentoEspecial = 0;
    if ($cliente == "vip" && $pago == "transferencia") {
        $descuentoEspecial = 5;
    }
    
    // Calcular precio final
    $precioConDescuento = $precio * (1 - $descuentoCliente / 100);
    $precioConRecargo = $precioConDescuento * (1 + $recargoPago / 100);
    $precioFinal = $precioConRecargo * (1 - $descuentoEspecial / 100);
    
    return $precioFinal;
}

// Llamar a la función
$resultado = calcularPrecioFinal($precioBase, $tipoCliente, $metodoPago);

// Mostrar resultados
echo "========= GESTIÓN DE PRODUCTOS =========\n";
echo "Precio base: " . $precioBase . " €\n";
echo "Tipo de cliente: " . $tipoCliente . "\n";
echo "Método de pago: " . $metodoPago . "\n";
echo "PRECIO FINAL: " . $resultado . " €\n";




?>

