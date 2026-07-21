<?php
$tareas = [
    [
        "id" => 1,
        "titulo" => "Comprar pan",
        "descripcion" => "Comprar pan en la panadería de la esquina",
        "prioridad" => "alta",
        "completada" => false
    ],
    [
        "id" => 2,
        "titulo" => "Estudiar PHP",
        "descripcion" => "Repasar arrays y funciones",
        "prioridad" => "media",
        "completada" => false
    ],
    [
        "id" => 3,
        "titulo" => "Hacer ejercicio",
        "descripcion" => "30 minutos de cardio",
        "prioridad" => "baja",
        "completada" => true
    ]
];


//Mostrar todas las tareas con su estado
function mostrarTareas($tareas) {
    echo "====== LISTA DE TAREAS=======";
    foreach ($tareas as $tarea) {
        $estado = $tarea ["completada"] ? "✅ Completada" : "⏳ Pendiente";
        echo "ID: " . $tarea["id"] . "\n";
        echo "Título: " . $tarea["titulo"] . "\n";
        echo "Descripción: " . $tarea["descripcion"] . "\n";
        echo "Prioridad: " . $tarea["prioridad"] . "\n";
        echo "Estado: " . $estado . "\n";
        echo "------------------------\n";
    }
}


//Añadir una nueva tarea
function agregarTarea(&$tareas, $titulo, $descripcion, $prioridad) {
    $nuevoId = count($tareas) + 1;
    $tareas[] = [
        "id" => $nuevoId,
        "titulo" => $titulo,
        "descripcion" => $descripcion,
        "prioridad" => $prioridad,
        "completada" => false
    ];
    echo "Tarea agregada correctamente.\n";
}


//Probar las funciones
echo "=== PROYECTO 20: TASK MANAGER ===\n\n";

// Mostrar tareas iniciales
mostrarTareas($tareas);

// Agregar una nueva tarea
echo "\n--- AGREGANDO NUEVA TAREA ---\n";
agregarTarea($tareas, "Leer un libro", "Leer 20 páginas del libro de PHP", "media");

// Mostrar tareas después de agregar
echo "\n--- TAREAS DESPUÉS DE AGREGAR ---\n";
mostrarTareas($tareas);



// PASO 5: Marcar una tarea como completada
function completarTarea(&$tareas, $id) {
    $encontrada = false;
    foreach ($tareas as &$tarea) {
        if ($tarea["id"] == $id) {
            if ($tarea["completada"]) {
                echo "La tarea ya estaba completada.\n";
            } else {
                $tarea["completada"] = true;
                echo "Tarea #" . $id . " marcada como completada.\n";
            }
            $encontrada = true;
            break;
        }
    }
    if (!$encontrada) {
        echo "No se encontró la tarea con ID: " . $id . "\n";
    }
}

// PASO 6: Eliminar una tarea
function eliminarTarea(&$tareas, $id) {
    $encontrada = false;
    foreach ($tareas as $indice => $tarea) {
        if ($tarea["id"] == $id) {
            unset($tareas[$indice]);
            // Reindexar el array (para que los IDs sean consecutivos)
            $tareas = array_values($tareas);
            echo "Tarea #" . $id . " eliminada correctamente.\n";
            $encontrada = true;
            break;
        }
    }
    if (!$encontrada) {
        echo "No se encontró la tarea con ID: " . $id . "\n";
    }
}

// PASO 7: Filtrar tareas por estado
function filtrarTareas($tareas, $estado) {
    $resultado = [];
    foreach ($tareas as $tarea) {
        if ($estado == "completadas" && $tarea["completada"]) {
            $resultado[] = $tarea;
        } elseif ($estado == "pendientes" && !$tarea["completada"]) {
            $resultado[] = $tarea;
        }
    }
    return $resultado;
}

// PASO 8: Probar las nuevas funciones
echo "\n--- MARCAR TAREA COMO COMPLETADA ---\n";
completarTarea($tareas, 1);  // Completar tarea ID 1

echo "\n--- TAREAS DESPUÉS DE COMPLETAR ---\n";
mostrarTareas($tareas);

echo "\n--- ELIMINAR TAREA ---\n";
eliminarTarea($tareas, 2);  // Eliminar tarea ID 2

echo "\n--- TAREAS DESPUÉS DE ELIMINAR ---\n";
mostrarTareas($tareas);

echo "\n--- FILTRAR TAREAS PENDIENTES ---\n";
$pendientes = filtrarTareas($tareas, "pendientes");
mostrarTareas($pendientes);

echo "\n--- FILTRAR TAREAS COMPLETADAS ---\n";
$completadas = filtrarTareas($tareas, "completadas");
mostrarTareas($completadas);







?>