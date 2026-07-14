<?php

//Ejercicio1
//datos de entrada
$productos = [
    "Portatil" => 650,
    "Raton" => 25,
    "Teclado" => 45,
    "Monitor" => 180,
    "Auriculares" => 35
];


//variables para contar y sumar
$totalProductos = 0;
$totalPrecio = 0;



//lista de productos
echo "Lista de productos:\n";
foreach ($productos as $nombre => $precio) {
    echo $nombre . ": " . $precio . " €\n";
}



//Contar productos y sumar precios
foreach ($productos as $nombre => $precio) {
    $totalProductos++;
    $totalPrecio += $precio;
}



echo "\nTotal de productos: " . $totalProductos . "\n";
echo "Precio total: " . $totalPrecio . " €\n";







//Ejercicio2
//Datos de entrada
$ventas = [
    "Ana" => [1200, 1500, 1300, 1400],
    "Carlos" => [900, 1100, 1000, 1200],
    "Elena" => [1600, 1800, 1700, 1900]
];



//Recorrer cada vendedor
foreach ($ventas as $vendedor => $ventasVendedor) {
    //variables para este vendedor
    $totalVendedor = 0;
    $cantidadVentas = 0;

    //Recorrer las ventas de este vendedor
    foreach ($ventasVendedor as $venta) {
        $totalVendedor += $venta;
        $cantidadVentas++;
    }


    //Calcular promedio
    $promedioVendedor = $totalVendedor / $cantidadVentas;

    echo "Vendedor: " . $vendedor . "\n";
    echo "Total de ventas: " . $totalVendedor . " €\n";
    echo "Promedio: " . $promedioVendedor . " €\n";
    echo "------------------------\n";

}






//Ejercicio3
// Datos de entrada
$almacenes = [
    "Madrid" => [
        "Portatil" => 15,
        "Raton" => 30,
        "Teclado" => 12
    ],
    "Barcelona" => [
        "Portatil" => 8,
        "Raton" => 25,
        "Teclado" => 20
    ],
    "Valencia" => [
        "Portatil" => 10,
        "Raton" => 18,
        "Teclado" => 5
    ]
];

// Array para almacenar el stock total de cada producto
$stockTotalProductos = [
    "Portatil" => 0,
    "Raton" => 0,
    "Teclado" => 0,  
];

// Recorrer cada almacén
foreach ($almacenes as $nombreAlmacen => $productos) {
    $totalAlmacen = 0;
    
    // Recorrer los productos de este almacén
    foreach ($productos as $producto => $cantidad) {
        $totalAlmacen += $cantidad;
        $stockTotalProductos[$producto] += $cantidad;
    }
    
    // Mostrar resultados de este almacén
    echo "Almacen: " . $nombreAlmacen . "\n";
    foreach ($productos as $producto => $cantidad) {
        echo "  " . $producto . ": " . $cantidad . " unidades\n";
    }
    echo "Total: " . $totalAlmacen . " unidades\n";
    echo "------------------------\n";
} 

// Mostrar resumen total por producto
echo "\n=== RESUMEN DE STOCK TOTAL POR PRODUCTO ===\n";
foreach ($stockTotalProductos as $producto => $total) {
    echo $producto . ": " . $total . " unidades\n";
}



?>