<?php
//EJERCICIO 1
// Simulo un archivo subido via formulario
$_FILES['producto'] = [
    'name' => 'laptop.jpg',
    'type' => 'image/jpeg',
    'tmp_name' => '/tmp/phpXyZ123',
    'error' => 0,
    'size' => 150000
];

// Creo la carpeta uploads si no existe
if (!is_dir("uploads")) {
    mkdir("uploads", 0777, true);
    echo "Carpeta uploads creada.\n";
}

// Verifico que no haya errores en la subida
if ($_FILES['producto']['error'] === 0) {
    
    // Verifico que el archivo sea una imagen permitida
    $tiposPermitidos = ['image/jpeg', 'image/png', 'image/gif'];
    if (in_array($_FILES['producto']['type'], $tiposPermitidos)) {
        
        // Verifico que el tamaño no supere 2MB
        $tamanoMaximo = 2 * 1024 * 1024; // 2MB
        if ($_FILES['producto']['size'] <= $tamanoMaximo) {
            
            // Genero un nombre unico para el archivo
            $nombreUnico = time() . "_" . $_FILES['producto']['name'];
            
            // Muevo el archivo a la carpeta uploads
            $rutaDestino = "uploads/" . $nombreUnico;
            
            if (move_uploaded_file($_FILES['producto']['tmp_name'], $rutaDestino)) {
                echo "========================================\n";
                echo "Archivo subido correctamente.\n";
                echo "Nombre original: " . $_FILES['producto']['name'] . "\n";
                echo "Tamaño: " . ($_FILES['producto']['size'] / 1024) . " KB\n";
                echo "Guardado como: " . $nombreUnico . "\n";
                echo "Ruta: " . $rutaDestino . "\n";
                echo "========================================\n";
            } else {
                echo "Error al mover el archivo.\n";
            }
            
        } else {
            echo "Error: El archivo es demasiado grande. Maximo 2MB.\n";
        }
        
    } else {
        echo "Error: Tipo de archivo no permitido. Solo JPG, PNG y GIF.\n";
        echo "Tipo recibido: " . $_FILES['producto']['type'] . "\n";
    }
    
} else {
    echo "Error en la subida. Codigo: " . $_FILES['producto']['error'] . "\n";
}




//EJERCICIO 2

// Simulo la subida de multiples archivos
$_FILES['documentos'] = [
    'name' => ['cv.pdf', 'carta.docx', 'titulo.jpg'],
    'type' => ['application/pdf', 'application/msword', 'image/jpeg'],
    'tmp_name' => ['/tmp/phpA1B2C3', '/tmp/phpD4E5F6', '/tmp/phpG7H8I9'],
    'error' => [0, 0, 0],
    'size' => [250000, 180000, 350000]
];

// Datos del empleado
$idEmpleado = 12345;
$carpetaEmpleado = "uploads/empleado_" . $idEmpleado . "/";

// Creo la carpeta del empleado si no existe
if (!is_dir($carpetaEmpleado)) {
    mkdir($carpetaEmpleado, 0777, true);
    echo "Carpeta creada: " . $carpetaEmpleado . "\n\n";
}

// Tipos de archivo permitidos
$tiposPermitidos = [
    'application/pdf',
    'application/msword',
    'application/vnd.openxmlformats-officedocument.wordprocessingml.document',
    'image/jpeg',
    'image/png'
];

$totalArchivos = count($_FILES['documentos']['name']);
$tamanoTotal = 0;
$archivosSubidos = 0;
$errores = [];

echo "========= PROCESANDO DOCUMENTOS =========\n";

for ($i = 0; $i < $totalArchivos; $i++) {
    $nombreOriginal = $_FILES['documentos']['name'][$i];
    $tipo = $_FILES['documentos']['type'][$i];
    $tmp = $_FILES['documentos']['tmp_name'][$i];
    $error = $_FILES['documentos']['error'][$i];
    $tamano = $_FILES['documentos']['size'][$i];
    
    echo "\n--- Procesando: " . $nombreOriginal . " ---\n";
    
    // Validacion 1: No hay errores
    if ($error !== 0) {
        $errores[] = "Error en archivo $nombreOriginal (codigo: $error)";
        echo "❌ Error en la subida (codigo: $error)\n";
        continue;
    }
    
    // Validacion 2: Tipo permitido
    if (!in_array($tipo, $tiposPermitidos)) {
        $errores[] = "Tipo no permitido: $nombreOriginal ($tipo)";
        echo "❌ Tipo no permitido: $tipo\n";
        continue;
    }
    
    // Validacion 3: Tamaño individual (max 2MB)
    if ($tamano > 2 * 1024 * 1024) {
        $errores[] = "Archivo demasiado grande: $nombreOriginal ($tamano bytes)";
        echo "❌ Tamaño excede 2MB\n";
        continue;
    }
    
    // Acumulo tamaño total
    $tamanoTotal += $tamano;
    
    // Genero nombre unico para el archivo
    $extension = pathinfo($nombreOriginal, PATHINFO_EXTENSION);
    $tipoDoc = 'documento';
    if (strpos($nombreOriginal, 'cv') !== false) {
        $tipoDoc = 'cv';
    } elseif (strpos($nombreOriginal, 'carta') !== false) {
        $tipoDoc = 'carta';
    } elseif (strpos($nombreOriginal, 'titulo') !== false) {
        $tipoDoc = 'titulo';
    }
    $nombreNuevo = $tipoDoc . "_" . date('Ymd') . "." . $extension;
    
    // Muevo el archivo
    $rutaDestino = $carpetaEmpleado . $nombreNuevo;
    if (move_uploaded_file($tmp, $rutaDestino)) {
        $archivosSubidos++;
        echo "✅ Subido: $nombreOriginal → $nombreNuevo\n";
        
        // Registro en log
        $log = date('Y-m-d H:i:s') . " - Empleado $idEmpleado - Subio $nombreOriginal (" . round($tamano/1024, 2) . " KB)\n";
        file_put_contents("registro_subidas.txt", $log, FILE_APPEND);
    } else {
        $errores[] = "Error al mover: $nombreOriginal";
        echo "❌ Error al mover el archivo\n";
    }
}

// Validacion de tamaño total
if ($tamanoTotal > 5 * 1024 * 1024) {
    $errores[] = "Tamaño total excede 5MB ($tamanoTotal bytes)";
    echo "\n⚠️ Tamaño total excede 5MB\n";
}

// Resumen final
echo "\n========= RESUMEN =========\n";
echo "Archivos procesados: " . $totalArchivos . "\n";
echo "Archivos subidos: " . $archivosSubidos . "\n";
echo "Tamaño total: " . round($tamanoTotal/1024, 2) . " KB\n";

if (!empty($errores)) {
    echo "\nErrores encontrados:\n";
    foreach ($errores as $error) {
        echo "  - " . $error . "\n";
    }
} else {
    echo "\n✅ Todos los archivos se subieron correctamente.\n";
}



//EJERCICIO 3


// Simulo la subida de multiples imagenes
$_FILES['imagenes'] = [
    'name' => ['producto1.jpg', 'producto2.png', 'producto3.gif', 'producto4.webp', 'producto5.jpg'],
    'type' => ['image/jpeg', 'image/png', 'image/gif', 'image/webp', 'image/jpeg'],
    'tmp_name' => ['/tmp/phpA1', '/tmp/phpA2', '/tmp/phpA3', '/tmp/phpA4', '/tmp/phpA5'],
    'error' => [0, 0, 0, 0, 0],
    'size' => [800000, 500000, 200000, 900000, 1200000] // 1.2MB excede el limite
];

$idProducto = 1001;

// Creo carpetas necesarias
$carpetaProducto = "uploads/producto_" . $idProducto . "/";
$carpetaLogs = "logs/";

if (!is_dir($carpetaProducto)) {
    mkdir($carpetaProducto, 0777, true);
}
if (!is_dir($carpetaLogs)) {
    mkdir($carpetaLogs, 0777, true);
}

// Configuracion de validaciones
$tiposPermitidos = ['image/jpeg', 'image/png', 'image/gif', 'image/webp'];
$tamanoMaximoIndividual = 1 * 1024 * 1024; // 1MB
$tamanoMaximoTotal = 3 * 1024 * 1024;     // 3MB
$maxArchivos = 5;

$totalArchivos = count($_FILES['imagenes']['name']);
$archivosSubidos = 0;
$archivosFallidos = 0;
$tamanoTotal = 0;
$errores = [];
$detalles = [];

echo "========= SUBIENDO IMAGENES =========\n";
echo "Producto ID: $idProducto\n";
echo "Carpeta destino: $carpetaProducto\n\n";

for ($i = 0; $i < $totalArchivos && $i < $maxArchivos; $i++) {
    $nombreOriginal = $_FILES['imagenes']['name'][$i];
    $tipo = $_FILES['imagenes']['type'][$i];
    $tmp = $_FILES['imagenes']['tmp_name'][$i];
    $error = $_FILES['imagenes']['error'][$i];
    $tamano = $_FILES['imagenes']['size'][$i];
    
    echo "--- Procesando: $nombreOriginal ---\n";
    
    // Validacion 1: Error en subida
    if ($error !== 0) {
        $errores[] = "Error en $nombreOriginal (codigo: $error)";
        $archivosFallidos++;
        echo "❌ Error en la subida (codigo: $error)\n";
        continue;
    }
    
    // Validacion 2: Tipo permitido
    if (!in_array($tipo, $tiposPermitidos)) {
        $errores[] = "Tipo no permitido: $nombreOriginal ($tipo)";
        $archivosFallidos++;
        echo "❌ Tipo no permitido: $tipo\n";
        continue;
    }
    
    // Validacion 3: Tamaño individual
    if ($tamano > $tamanoMaximoIndividual) {
        $errores[] = "Archivo demasiado grande: $nombreOriginal (" . round($tamano/1024) . " KB)";
        $archivosFallidos++;
        echo "❌ Tamaño excede 1MB (" . round($tamano/1024) . " KB)\n";
        continue;
    }
    
    // Validacion 4: Tamaño total
    $tamanoTotal += $tamano;
    if ($tamanoTotal > $tamanoMaximoTotal) {
        $errores[] = "Tamaño total excede 3MB";
        $archivosFallidos++;
        echo "❌ Tamaño total excede 3MB\n";
        continue;
    }
    
    // Genero nombre unico
    $extension = pathinfo($nombreOriginal, PATHINFO_EXTENSION);
    $nombreUnico = $idProducto . "_" . time() . "_" . $nombreOriginal;
    $rutaDestino = $carpetaProducto . $nombreUnico;
    
    // Muevo archivo
    if (move_uploaded_file($tmp, $rutaDestino)) {
        $archivosSubidos++;
        $detalles[] = "✅ $nombreOriginal → $nombreUnico (" . round($tamano/1024) . " KB)";
        echo "✅ Subido correctamente\n";
        echo "  🖼️ Miniatura 200x200 px creada (simulada)\n";
        
        // Registro en log
        $log = date('Y-m-d H:i:s') . " - Producto $idProducto - $nombreOriginal (" . round($tamano/1024) . " KB)\n";
        file_put_contents($carpetaLogs . "subidas.log", $log, FILE_APPEND);
    } else {
        $archivosFallidos++;
        $errores[] = "Error al mover: $nombreOriginal";
        echo "❌ Error al mover el archivo\n";
    }
}

echo "\n========= RESUMEN DE SUBIDA =========\n";
echo "Producto ID: $idProducto\n";
echo "Archivos procesados: " . min($totalArchivos, $maxArchivos) . "\n";
echo "Subidos correctamente: $archivosSubidos\n";
echo "Fallidos: $archivosFallidos\n";
echo "Tamaño total: " . round($tamanoTotal/1024, 2) . " KB\n";
echo "Carpeta: $carpetaProducto\n\n";

if (!empty($detalles)) {
    echo "Detalles:\n";
    foreach ($detalles as $detalle) {
        echo "  $detalle\n";
    }
}

if (!empty($errores)) {
    echo "\nErrores:\n";
    foreach ($errores as $error) {
        echo "  ❌ $error\n";
    }
}

if ($archivosFallidos === 0 && $archivosSubidos > 0) {
    echo "\n✅ Todos los archivos se subieron correctamente.\n";
} elseif ($archivosSubidos > 0) {
    echo "\n⚠️ Algunos archivos fallaron. Revisa los errores.\n";
} else {
    echo "\n❌ Ningun archivo se subio correctamente.\n";
}


?>