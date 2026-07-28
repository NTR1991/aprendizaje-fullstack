<?php

//Ejercicio1
// Creo el archivo ventas.txt con el contenido inicial
$contenido = "VENTAS DEL DIA\n";
$contenido .= "Fecha: 25/07/2026\n";
$contenido .= "Producto: Portatil - 650.00 €\n";
$contenido .= "Producto: Raton - 25.00 €\n";
$contenido .= "Producto: Teclado - 45.00 €\n";
$contenido .= "Total: 720.00 €\n";

file_put_contents("ventas.txt", $contenido);
echo "Archivo creado correctamente.\n\n";



// Leo y muestro el contenido completo usando file_get_contents
echo "========= LECTURA CON file_get_contents() =========\n";
$contenidoCompleto = file_get_contents("ventas.txt");
echo $contenidoCompleto;
echo "\n";


// Leo y muestro el archivo linea por linea
echo "========= LECTURA LINEA POR LINEA =========\n";
$archivo = fopen("ventas.txt", "r");
if ($archivo) {
    $numLinea = 1;
    while (!feof($archivo)) {
        $linea = fgets($archivo);
        echo "Linea " . $numLinea . ": " . $linea;
        $numLinea++;
    }
    fclose($archivo);
} else {
    echo "No se pudo abrir el archivo.\n";
}
echo "\n";




// Leo y muestro el archivo con fread
echo "========= LECTURA CON fread() =========\n";
$archivo = fopen("ventas.txt", "r");
if ($archivo) {
    $tamaño = filesize("ventas.txt");
    $contenidoFread = fread($archivo, $tamaño);
    echo $contenidoFread;
    fclose($archivo);
} else {
    echo "No se pudo abrir el archivo.\n";
}
echo "\n";


// Leo y muestro el archivo como un array
echo "========= LECTURA CON file() =========\n";
$lineas = file("ventas.txt");
foreach ($lineas as $indice => $linea) {
    echo "Linea " . ($indice + 1) . ": " . $linea;
}
echo "\n";




//Ejercicio2
// Creo el contenido del archivo de envios
$contenido = "=== REGISTRO DE ENVIOS ===\n";
$contenido .= "Fecha: 25/07/2026\n";
$contenido .= "Envio #1: Madrid - 15.50 €\n";
$contenido .= "Envio #2: Barcelona - 22.00 €\n";
$contenido .= "Envio #3: Valencia - 18.75 €\n";
$contenido .= "Envio #4: Sevilla - 30.00 €\n";
$contenido .= "Envio #5: Bilbao - 12.50 €\n";
$contenido .= "Total envios: 98.75 €\n";

// Guardo el archivo
file_put_contents("envios.txt", $contenido);
echo "Archivo creado correctamente.\n\n";

// Muestro el contenido completo del archivo
echo "========= CONTENIDO DEL ARCHIVO =========\n";
$contenidoCompleto = file_get_contents("envios.txt");
echo $contenidoCompleto;

// Leo el archivo linea por linea y proceso los datos
echo "========= ESTADISTICAS =========\n";
$lineas = file("envios.txt");
$totalLineas = count($lineas);
$totalEnvios = 0;
$sumaPrecios = 0;
$precioMasAlto = 0;
$precioMasBajo = PHP_FLOAT_MAX;
$envioMasCaro = "";
$envioMasBarato = "";

foreach ($lineas as $linea) {
    // Verifico si la linea contiene "Envio #" para identificar un envio
    if (strpos($linea, "Envio #") !== false) {
        $totalEnvios++;
        
        // Extraigo el precio de la linea
        $inicio = strpos($linea, "- ") + 2;
        $fin = strpos($linea, " €");
        $precio = (float) substr($linea, $inicio, $fin - $inicio);
        
        // Acumulo el total de precios
        $sumaPrecios += $precio;
        
        // Verifico si es el envio mas caro
        if ($precio > $precioMasAlto) {
            $precioMasAlto = $precio;
            $envioMasCaro = trim($linea);
        }
        
        // Verifico si es el envio mas barato
        if ($precio < $precioMasBajo) {
            $precioMasBajo = $precio;
            $envioMasBarato = trim($linea);
        }
    }
}

// Muestro los resultados
echo "Total de lineas: " . $totalLineas . "\n";
echo "Total de envios: " . $totalEnvios . "\n";
echo "Suma total de precios: " . number_format($sumaPrecios, 2, ',', '.') . " €\n";
echo "\n";
echo "========= ENVIO MAS CARO =========\n";
echo $envioMasCaro . "\n";
echo "\n";
echo "========= ENVIO MAS BARATO =========\n";
echo $envioMasBarato . "\n";



//Ejercicio3
// Creo el contenido del archivo CSV
$contenidoCSV = "nombre,precio,stock,categoria\n";
$contenidoCSV .= "Portatil,650,10,electronica\n";
$contenidoCSV .= "Raton,25,30,electronica\n";
$contenidoCSV .= "Teclado,45,15,electronica\n";
$contenidoCSV .= "Monitor,180,8,electronica\n";
$contenidoCSV .= "Auriculares,35,20,electronica\n";
$contenidoCSV .= "Tablet,120,12,electronica\n";

// Guardo el archivo
file_put_contents("productos.csv", $contenidoCSV);
echo "Archivo CSV creado correctamente.\n\n";

// Muestro la lista de productos
echo "========= LISTA DE PRODUCTOS =========\n";
$archivo = fopen("productos.csv", "r");
if ($archivo) {
    while (($datos = fgetcsv($archivo)) !== false) {
        echo "Nombre: " . $datos[0] . "\n";
        echo "Precio: " . $datos[1] . " €\n";
        echo "Stock: " . $datos[2] . " unidades\n";
        echo "Categoria: " . $datos[3] . "\n";
        echo "------------------------\n";
    }
    fclose($archivo);
} else {
    echo "No se pudo abrir el archivo.\n";
}

// Calculo las estadisticas
echo "========= ESTADISTICAS =========\n";
$lineas = file("productos.csv");
$totalProductos = 0;
$sumaPrecios = 0;
$stockTotal = 0;
$precioMasAlto = 0;
$precioMasBajo = PHP_FLOAT_MAX;
$productoMasCaro = "";
$productoMasBarato = "";

foreach ($lineas as $indice => $linea) {
    // Salto la cabecera
    if ($indice == 0) {
        continue;
    }
    
    $datos = explode(",", $linea);
    $nombre = $datos[0];
    $precio = (float) $datos[1];
    $stock = (int) $datos[2];
    $categoria = $datos[3];
    
    $totalProductos++;
    $sumaPrecios += $precio;
    $stockTotal += $stock;
    
    if ($precio > $precioMasAlto) {
        $precioMasAlto = $precio;
        $productoMasCaro = $nombre;
    }
    
    if ($precio < $precioMasBajo) {
        $precioMasBajo = $precio;
        $productoMasBarato = $nombre;
    }
}

$promedio = $sumaPrecios / $totalProductos;

echo "Total de productos: " . $totalProductos . "\n";
echo "Precio promedio: " . number_format($promedio, 2, ',', '.') . " €\n";
echo "Stock total: " . $stockTotal . " unidades\n";
echo "\n";
echo "========= PRODUCTO MAS CARO =========\n";
echo "Producto: " . $productoMasCaro . " - " . number_format($precioMasAlto, 2, ',', '.') . " €\n";
echo "\n";
echo "========= PRODUCTO MAS BARATO =========\n";
echo "Producto: " . $productoMasBarato . " - " . number_format($precioMasBajo, 2, ',', '.') . " €\n";







?>