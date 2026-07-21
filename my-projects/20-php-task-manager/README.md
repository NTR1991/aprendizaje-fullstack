# ✅ PHP Task Manager

## 📋 Description

A PHP-based task management system that allows users to manage their daily tasks efficiently. Users can add, view, complete, delete, and filter tasks using a simple command-line interface.

---

## 🎯 Learning Objectives

- Working with multidimensional arrays
- Creating and using functions with pass-by-reference (`&`)
- Implementing CRUD operations (Create, Read, Update, Delete)
- Using loops (`foreach`) to iterate over arrays
- Using conditional statements (`if`, `elseif`) for logic
- Using the ternary operator (`? :`) for concise conditions
- Filtering data based on specific criteria
- Reindexing arrays with `array_values()`
- Building a real-world application from scratch

---

## 📝 Features

- ✅ **Add tasks** – Add new tasks with title, description, and priority
- ✅ **List tasks** – View all tasks with their current status
- ✅ **Complete tasks** – Mark tasks as completed
- ✅ **Delete tasks** – Remove tasks from the list
- ✅ **Filter tasks** – View only pending or completed tasks
- ✅ **Automatic ID assignment** – Each task gets a unique ID

---

## 🛠️ Technologies Used

- **PHP** – Core language, arrays, functions, pass-by-reference
- **HTML5** – Structure
- **CSS3** – Styling

---

## 📂 Folder Structure
````
20-php-task-manager/
├── css/
│ └── style.css
├── php/
│ └── main.php
├── index.html
└── README.md
````


---

## 📊 Sample Output
=== PROYECTO 20: TASK MANAGER ===

====== LISTA DE TAREAS=======
````
ID: 1
Título: Comprar pan
Descripción: Comprar pan en la panadería de la esquina
Prioridad: alta
Estado: ⏳ Pendiente

ID: 2
Título: Estudiar PHP
Descripción: Repasar arrays y funciones
Prioridad: media
Estado: ⏳ Pendiente

ID: 3
Título: Hacer ejercicio
Descripción: 30 minutos de cardio
Prioridad: baja
Estado: ✅ Completada
````

--- AGREGANDO NUEVA TAREA ---
Tarea agregada correctamente.

--- MARCAR TAREA COMO COMPLETADA ---
Tarea #1 marcada como completada.

--- ELIMINAR TAREA ---
Tarea #2 eliminada correctamente.

--- FILTRAR TAREAS PENDIENTES ---
====== LISTA DE TAREAS=======
````
ID: 4
Título: Leer un libro
Descripción: Leer 20 páginas del libro de PHP
Prioridad: media
Estado: ⏳ Pendiente`
````

--- FILTRAR TAREAS COMPLETADAS ---
====== LISTA DE TAREAS=======
````
ID: 1
Título: Comprar pan
Descripción: Comprar pan en la panadería de la esquina
Prioridad: alta
Estado: ✅ Completada

ID: 3
Título: Hacer ejercicio
Descripción: 30 minutos de cardio
Prioridad: baja
Estado: ✅ Completada
````



---

## 🔍 Code Explanation

### Task Data Structure
```php
$tareas = [
    [
        "id" => 1,
        "titulo" => "Comprar pan",
        "descripcion" => "Comprar pan en la panadería de la esquina",
        "prioridad" => "alta",
        "completada" => false
    ]
];




### Functions

| Function | Description |
|----------|-------------|
| mostrarTareas($tareas) | Displays all tasks with their status |
| agregarTarea(&$tareas, $titulo, $descripcion, $prioridad) | Adds a new task (pass-by-reference) |
| completarTarea(&$tareas, $id) | Marks a task as completed |
| eliminarTarea(&$tareas, $id) | Deletes a task and reindexes IDs |
| filtrarTareas($tareas, $estado) | Filters tasks by status (pending/completed) |

### Key Concepts

- Pass-by-reference (&) – Allows functions to modify the original array
- array_values() – Reindexes array after deletion to avoid gaps
- Ternary operator – Concise conditional statements

---

## 👤 Author

*NTR1991 – Full Stack in training | FP DAW Student*

## 📅 Date

July 2026