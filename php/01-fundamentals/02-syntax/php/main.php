<?php



// EJERCICIO 1 (Normal) - Sistema de Gestion


/* 
 * Script: Sistema de Gestion de Clientes
 * Autor: Juan Robles
 * Fecha: 22/06/2026
 * Descripcion: Demostracion de sintaxis basica PHP
 */

$clienteNombre1 = "Maria Gonzales";
$clienteFecha1 = date('d/m/Y');
$clienteEmpresa1 = "Agencia Marketing Digital";
$clienteProyecto1 = "Sistema de Gestion de Clientes";

echo "===== EJERCICIO 1 =====\n";
echo "Bienvenido al " . $clienteProyecto1 . " de " . $clienteNombre1 . " con fecha de registro " . $clienteFecha1 . " de la empresa " . $clienteEmpresa1 . "\n\n";

// EJERCICIO 2 (Intermedio) - Resumen Cliente


/* 
 * Script: Resumen de Facturacion
 * Descripcion: Calcula facturacion total con IVA
 */

$clienteNombre2 = "Juan Perez";
$clienteEmpresa2 = "Vuela Vuela SL";
$clienteFecha2 = date('d/m/Y');
$clienteAntiguedad2 = 3;
$clienteFacturacionAnual2 = 450000.00;

$clienteFacturacionTotal2 = $clienteAntiguedad2 * $clienteFacturacionAnual2;
$clienteIva2 = $clienteFacturacionTotal2 * 21 / 100;
$clienteTotalConIva2 = $clienteFacturacionTotal2 + $clienteIva2;

echo "===== EJERCICIO 2 =====\n";
echo "RESUMEN DEL CLIENTE\n";
echo "Cliente: " . $clienteNombre2 . "\n";
echo "Empresa: " . $clienteEmpresa2 . "\n";
echo "Fecha de alta: " . $clienteFecha2 . "\n";
echo "Anos activo: " . $clienteAntiguedad2 . "\n";
echo "Facturacion anual: " . $clienteFacturacionAnual2 . "\n";
echo "Facturacion total: " . $clienteFacturacionTotal2 . "\n";
echo "IVA (21%): " . $clienteIva2 . "\n";
echo "Total con IVA: " . $clienteTotalConIva2 . "\n\n";


// EJERCICIO 3 (Dificil) - Perfil Completo


/* 
 * Script: Perfil Completo de Cliente
 * Descripcion: Muestra datos personales y financieros
 */

// Datos personales
$perfilNombre3 = "Emilia Rubio";
$perfilEmpresa3 = "Rubio DL";
$perfilContacto3 = "Martin Cuero";
$perfilCorreo3 = "rubiodl@gmail.com";

// Datos financieros
$perfilFacturacionAnual3 = 75000;
$perfilAntiguedad3 = 5;

// Calculos
$perfilFacturacionTotal3 = $perfilFacturacionAnual3 * $perfilAntiguedad3;
$perfilIva3 = $perfilFacturacionTotal3 * 21 / 100;
$perfilTotalConIva3 = $perfilFacturacionTotal3 + $perfilIva3;

echo "===== EJERCICIO 3 =====\n";
echo "PERFIL DEL CLIENTE\n";
echo "Nombre: " . $perfilNombre3 . "\n";
echo "Empresa: " . $perfilEmpresa3 . "\n";
echo "Contacto: " . $perfilContacto3 . "\n";
echo "Correo: " . $perfilCorreo3 . "\n";
echo "Antiguedad: " . $perfilAntiguedad3 . " anos\n";
echo "Facturacion anual: " . $perfilFacturacionAnual3 . "\n";
echo "Facturacion total: " . $perfilFacturacionTotal3 . "\n";
echo "IVA (21%): " . $perfilIva3 . "\n";
echo "Total con IVA: " . $perfilTotalConIva3 . "\n";
?>