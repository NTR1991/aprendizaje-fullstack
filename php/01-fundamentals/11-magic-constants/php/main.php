<?php

//Ejercicio1

// 1. Mostrar la línea actual
echo "Línea actual: " . __LINE__ . "\n";

// 2. Mostrar el archivo actual
echo "Archivo actual: " . __FILE__ . "\n";

// 3. Mostrar el directorio actual
echo "Directorio actual: " . __DIR__ . "\n";

// 4. Crear una función y mostrar su nombre
function mostrarFuncion() {
    echo "Función actual: " . __FUNCTION__ . "\n";
}
mostrarFuncion();

// 5. Crear una clase y mostrar clase y método
class MiClase {
    public function miMetodo() {
        echo "Clase actual: " . __CLASS__ . "\n";
        echo "Método actual: " . __METHOD__ . "\n";
    }
}

// Crear objeto y llamar al método
$objeto = new MiClase();
$objeto -> miMetodo();

// 6. Mostrar el namespace (si existe)
echo "Namespace actual: " . __NAMESPACE__ . "\n";


//Ejercicio2

// Crear una función logger($mensaje)
function logger($mensaje) {
    echo "Mensaje: " . $mensaje . " - Archivo: " . __FILE__ . " - Linea: " . __LINE__ . " - Funcion: " . __FUNCTION__ . "\n";
}

// Llamar a la función logger
logger("Hola Mundo");
logger("Esto es una prueba");  // ✅ Corregido
logger("Ultimo mensaje");

// Crear una clase Logger
class Logger {
    public function error($mensaje) {
        echo "ERROR: " . $mensaje . " - Clase: " . __CLASS__ . " - Metodo: " . __METHOD__ . "\n";
    }
}

// Crear objeto y llamar al método error
$log = new Logger();
$log->error("Error de conexión a la base de datos");


//Ejercicio3
// PASO 1: Función debug
function debug($mensaje, $nivel) {
    echo "[" . date('Y-m-d H:i:s') . "] [" . $nivel . "] " . $mensaje . " - Archivo: " . __FILE__ . " - Linea: " . __LINE__ . " - Funcion: " . __FUNCTION__ . "\n";
}

// Probar la función debug
echo "========= EJERCICIO 3: DEBUGGER =========\n";
echo "--- Probando función debug ---\n";
debug("Nueva funcion", "INFO");
debug("Iniciando proceso", "INFO");
debug("Error critico", "ERROR");

// PASO 2: Clase Debugger
class Debugger {
    // Método privado: solo se usa dentro de la clase
    private function log($mensaje, $nivel) {
        echo "[" . date('Y-m-d H:i:s') . "] [" . $nivel . "] " . $mensaje . " - Clase: " . __CLASS__ . " - Metodo: " . __METHOD__ . "\n";
    }
    
    // Métodos públicos
    public function info($mensaje) {
        $this->log($mensaje, "INFO");
    }
    
    public function warning($mensaje) {
        $this->log($mensaje, "WARNING");
    }
    
    public function error($mensaje) {
        $this->log($mensaje, "ERROR");
    }
}

// PASO 3: Probar la clase Debugger
echo "--- Probando clase Debugger ---\n";
$debug = new Debugger();
$debug->info("Usuario autenticado correctamente");
$debug->warning("Sesión expirará en 5 minutos");
$debug->error("Error al conectar con la base de datos");


?>

