<?php

//Ejercicio1
//Datos de entrada
$productos = ["Portatil", "Raton", "Teclado", "Monitor", "Auriculares"];

echo "Array original: \n";

//Añadir un producto al final
array_push($productos, "Camara Web");
echo "\nDespués de añadir 'Camara Web':\n";
print_r($productos);


//Eliminar el último producto
$eliminado = array_pop($productos);
echo "\nÚltimo producto eliminado: " . $eliminado . "\n";
echo "Array después de eliminar el último:\n";
print_r($productos);



//Mostrar el producto en la posición 2
echo "\nProducto en la posición 2: " . $productos[2] . "\n";


//Mostrar cuántos productos hay
echo "\nTotal de productos: " . count($productos) . "\n";


// Recorrer el array
echo "\nLista de productos:\n";
foreach ($productos as $producto) {
    echo "- " . $producto . "\n";
}







//ejercicio2
//datos de entrada
$empleados = [
    ["nombre" => "Ana", "edad" => 28, "salario" => 2500],
    ["nombre" => "Carlos", "edad" => 35, "salario" => 3200],
    ["nombre" => "Elena", "edad" => 42, "salario" => 3800]
];


//Mostrar el array original
echo "Array original:\n";
print_r($empleados);


//Agrego un nuevo empleado
$empleados[] = ["nombre" => "Luis", "edad" => 30, "salario" => 2800];
echo "\nDespués de agregar a Luis;\n";
print_r($empleados);


//Mostrar el salario de Ana
echo "\nSalario de Ana: " . $empleados[0]["salario"] . " €\n"; 


//Encontrar el empleado joven
$empleadoMasJoven = $empleados[0];
foreach ($empleados as $empleado) {
    if ($empleado["edad"] < $empleadoMasJoven["edad"]) {
        $empleadoMasJoven = $empleado;        
    }
}
echo "\nEmpleado más joven: " . $empleadoMasJoven["nombre"] . " (" . $empleadoMasJoven["edad"] . " años)\n";



//Calcular el salario promedio
$totalSalarios = 0;
foreach ($empleados as $empleado) {
    $totalSalarios += $empleado["salario"];
}
$promedio = $totalSalarios / count($empleados);
echo "\nSalario promedio: " . $promedio . " €\n";


//Mostrar empleados
echo "\nLista de empleados:\n";
foreach ($empleados as $empleado) {
    echo $empleado["nombre"] . " - " . $empleado["salario"] . " €\n";
}





//ejercicio3

// Datos de entrada
$vendedores = [
    "Ana" => ["ventas" => [1200, 1500, 1300, 1400], "comision" => 10],
    "Carlos" => ["ventas" => [900, 1100, 1000, 1200], "comision" => 12],
    "Elena" => ["ventas" => [1600, 1800, 1700, 1900], "comision" => 15]
];

// Mostrar el array original
echo "Array original:\n";
print_r($vendedores);

// Recorrer los vendedores
echo "\n=== RESUMEN DE VENTAS ===\n";
foreach ($vendedores as $nombre => $datos) {
    // Calcular el total de ventas
    $totalVentas = 0;
    foreach ($datos["ventas"] as $venta) {
        $totalVentas += $venta;
    }

    // Calcular la comisión
    $comision = $totalVentas * $datos["comision"] / 100;

    // Mostrar resumen
    echo "Vendedor: " . $nombre . "\n";
    echo "Total de ventas: " . $totalVentas . " €\n";
    echo "Comision: " . $comision . " € (" . $datos["comision"] . "%)\n";
    echo "------------------------\n";
}

?>