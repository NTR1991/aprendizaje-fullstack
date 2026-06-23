<?php
//ejercicio 1 

 $envioSeguimiento = "LOG-20206-001";
 $envioDestinatario = "Diego Flores";
 $envioDireccion = "Calle Ruben Diaz 45";
 $ciudad = "Madrid";
 $codigoPostal = 28035;
 $pesoPaquete = 10.55;
 $costoKilo =  5.65;
 $costoEnvio = $pesoPaquete * $costoKilo;

echo "INFORMACION DE ENVIO \n";
echo "Numero de seguimiento: " . $envioSeguimiento . '\n';
echo "Nombre del destinatario: " . $envioDestinatario . '\n';
echo "Direccion de entrega: " . $envioDireccion . '\n';
echo "Ciudad: " . $ciudad . '\n';
echo "Codigo postal: " . $codigoPostal . '\n';
echo "Peso en Kilos: " . $pesoPaquete . '\n';
echo "Costo kilo: " . $costoKilo . '\n';
echo "Costo de envio: " . $costoEnvio . '\n';




//ejercicio 2 


// Datos de entrada
$costoEnvio = 13.45;
$pesoEnvio = 10.50;
$gastoFijo = 2.50;

// Calculos
$envioSeguro = $costoEnvio * 5 / 100;
$envioSubtotal = $costoEnvio + $envioSeguro + $gastoFijo;

// Descuento manual (sin if/else)
// Con $costoEnvio = 13.45 → subtotal < 50 → NO hay descuento
$descuento = 0;

// Para probar con descuento, cambiar $costoEnvio = 59.63
// y $descuento = $envioSubtotal * 10 / 100;

$envioTotal = $envioSubtotal - $descuento;

// Mostrar resultados
echo "=== RESUMEN DEL ENVIO ===\n";
echo "Peso del paquete: " . $pesoEnvio . " kg\n";
echo "Coste base: " . $costoEnvio . " €\n";
echo "Seguro (5%): " . $envioSeguro . " €\n";
echo "Gastos de gestion: " . $gastoFijo . " €\n";
echo "Subtotal: " . $envioSubtotal . " €\n";
echo "Descuento aplicado: " . $descuento . " €\n";
echo "TOTAL FINAL: " . $envioTotal . " €\n";



//EJERCICIO 3


$eventoNombre = "Boda Perez";
$numInvitados = 120;
$menuPersona = 45.50;
$tipoEvento = "Boda";
$duracionHoras = 5;
//calcular
$costeBase = $numInvitados * $menuPersona;

$recargoFijo =  $costeBase * 20 / 100;
$costePersonal = 15 * $duracionHoras;
$subTotal = $costeBase + $recargoFijo + $costePersonal;
$iva = $subTotal * 21 / 100;
$totalFinal = $subTotal + $iva;

echo "=== RESUMEN DEL ENVENTO ===\n";
echo "Nombre del evento: " . $eventoNombre . '\n';
echo "Tipo de evento: " . $tipoEvento . '\n';
echo "Numero de invitados: " . $numInvitados . '\n'; 
echo "Precio del Menu por persona: " . $menuPersona . '\n';
echo "Duracion del evento: " . $duracionHoras . '\n';
echo "El costo base es: " . $costeBase . '\n';
echo "Recarga fija: " . $recargoFijo . '\n';
echo "Subtotal: " . $subTotal . '\n';
echo "IVA: " . $iva . '\n';
echo "Costo Final: " . $totalFinal . '\n';



?>

