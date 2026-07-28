<?php

//Ejercicio1
// Creo el archivo ventas.txt con el contenido inicial
$contenidoInicial = "VENTAS DEL DÍA\n";
$contenidoInicial .= "Fecha: 24/07/2026\n";
$contenidoInicial .= "Producto: Portátil - 650.00 €\n";
$contenidoInicial .= "Producto: Ratón - 25.00 €\n";
$contenidoInicial .= "Producto: Teclado - 45.00 €\n";
$contenidoInicial .= "Total: 720.00 €\n";

// Escribo el contenido en el archivo (sobrescribe si existe)
file_put_contents("ventas.txt", $contenidoInicial);
echo "Archivo creado correctamente.\n\n";

// Leo el contenido del archivo
echo "========= CONTENIDO DEL ARCHIVO =========\n";
$contenido = file_get_contents("ventas.txt");  
echo $contenido;

// Añado nuevas líneas al final del archivo
$nuevasLineas = "Descuento aplicado: -72.00 €\n";
$nuevasLineas .= "Total con descuento: 648.00 €\n";

file_put_contents("ventas.txt", $nuevasLineas, FILE_APPEND);
echo "\nLíneas añadidas correctamente.\n\n";

// Leo y muestro el contenido actualizado
echo "========= CONTENIDO ACTUALIZADO =========\n";
$contenidoActualizado = file_get_contents("ventas.txt");
echo $contenidoActualizado;

// Verifico que el archivo existe
if (file_exists("ventas.txt")) { 
    echo "\nEl archivo ventas.txt existe.\n";
} else {
    echo "\nEl archivo ventas.txt NO existe.\n"; 
}





//Ejercicio2
// Creo el archivo envios.txt con el contenido inicial
$contenidoInicial = "=== REGISTRO DE ENVÍOS ===\n";
$contenidoInicial .= "Fecha: 24/07/2026\n";
$contenidoInicial .= "Envío #1: Madrid - 15.50 €\n";
$contenidoInicial .= "Envío #2: Barcelona - 22.00 €\n";
$contenidoInicial .= "Envío #3: Valencia - 18.75 €\n";
$contenidoInicial .= "Total envíos: 56.25 €\n";

file_put_contents("envios.txt", $contenidoInicial);
echo "Archivo creado correctamente.\n\n";


// Leo y muestro el contenido del archivo
echo "========= CONTENIDO DEL ARCHIVO =========\n";
$contenido = file_get_contents("envios.txt");
echo $contenido;


// Añado un nuevo envío al final del archivo
$nuevasLineas = "Envío #4: Sevilla - 30.00 €\n";
$nuevasLineas .= "Total envíos actualizado: 86.25 €\n";

file_put_contents("envios.txt", $nuevasLineas, FILE_APPEND);
echo "\nNuevo envío añadido correctamente.\n\n";


// Leo el archivo línea por línea usando fopen, fgets y fclose
echo "========= LEYENDO LÍNEA POR LÍNEA =========\n";
$archivo = fopen("envios.txt", "r");
if ($archivo) {
    $numeroLinea = 1;
    while (($linea = fgets($archivo)) !== false) {
        echo "Línea " . $numeroLinea . ": " . $linea;
        $numeroLinea++;        
    }
    fclose($archivo);
} else {
    echo "No se pudo abrir el archivo.\n";
}


// Leo y muestro el contenido actualizado
echo "\n========= CONTENIDO ACTUALIZADO =========\n";
$contenidoActualizado = file_get_contents("envios.txt");
echo $contenidoActualizado;


// Cuento cuántas líneas tiene el archivo
$lineas = file("envios.txt");
$totalLineas = count($lineas);
echo "\nEl archivo tiene " . $totalLineas . " líneas.\n";






//Ejercicio3

// Creo el archivo productos.csv con los datos iniciales
$archivo = fopen("productos.csv", "w");
fputcsv($archivo, ["nombre", "precio", "stock", "categoria"]);
fputcsv($archivo, ["Portatil", 650, 10, "electronica"]);
fputcsv($archivo, ["Raton", 25, 30, "electronica"]);
fputcsv($archivo, ["Teclado", 45, 15, "electronica"]);
fputcsv($archivo, ["Monitor", 180, 8, "electronica"]);
fputcsv($archivo, ["Auriculares", 35, 20, "electronica"]);
fclose($archivo);
echo "Archivo creado correctamente.\n\n";

// Abro el archivo y muestro todos los productos
echo "========= LISTA DE PRODUCTOS =========\n";
$archivo = fopen("productos.csv", "r");
while (($datos = fgetcsv($archivo)) !== false) {
    echo "Nombre: " . $datos[0] . "\n";
    echo "Precio: " . $datos[1] . " €\n";
    echo "Stock: " . $datos[2] . " unidades\n";
    echo "Categoria: " . $datos[3] . "\n";
    echo "------------------------\n";
}
fclose($archivo);

// Agrego un nuevo producto al archivo CSV
$archivo = fopen("productos.csv", "a");
fputcsv($archivo, ["Tablet", 120, 12, "electronica"]);
fclose($archivo);
echo "\nProducto añadido correctamente.\n\n";

// Vuelvo a leer el archivo para mostrar los productos actualizados
echo "========= LISTA DE PRODUCTOS ACTUALIZADA =========\n";
$archivo = fopen("productos.csv", "r");
while (($datos = fgetcsv($archivo)) !== false) {
    echo "Nombre: " . $datos[0] . "\n";
    echo "Precio: " . $datos[1] . " €\n";
    echo "Stock: " . $datos[2] . " unidades\n";
    echo "Categoria: " . $datos[3] . "\n";
    echo "------------------------\n";
}
fclose($archivo);

// Busco un producto especifico por su nombre
$nombreBuscar = "Portatil";
$archivo = fopen("productos.csv", "r");
echo "\n========= BUSQUEDA DE PRODUCTO =========\n";
while (($datos = fgetcsv($archivo)) !== false) {
    if ($datos[0] == $nombreBuscar) {
        echo "Producto encontrado: " . $datos[0] . "\n";
        echo "Precio: " . $datos[1] . " €\n";
        echo "Stock: " . $datos[2] . " unidades\n";
        echo "Categoria: " . $datos[3] . "\n";
        break;
    }
}
fclose($archivo);

// Calculo el stock total sumando todos los stocks
$stockTotal = 0;
$archivo = fopen("productos.csv", "r");
fgetcsv($archivo); // Salto la primera linea que es la cabecera
while (($datos = fgetcsv($archivo)) !== false) {
    $stockTotal += $datos[2];
}
fclose($archivo);
echo "\nStock total de todos los productos: " . $stockTotal . " unidades.\n";


?>






















?>