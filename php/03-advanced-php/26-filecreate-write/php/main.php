<?php
//EJERCICIO 1


// Creo el contenido inicial del archivo
$contenido = "=== REGISTRO DE EMPLEADOS ===\n";
$contenido .= "Fecha: 29/07/2026\n";
$contenido .= "Empleado: Ana Perez - Puesto: Desarrollador - Salario: 2500 €\n";
$contenido .= "Empleado: Carlos Gomez - Puesto: Disenador - Salario: 2200 €\n";
$contenido .= "Empleado: Elena Ruiz - Puesto: Gerente - Salario: 3500 €\n";
$contenido .= "Total empleados: 3\n";

// Abro el archivo en modo escritura (crea o sobreescribe)
$archivo = fopen("empleados.txt", "w");
if ($archivo) {
    fwrite($archivo, $contenido);
    fclose($archivo);
    echo "Archivo creado correctamente.\n\n";
} else {
    echo "Error al crear el archivo.\n";
}

// Verifico que el archivo existe
if (file_exists("empleados.txt")) {
    echo "El archivo empleados.txt existe.\n\n";
} else {
    echo "El archivo empleados.txt NO existe.\n";
}

// Añado un nuevo empleado al final
$nuevoContenido = "Empleado: Luis Martinez - Puesto: Analista - Salario: 2800 €\n";
$nuevoContenido .= "Total empleados actualizado: 4\n";

$archivo = fopen("empleados.txt", "a");
if ($archivo) {
    fwrite($archivo, $nuevoContenido);
    fclose($archivo);
    echo "Nuevo empleado añadido correctamente.\n\n";
} else {
    echo "Error al añadir el empleado.\n";
}

// Muestro el contenido final del archivo
echo "========= CONTENIDO FINAL =========\n";
echo file_get_contents("empleados.txt");




//EJERCICIO2


// Creo el archivo CSV con los productos iniciales
$archivo = fopen("productos.csv", "w");

// Escribo la cabecera
$cabecera = ["nombre", "precio", "stock"];
fputcsv($archivo, $cabecera);

// Escribo los productos
$datos = [
    ["Portatil", 650, 10],
    ["Raton", 25, 30],
    ["Teclado", 45, 15],
    ["Monitor", 180, 8]
];

foreach ($datos as $producto) {
    fputcsv($archivo, $producto);
}

fclose($archivo);
echo "Archivo CSV creado correctamente.\n\n";

// Verifico que el archivo existe
if (file_exists("productos.csv")) {
    echo "El archivo productos.csv existe.\n\n";
} else {
    echo "El archivo productos.csv NO existe.\n";
}

// Añado un nuevo producto al final
$archivo = fopen("productos.csv", "a");
$nuevoProducto = ["Auriculares", 35, 20];
fputcsv($archivo, $nuevoProducto);
fclose($archivo);
echo "Nuevo producto añadido correctamente.\n\n";

// Leo y muestro todos los productos
echo "========= LISTA DE PRODUCTOS =========\n";
$archivo = fopen("productos.csv", "r");
while (($fila = fgetcsv($archivo)) !== false) {
    echo "Nombre: " . $fila[0] . "\n";
    echo "Precio: " . $fila[1] . " €\n";
    echo "Stock: " . $fila[2] . " unidades\n";
    echo "------------------------\n";
}
fclose($archivo);

// Calculo total de productos y precio promedio
$lineas = file("productos.csv");
$totalProductos = 0;
$sumaPrecios = 0;

foreach ($lineas as $indice => $linea) {
    if ($indice == 0) {
        continue;
    }
    $datos = str_getcsv($linea);
    $totalProductos++;
    $sumaPrecios += (float) $datos[1];
}

$promedio = $sumaPrecios / $totalProductos;
echo "\nTotal de productos: " . $totalProductos . "\n";
echo "Precio promedio: " . number_format($promedio, 2, ',', '.') . " €\n";



//EJERCICIO 3

// Datos del pedido
$pedido = [
    "cliente" => "Maria Lopez",
    "email" => "maria@email.com",
    "fecha" => "29/07/2026",
    "productos" => [
        ["nombre" => "Portatil", "cantidad" => 1, "precio" => 650],
        ["nombre" => "Raton", "cantidad" => 2, "precio" => 25],
        ["nombre" => "Teclado", "cantidad" => 1, "precio" => 45]
    ]
];

// Creo la carpeta facturas si no existe
if (!is_dir("facturas")) {
    mkdir("facturas");
}

// Genero el contenido de la factura
$contenidoFactura = "========================================\n";
$contenidoFactura .= "              FACTURA\n";
$contenidoFactura .= "========================================\n";
$contenidoFactura .= "Cliente: " . $pedido["cliente"] . "\n";
$contenidoFactura .= "Email: " . $pedido["email"] . "\n";
$contenidoFactura .= "Fecha: " . $pedido["fecha"] . "\n";
$contenidoFactura .= "----------------------------------------\n";
$contenidoFactura .= "Producto     Cantidad   Precio   Total\n";

$subtotal = 0;

foreach ($pedido["productos"] as $producto) {
    $totalProducto = $producto["cantidad"] * $producto["precio"];
    $subtotal += $totalProducto;
    $contenidoFactura .= $producto["nombre"] . "     ";
    $contenidoFactura .= str_pad($producto["cantidad"], 8) . " ";
    $contenidoFactura .= str_pad($producto["precio"], 6) . "   ";
    $contenidoFactura .= $totalProducto . "\n";
}

$iva = $subtotal * 21 / 100;
$total = $subtotal + $iva;

$contenidoFactura .= "----------------------------------------\n";
$contenidoFactura .= "Subtotal: " . number_format($subtotal, 2) . " €\n";
$contenidoFactura .= "IVA (21%): " . number_format($iva, 2) . " €\n";
$contenidoFactura .= "TOTAL: " . number_format($total, 2) . " €\n";
$contenidoFactura .= "========================================\n";

// Guardo la factura
$nombreArchivo = "facturas/factura_" . date('Ymd_His') . ".txt";
file_put_contents($nombreArchivo, $contenidoFactura);

// Registro la factura en el log
$registro = "Fecha: " . $pedido["fecha"] . " - Cliente: " . $pedido["cliente"] . " - Total: " . number_format($total, 2) . " €\n";
file_put_contents("registro_facturas.txt", $registro, FILE_APPEND);

// Muestro confirmacion
echo "========================================\n";
echo "Factura generada correctamente.\n";
echo "Archivo: " . $nombreArchivo . "\n";
echo "----------------------------------------\n";
echo "Cliente: " . $pedido["cliente"] . "\n";
echo "Total: " . number_format($total, 2) . " €\n";
echo "========================================\n";
?>