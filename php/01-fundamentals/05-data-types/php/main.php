<?php


//Ejercicio1


$empleadoNombre = "Carlos Perez";
$empleadoEdad = 30;
$empleadoAltura = 1.75;
$empleadoActivo = true;
$empleadoHabilidades = ["PHP", "Python", "JavaScript"];



var_dump($empleadoNombre);
var_dump($empleadoEdad);
var_dump($empleadoAltura);
var_dump($empleadoActivo);
var_dump($empleadoHabilidades);

echo "Nombre completo: " . $empleadoNombre . " (" . gettype($empleadoNombre) . ")\n";
echo "Edad: " . $empleadoEdad . " (". gettype($empleadoEdad)  . ")\n";
echo "Altura en metros: " . $empleadoAltura . " (". gettype($empleadoAltura)  . ")\n";
echo "Activo en empresa: " . $empleadoActivo . " (". gettype($empleadoActivo)  . ")\n";
echo "Habilidades: " . implode(", ", $empleadoHabilidades) . " (" . gettype($empleadoHabilidades) . ")\n";


//Ejercicio2


$empleadoNombre2 = "Laura Gomez";
$empleadoEdad2 = 28;
$empleadoSalario2 = 2450.50;
$empleadoContrato2 = true;
$empleadoIdiomas2 = ["Español", "Ingles", "Frances"];
$empleadoFechaIngreso2 = "2023-05-15";
$empleadoProyectos2 = 7;
$empleadoCalificacion2 = 4.8;



echo "Nombre completo: " . $empleadoNombre2 . "(". gettype($empleadoNombre2) . ")\n";


echo "Edad: " . $empleadoEdad2 . "(" . gettype($empleadoEdad2) . ")\n";

echo "Salario mensual: " . $empleadoSalario2 . "(". gettype($empleadoSalario2) . ") \n";

echo "Contrato indefinido: " . $empleadoContrato2 . "(" . gettype($empleadoContrato2) . " \n";

echo "Idiomas: " . implode(", ", $empleadoIdiomas2) . " (" . gettype($empleadoIdiomas2) . ")\n";

echo "Fecha de ingreso: " . $empleadoFechaIngreso2 . "(" . gettype($empleadoFechaIngreso2) . ") \n";


echo "Numeros de proyectos: " . $empleadoProyectos2 . "(" . gettype($empleadoProyectos2) . ") \n";

echo "Calificacion media: " . $empleadoCalificacion2 . "(" . gettype($empleadoCalificacion2) . ") \n";


//ejercicio3

$productoNombre3 = "Laptop Pro X";
$productoSKU3 = "SKU-2026-001";
$productoPrecio3 = 1299.99;
$productoStock3 = 45;
$productoDisponible3 = true;
$productoCategorias3 = ["Electronica", "Informatica", "Portatiles"];
$productoFechaLanzamiento3 = "2026-01-15";
$productoPeso3 = 2.3;
$productoGarantia3 = 24;
$productoCalificacion3 = 4.7;




echo "Nombre del producto: " . $productoNombre3 . "(" . gettype($productoNombre3) . ") \n";

echo "Codigo SKU: " . $productoSKU3 . "(" .gettype($productoSKU3) . ") \n";

echo "Precio unitario: " . $productoPrecio3 . "(" . gettype($productoPrecio3) . ") \n";

echo "Stock disponible: " . $productoStock3 . "(" . gettype($productoStock3) . ") \n";

echo "Disponible para venta: " . $productoDisponible3. "(". gettype($productoDisponible3) . ") \n";

echo "Categorias: " . implode(", ", $productoCategorias3) . "(" . gettype($productoCategorias3) . ") \n";

echo "Fecha de lanzamiento: " . $productoFechaLanzamiento3 . "(" . gettype($productoFechaLanzamiento3) . ") \n";

echo "Peso en kg: " . $productoPeso3 . "(" . gettype($productoPeso3) .") \n";

echo "Garantia meses: " . $productoGarantia3 . "(" . gettype($productoGarantia3) . ") \n";

print "Calificacion promedio: " .  $productoCalificacion3;


?>

