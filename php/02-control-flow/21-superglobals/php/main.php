<?php

//Ejercicio1
//Datos de entrada
// Mostrar IP del usuario
echo "IP del usuario: " . $_SERVER['REMOTE_ADDR'] . "\n";

// Mostrar el navegador del usuario
echo "Navegador: " . $_SERVER['HTTP_USER_AGENT'] . "\n";

// Mostrar el script actual
echo "Script actual: " . $_SERVER['SCRIPT_NAME'] . "\n";

// Mostrar el método de la solicitud
echo "Método de solicitud: " . $_SERVER['REQUEST_METHOD'] . "\n";

// Mostrar el nombre del servidor
echo "Nombre del servidor: " . $_SERVER['SERVER_NAME'] . "\n";






//Ejercicio2
//Simular datos enviados por formulario (POST)
$_POST['nombre'] = "Ana Perez";
$_POST['email'] = "ana@email.com";
$_POST['edad'] = "28";
$_POST['telefono'] = "612345678";
$_POST['acepta_terminos'] = "on";

//Obtener datos de $_POST
$nombre = $_POST['nombre'] ?? '';
$email = $_POST['email'] ?? '';
$edad = $_POST['edad'] ?? 0;
$telefono = $_POST['telefono'] ?? '';
$aceptaTerminos = isset($_POST['acepta_terminos']);

//Array para almacenar errores
$errores = [];

//Validaciones
if (empty($nombre)) {
    $errores[] = "El nombre es obligatorio";
}

if (empty($email)) {
    $errores[] = "El email es obligatorio";
}

if (empty($edad)) {
    $errores[] = "La edad es obligatoria";
} elseif ($edad < 18) {
    $errores[] = "Debes ser mayor de 18 años";
}

if (!$aceptaTerminos) {
    $errores[] = "Debes aceptar los términos y condiciones";
}

//Mostrar resultados
echo "========= REGISTRO DE USUARIO =========\n";
if (!empty($errores)) {
    echo "Errores en el formulario:\n";
    foreach ($errores as $error) {
        echo "- " . $error . "\n";
    }
} else {
    echo "Formulario validado correctamente\n";
    echo "\n--- RESUMEN DEL USUARIO ---\n";
    echo "Nombre: " . $nombre . "\n";
    echo "Email: " . $email . "\n";
    echo "Edad: " . $edad . " años\n";
    echo "Teléfono: " . $telefono . "\n";
    echo "Acepta términos: " . ($aceptaTerminos ? "Sí" : "No") . "\n";
}



?>