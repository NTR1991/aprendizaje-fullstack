<?php

//Ejercicio1

$clienteNombre = " Ana Maria Rodriguez ";
$clienteNombreLimpio = trim($clienteNombre);
$clienteNombreMayus = strtoupper($clienteNombreLimpio);
$clienteLongitud = strlen($clienteNombreLimpio);

$partes = explode(" ", $clienteNombreLimpio);
$clientePrimerNombre = $partes[0];
$clienteEmail = str_replace(" ", "_", $clienteNombreLimpio);



echo "Nombre sin espacios" . $clienteNombreLimpio . "\n";

echo "Nombre en mayúsculas: " . $clienteNombreMayus . "\n";

echo "Longitud del nombre: " . $clienteLongitud . "\n";

echo "Primer nombre: " . $clientePrimerNombre . "\n";

echo "Nombre para email: " . $clienteEmail . "\n";



//Ejercicio2

$productoNombre = " Laptop Gamer Ultra Pro ";
$productoNombreLimpio = trim($productoNombre);
$productoNombreMinus = strtolower($productoNombreLimpio);
$productoUrl = str_replace(" ", "-", $productoNombreLimpio);
$productoDescripcion = "La mejor gamer ultra pro";
$productoDescripcionLongitud = strlen($productoDescripcion);
$productoResumen = substr($productoDescripcion, 0 , 30);
$productoDescripcionMayus = ucfirst($productoDescripcion);
$productoDescripcionModificada = str_replace("gaming", "videojuegos", $productoDescripcion);

echo "Nombre original: " . $productoNombre . '\n';
echo "Nombre sin espacios: " . $productoNombreLimpio . '\n';
echo "Nombre en minúsculas: " . $productoNombreMinus . '\n';
echo "URL amigable: " . $productoUrl . '\n';
echo "Descripción original: " . $productoDescripcion . '\n';
echo "Longitud de la descripción: " . $productoDescripcionLongitud . '\n';
echo "Resumen (30 caracteres): " . $productoResumen . '\n';
echo "Primera letra mayúscula: " . $productoDescripcionMayus . '\n';
echo "Reemplazar gaming: " . $productoDescripcionModificada . '\n';





//Ejercicio3

$empleadoNombre = "  carlos manuel gomez  ";
$empleadoEmail = "  CARLOS.GOMEZ@EMPRESA.COM  ";
$empleadoTelefono = "  912345678  ";
$empleadoPuesto = "   DESARROLLADOR SENIOR   ";
$empleadoDepartamento = " tecnologia  ";
$empleadoFecha = "2026-06-25";

// Cambios requeridos
$empleadoNombreFormateado = ucwords(trim($empleadoNombre));
$empleadoEmailFormateado = strtolower(trim($empleadoEmail));
$empleadoTelefonoFormateado = trim($empleadoTelefono);
$empleadoPuestoFormateado = strtoupper(trim($empleadoPuesto));
$empleadoDepartamentoFormateado = ucfirst(trim($empleadoDepartamento));

// Formatear fecha
$partesFecha = explode("-", $empleadoFecha);
$empleadoFechaFormateada = $partesFecha[2] . "/" . $partesFecha[1] . "/" . $partesFecha[0];

// Generar firma de correo
$empleadoFirma = "Atentamente,\n" . $empleadoNombreFormateado . "\n" . $empleadoPuestoFormateado . "\n" . $empleadoDepartamentoFormateado;

// Generar nombre de usuario
$partesNombre = explode(" ", trim($empleadoNombre));
$primerLetra = substr($partesNombre[0], 0, 1);
$apellido = $partesNombre[2];
$anio = substr($empleadoFecha, 2, 2);
$empleadoUsuario = $primerLetra . $apellido . $anio;

echo "Nombre original: " . $empleadoNombre . '\n';
echo "Nombre formateado: " . $empleadoNombreFormateado . '\n';
echo "Email original: " . $empleadoEmail . '\n';
echo "Email formateado: " . $empleadoEmailFormateado . '\n';
echo "Teléfono original: " . $empleadoTelefono . '\n';
echo "Teléfono formateado: " . $empleadoTelefonoFormateado . '\n';
echo "Puesto original: " . $empleadoPuesto . '\n';
echo "Puesto formateado: " . $empleadoPuestoFormateado . '\n';
echo "Departamento original: " . $empleadoDepartamento . '\n';
echo "Departamento formateado: " . $empleadoDepartamentoFormateado . '\n';
echo "Fecha original: " . $empleadoFecha . '\n';
echo "Fecha formateada: " . $empleadoFechaFormateada . '\n';
echo "Firma de correo:\n" . $empleadoFirma . '\n';
echo "Nombre de usuario: " . $empleadoUsuario . '\n';

?>

