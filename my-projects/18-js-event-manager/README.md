# 📘 Event Manager – Console Version

## 📋 Description

A simple event management system built with vanilla JavaScript. This project runs entirely in the browser console (F12) and allows you to add, list, filter, sort, and delete events using only JavaScript functions.

This project integrates all concepts from **Block 2 – Control Flow & Data Structures**:
- Objects
- Arrays Methods (`push`, `filter`, `sort`, `forEach`)
- JSON (not used in this version, but available for future extension)
- Destructuring
- Spread Operator
- Dates

---

## 🎯 Features

- ➕ Add events with name, date, location, price, and status
- 📋 List all events in console
- 🔍 Filter events by status (pending / ongoing / finished)
- 🔄 Sort events by date or price (ascending / descending)
- ⏳ Calculate days remaining until each event
- 🗑️ Delete events by ID
- 📊 View summary (total, pending, ongoing, finished)

---

## 🛠️ Technologies Used

- **JavaScript (ES6+)** – Core language
- **HTML5** – Structure
- **CSS3** – Styling

---

## 📂 Folder Structure
````
18-js-event-manager/
├── css/
│ └── style.css
├── js/
│ └── main.js
├── index.html
└── README.md
````



---

## 🚀 How to Use

1. Open `index.html` in your browser.
2. Press **F12** to open the Developer Tools.
3. Go to the **Console** tab.
4. Type or paste the following commands (one by one):

javascript
````
// Add events
anadirEvento('Conferencia JS', '2026-08-15', 'Madrid', 150, 'pendiente');
anadirEvento('Taller React', '2026-07-20', 'Barcelona', 80, 'en curso');
anadirEvento('Reunion equipo', '2026-06-30', 'Online', 0, 'finalizado');

// List all events
listarEventos();

// Show summary
resumen();

// Show days remaining
mostrarDiasRestantes();

// Filter by status
filtrarPorEstado('pendiente');

// Sort by date
ordenarPorFecha(true);

// Sort by price
ordenarPorPrecio(true);

// Delete an event (example: delete event with ID 1)
eliminarEvento(1);
````

## 📋 Available Functions

| Function | Description |
|----------|-------------|
| `anadirEvento(nombre, fecha, lugar, precio, estado)` | Adds a new event |
| `listarEventos()` | Lists all events in console |
| `filtrarPorEstado(estado)` | Filters events by status |
| `ordenarPorFecha(ascendente)` | Sorts events by date |
| `ordenarPorPrecio(ascendente)` | Sorts events by price |
| `mostrarDiasRestantes()` | Shows days remaining for each event |
| `eliminarEvento(id)` | Deletes an event by ID |
| `resumen()` | Shows summary counters |

---

## 👤 Author

*NTR1991 – Full Stack Developer in training | FP DAW Student*

## 📅 Date

July 2026


