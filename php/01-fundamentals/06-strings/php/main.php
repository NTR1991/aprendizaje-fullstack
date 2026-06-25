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



?>

