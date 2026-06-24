<?php
//ejercicio 1 

$pedidoNumero = "PED-2026-001";
$nombreCliente = "Carlos Ruiz";
$pedidoProducto1 = "Camisa";
$pedidoProducto2 = "Pantalon";
$pedidoProducto3 = "Zapatos";
$pedidoSubtotal = 125.50;
$pedidoIva = $pedidoSubtotal * 21 / 100;
$pedidoTotal = $pedidoSubtotal + $pedidoIva;

echo "Datos de la compra \n";
echo "Número de pedido: " . $pedidoNumero . '\n';
echo "Nombre del cliente: " . $nombreCliente . '\n';
echo "Prodcuto 1: " . $pedidoProducto1 . '\n';
echo "Producto 2: " . $pedidoProducto2 . '\n';
echo "Producto 3: " . $pedidoProducto3 . '\n';
echo "Subtotal: " . $pedidoSubtotal . '\n';
echo "IVA: " . $pedidoIva . '\n';
echo "Total a pagar: " . $pedidoTotal . '\n';

print "Gracias por tu preferencia";
$resultado = print "Gracias";

echo $resultado . $nombreCliente;




//EJERCICIO 2

$tiendaNombre = "TechStore";
$producto1Nombre = "Portatil";
$producto1Precio = 650.00;
$producto2Nombre = "Raton";
$producto2Precio = 25.50;
$producto3Nombre = "Teclado";
$producto3Precio = 45.00;
$producto4Nombre = "Monitor";
$producto4Precio = 180.00;
$subtotal = $producto1Precio + $producto2Precio + $producto3Precio + $producto4Precio;
$descuento = 0;
//aplicar descuento

$descuentoDiez = $subtotal * 10 /100;


$iva = $subtotal * 21 / 100;
$totalFinal = $subtotal + $iva - $descuentoDiez;
$metodoPago = "Tarjeta";

echo "Ticket de compra \n";
echo "Nombre de la Tienda: " . $tiendaNombre . '\n';
echo "Item 1: " . $producto1Nombre . " - " . $producto1Precio . "€" . '\n';
echo "Item 2: " . $producto2Nombre . " - " .$producto2Precio . "€" .'\n';
echo "Item 3: " . $producto3Nombre . " - " .$producto3Precio . "€" .'\n';
echo "Item 4: " . $producto4Nombre . " - " .$producto4Precio . "€" .'\n';
echo "Tiene descuento del 10% " . $descuentoDiez . '\n';
echo "IVA: " . $iva . "€" .'\n';
echo "Total a pagar: " . $totalFinal . "€" .'\n';
print "Metodo de pago: " . $metodoPago . '\n';
$resultado = print "Gracias por tu compra\n";
echo  $resultado . " - " . $metodoPago;





//ejercicio 3 

$restauranteNombre = "El Buen Sabor";
$restauranteDireccion = "Calle Principal 123";
$facturaNumero = "FAC-2026-001";
$clienteNombre = "Ana Martinez";
$fechaActual = date('d/m/Y');
$plato1Nombre = "Ensalada";
$plato1Precio = 12.50;
$plato2Nombre = "Pasta";
$plato2Precio = 15.00;
$plato3Nombre = "Pescado";
$plato3Precio = 22.00;
$plato4Nombre = "Postre";
$plato4Precio = 8.50;
$subtotal = $plato1Precio + $plato2Precio + $plato3Precio + $plato4Precio;
$descuento = 0;
$descuentoCinco = $subtotal * 5 / 100;
$subTotalDescuento = $subtotal - $descuentoCinco;
$iva = $subTotalDescuento * 10 / 100;
$propina = 3.00;
$metodoPago = "efectivo";
$totalFinal = $subTotalDescuento + $iva + $propina;


echo "======================================== \n";
echo $restauranteNombre . '\n';
echo "Direccion: " . $restauranteDireccion . '\n';
echo "Numero de factura" . $facturaNumero . '\n';
echo "======================================== \n";
echo "Cliente: " . $clienteNombre . '\n';
echo "Fecha: " . $fechaActual . '\n';
echo " \n";
echo "---PLATOS---";
echo $plato1Nombre . "............" . $plato1Precio . '\n';
echo $plato2Nombre . "............" . $plato2Precio . '\n';
echo $plato3Nombre . "............" . $plato3Precio . '\n';
echo $plato4Nombre . "............" . $plato4Precio . '\n';
echo "------------------------------------------------------\n";
echo "Subtotal ..................." . $subtotal . '\n';
echo "Descuento (5%) ............." . $descuentoCinco . '\n';
echo "Subtotal con descuento ....." . $subTotalDescuento . '\n';
echo "IVA (10%) .................." . $iva . '\n';
echo "Propina ...................." . $propina . '\n';
echo "======================================================\n";
echo "TOTAL FINAL ................" . $totalFinal . '\n';
echo "======================================================\n";
echo "Metodo de pago: " . $metodoPago . '\n';
print "¡Gracias por su visita! \n";
echo "======================================================\n";


?>

