<?php
//Ejercicio1

//valores
$numeroString = "150.75";
$verdaderoString = "true";
$falsoString = "false";
$enteroString = "42";
$flotanteString = "3.1416";
$valorNulo = null;
$booleanoVerdadero = true;
$booleanoFalso = false;
$numeroEntero = 100;
$numeroDecimal = 99.99;

// Convertir $numeroString a float y a int
$numeroFloat = (float) $numeroString;   
$numeroInt = (int) $numeroString; 

// Convertir $verdaderoString a bool
$verdaderoBool = (bool) $verdaderoString;

// Convertir $falsoString a bool
$falsoBool = (bool) $falsoString;

// Convertir $enteroString a int y a string
$enteroInt = (int) $enteroString;
$enteroString2 = (string) $enteroString;

// Convertir $flotanteString a float
$flotanteFloat = (float) $flotanteString;

// Convertir $valorNulo a int, float, string y bool
$nuloInt = (int) $valorNulo;
$nuloFloat = (float) $valorNulo;
$nuloString = (string) $valorNulo;
$nuloBool = (bool) $valorNulo;

// Convertir $booleanoVerdadero a int y string
$boolTrueInt = (int) $booleanoVerdadero;
$boolTrueString = (string) $booleanoVerdadero;

// Convertir $booleanoFalso a int y string
$boolFalseInt = (int) $booleanoFalso;
$boolFalseString = (string) $booleanoFalso;

// Convertir $numeroEntero a string
$numeroString3 = (string) $numeroEntero;

// Convertir $numeroDecimal a int
$numeroEntero2 = (int) $numeroDecimal;

echo "========= EJERCICIO 1: CASTING =========\n";
echo "String '150.75' a float: " . $numeroFloat . " (" . gettype($numeroFloat) . ")\n";
echo "String '150.75' a int: " . $numeroInt . " (" . gettype($numeroInt) . ")\n";
echo "String 'true' a bool: " . ($verdaderoBool ? "true" : "false") . " (" . gettype($verdaderoBool) . ")\n";
echo "String 'false' a bool: " . ($falsoBool ? "true" : "false") . " (" . gettype($falsoBool) . ")\n";
echo "String '42' a int: " . $enteroInt . " (" . gettype($enteroInt) . ")\n";
echo "String '42' a string: " . $enteroString2 . " (" . gettype($enteroString2) . ")\n";
echo "String '3.1416' a float: " . $flotanteFloat . " (" . gettype($flotanteFloat) . ")\n";
echo "Null a int: " . $nuloInt . " (" . gettype($nuloInt) . ")\n";
echo "Null a float: " . $nuloFloat . " (" . gettype($nuloFloat) . ")\n";
echo "Null a string: " . $nuloString . " (" . gettype($nuloString) . ")\n";
echo "Null a bool: " . ($nuloBool ? "true" : "false") . " (" . gettype($nuloBool) . ")\n";
echo "Bool true a int: " . $boolTrueInt . " (" . gettype($boolTrueInt) . ")\n";
echo "Bool true a string: " . $boolTrueString . " (" . gettype($boolTrueString) . ")\n";
echo "Bool false a int: " . $boolFalseInt . " (" . gettype($boolFalseInt) . ")\n";
echo "Bool false a string: " . $boolFalseString . " (" . gettype($boolFalseString) . ")\n";
echo "Int 100 a string: " . $numeroString3 . " (" . gettype($numeroString3) . ")\n";
echo "Float 99.99 a int: " . $numeroEntero2 . " (" . gettype($numeroEntero2) . ")\n";




//Ejercicio2

//valores
$idUsuario = "1045";
$nombre = "Maria Gomez";
$edad = "28";
$altura = "1.75";
$activo = "true";
$peso = "72.5";
$telefono = "691234567";
$email = "maria@email.com";
$dni = "12345678A";
$saldo = "-150.75";

//$idUsuario a int y a float.
$idUsuarioInt = (int) $idUsuario;
$idUsuarioFloat = (float) $idUsuario;


//Convertir $edad a int.
$edadInt = (int) $edad;

//Convertir $altura a float.
$alturaFloat = (float) $altura;


//Convertir $activo a bool.
$activoBool = (bool) $activo;


//Convertir $peso a int y a float.
$pesoInt = (int) $peso;
$pesoFloat = (float) $peso;


//Convertir $telefono a int.
$telefonoInt = (int) $telefono;


//Convertir $saldo a float y a int.
$saldoFloat = (float) $saldo;
$saldoInt = (int) $saldo;


//Convertir $dni a string (ya es string, pero con (string)).
$dniString = (string) $dni;



echo "ID '1045' a int: " . $idUsuarioInt . "(" . gettype($idUsuarioInt) . ") \n";

echo "ID '1045' a float: " . $idUsuarioFloat . "(" . gettype($idUsuarioFloat) . ") \n";

echo "Edad '28' a int: " . $edadInt . "(" . gettype($edadInt) . ") \n";

echo "Altura '1.75' a float: " . $alturaFloat . " (" . gettype($alturaFloat) . ")\n";

echo "Activo 'true' a bool : " . $activoBool . "(" . gettype($activoBool) . ") \n";


echo "Peso '72.5' a int: " . $pesoInt . "(" . gettype($pesoInt) . ") \n";

echo "Peso '72.5' a float: " . $pesoFloat . "(" . gettype($pesoFloat) . ") \n";

echo "Telefono '691234567' a int: " . $telefonoInt . "(" . gettype($telefonoInt) . ") \n";

echo "Saldo '-150.75' a float: " . $saldoFloat . "(" . gettype($saldoFloat) . ") \n";

echo "Saldo '-150.75' a int: " . $saldoInt . "(" . gettype($saldoInt) . ") \n";

echo "DNI '12345678A' a string: " . $dniString . "(" . gettype($dniString) . ") \n";



//Ejercicio3

//valores de entrada

$productoId = "P-1056";
$nombre = "Laptop Gamer Pro";
$precio = "1.299,99";
$stock = "045";
$disponible = "true";
$peso = "2.5";
$ancho = "35.8";
$alto = "2.4";
$profundidad = "24.0";
$fechaLanzamiento = "2026-06-15";
$codigoBarras = "8434567890123";
$categoria = "electronica";
$descuento = "0";
$valoracion = "4.7";
$reseñas = "128";


//1
$partes = explode("-", $productoId);
$numeroId = $partes[1]; // "1056"
$productoIdInt = (int) $numeroId;


//2
$precioLimpio = str_replace(".", "", $precio);        // "1299,99"
$precioLimpio = str_replace(",", ".", $precioLimpio); // "1299.99"
$precioFloat = (float) $precioLimpio;


//3
$stockInt = (int) $stock;

//4
$disponibleBool = (bool) $disponible;

//5
$pesoFloat = (float) $peso;
$anchoFloat = (float) $ancho;
$altoFloat = (float) $alto;
$profundidadFloat = (float) $profundidad;

//6
$fechaLanzamientoString = (string) $fechaLanzamiento;

//7 
$codigoBarrasInt = (int) $codigoBarras;

//8
$categoriaString = (string) $categoria;

//9 
$descuentoInt = (int) $descuento;

//10
$valoracionFloat = (float) $valoracion;  // ✅ CORREGIDO

//11
$reseñasInt = (int) $reseñas;




echo "========= EJERCICIO 3: CASTING (CSV) =========\n";
echo "Producto ID 'P-1056' a int (solo numero): " . $productoIdInt . " (" . gettype($productoIdInt) . ")\n";
echo "Precio '1.299,99' a float: " . $precioFloat . " (" . gettype($precioFloat) . ")\n";
echo "Stock '045' a int: " . $stockInt . " (" . gettype($stockInt) . ")\n";
echo "Disponible 'true' a bool: " . ($disponibleBool ? "true" : "false") . " (" . gettype($disponibleBool) . ")\n";
echo "Peso '2.5' a float: " . $pesoFloat . " (" . gettype($pesoFloat) . ")\n";
echo "Ancho '35.8' a float: " . $anchoFloat . " (" . gettype($anchoFloat) . ")\n";
echo "Alto '2.4' a float: " . $altoFloat . " (" . gettype($altoFloat) . ")\n";
echo "Profundidad '24.0' a float: " . $profundidadFloat . " (" . gettype($profundidadFloat) . ")\n";
echo "Fecha lanzamiento '2026-06-15' a string: " . $fechaLanzamientoString . " (" . gettype($fechaLanzamientoString) . ")\n";
echo "Codigo barras '8434567890123' a int: " . $codigoBarrasInt . " (" . gettype($codigoBarrasInt) . ")\n";
echo "Categoria 'electronica' a string: " . $categoriaString . " (" . gettype($categoriaString) . ")\n";
echo "Descuento '0' a int: " . $descuentoInt . " (" . gettype($descuentoInt) . ")\n";
echo "Valoracion '4.7' a float: " . $valoracionFloat . " (" . gettype($valoracionFloat) . ")\n";
echo "Reseñas '128' a int: " . $reseñasInt . " (" . gettype($reseñasInt) . ")\n";

?>

