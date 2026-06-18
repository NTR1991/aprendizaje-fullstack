# 🖥️ Terminal To-Do App

## 📋 Description

Interactive task manager that runs in the browser console. Allows adding, viewing, completing, deleting, and counting pending tasks.

---

## 🎯 Project Objective

Build a fully functional task manager in the browser console that demonstrates core JavaScript concepts: arrays, objects, loops, conditionals, and functions.

---

## 📁 Folder Structure

```
16-To-Do List/
├── index.html
├── css/
│   └── style.css
├── js/
│   └── main.js
└── README.md
```

---

## 📊 Exercises & Results

### Exercise 1: Add Task
**Description:** Ask the user for a task description. Validate that it is not empty (cancel or spaces). Save the task as an object with `{ texto, completada: false }`. Show confirmation or error message.

**Key Code:**
```javascript
function addTask() {
    const texto = prompt("Introduce la tarea:");
    if (texto && texto.trim() !== "") {
        tasks.push({ texto: texto.trim(), completada: false });
        console.log("✅ Tarea añadida correctamente.");
    } else {
        console.log("❌ No se añadió ninguna tarea.");
    }
}
```

---

### Exercise 2: View Tasks
**Description:** If there are no tasks, show a message. Otherwise, display all tasks with their number (starting from 1), status (`[ ]` for pending, `[✓]` for completed), and description.

**Key Code:**
```javascript
function viewTasks() {
    if (tasks.length === 0) {
        console.log("📭 No hay tareas.");
        return;
    }
    tasks.forEach((task, index) => {
        const status = task.completada ? "[✓]" : "[ ]";
        console.log(`${index + 1}. ${status} ${task.texto}`);
    });
}
```

---

### Exercise 3: Complete Task
**Description:** Show the list of tasks with numbers. Ask the user which task number to complete. Validate that the number exists. Mark the task as `completada: true`. Show confirmation or error message.

**Key Code:**
```javascript
function completeTask() {
    viewTasks();
    const num = prompt("Número de tarea a completar:");
    const index = parseInt(num) - 1;
    if (index >= 0 && index < tasks.length) {
        tasks[index].completada = true;
        console.log("✅ Tarea completada.");
    } else {
        console.log("❌ Número no válido.");
    }
}
```

---

### Exercise 4: Delete Task
**Description:** Show the list of tasks with numbers. Ask the user which task number to delete. Validate that the number exists. Remove the task from the array using `.splice()`. Show confirmation or error message.

**Key Code:**
```javascript
function deleteTask() {
    viewTasks();
    const num = prompt("Número de tarea a eliminar:");
    const index = parseInt(num) - 1;
    if (index >= 0 && index < tasks.length) {
        tasks.splice(index, 1);
        console.log("🗑️ Tarea eliminada.");
    } else {
        console.log("❌ Número no válido.");
    }
}
```

---

### Exercise 5: Count Pending Tasks
**Description:** If there are no tasks, show a message. Otherwise, count how many tasks have `completada === false`. Show the result.

**Key Code:**
```javascript
function countPending() {
    if (tasks.length === 0) {
        console.log("📭 No hay tareas.");
        return;
    }
    const pending = tasks.filter(task => !task.completada).length;
    console.log(`📊 Tareas pendientes: ${pending}`);
}
```

---

### Exercise 6: Exit
**Description:** Show a goodbye message and exit the program.

**Key Code:**
```javascript
function exitProgram() {
    console.log("👋 ¡Hasta luego!");
    return true;
}
```

---

## 🧪 Key Learnings

| Concept | Usage |
| :--- | :--- |
| **Arrays with objects** | Storing tasks as `{ texto, completada }` |
| **`.push()`** | Adding tasks to the array |
| **`.splice()`** | Deleting tasks from the array |
| **`.trim()`** | Validating input (removing spaces) |
| **`for` loop** | Displaying tasks |
| **`do...while`** | Keeping the menu active |
| **`switch`** | Handling menu options |
| **Unicode characters** | `\u2713` (✓) and `\u2717` (✗) |
| **`.filter()`** | Counting pending tasks |

---

## 🎯 Menu Options

```
📋 MENU PRINCIPAL
1. ➕ Añadir tarea
2. 📋 Ver tareas
3. ✅ Completar tarea
4. 🗑️ Eliminar tarea
5. 📊 Contar tareas pendientes
6. 👋 Salir
```

---

## 👤 Author

*NTR1991 – Full Stack in training | FP DAW Student*

## 📅 Date

June 2026

---

*Terminal To-Do App – Personal project built to practice JavaScript fundamentals*
