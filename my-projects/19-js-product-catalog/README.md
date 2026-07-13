# 📘 Project – Product Catalog (Block 3)

## 📋 Description

A product catalog management system built with vanilla JavaScript. This project runs entirely in the browser console (F12) and allows you to add, list, filter, apply discounts, sort, and search products using only JavaScript functions.

This project integrates all concepts from **Block 3 – Functions & Advanced Arrays**:
- Higher Order Functions
- Callbacks
- Closures
- Recursion (not used in this version, but available)
- Advanced Arrays (`filter`, `map`, `reduce`, `sort`, `find`, `forEach`)
- Array Chaining
- Array.from (not used in this version)
- Array.of (not used in this version)

---

## 🎯 Features

- ➕ Add products with name, price, category, and stock
- 📋 List all products in console
- 🔍 Filter products by category
- 💰 Apply discounts to products by category (Higher Order Function)
- 📊 Sort products by price (ascending / descending)
- 💵 Calculate total inventory value (price × stock)
- 🔎 Search for a product by name (case insensitive)
- 🔢 Auto‑increment product IDs (Closure)

---

## 🛠️ Technologies Used

- **JavaScript (ES6+)** – Core language
- **HTML5** – Structure
- **CSS3** – Styling

---

## 📂 Folder Structure

````
19-js-product-catalog/
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

```
javascript
// Add products
anadirProducto("Laptop", 1200, "Electronica", 5);
anadirProducto("Mouse", 25, "Electronica", 20);
anadirProducto("Teclado", 80, "Electronica", 15);
anadirProducto("Silla", 250, "Oficina", 8);
anadirProducto("Mesa", 300, "Oficina", 6);
anadirProducto("Libro", 15, "Papeleria", 50);

// List all products
listarProductos();

// Filter by category
filtrarPorCategoria("Electronica");

// Apply 10% discount to products in a category
aplicarDescuento("Electronica", 10);

// Sort by price (ascending)
ordenarPorPrecio(true);

// Calculate total inventory value
calcularValorTotal();

// Search for a product by name
buscarProducto("Teclado");
```


## 📋 Available Functions

| Function | Description |
|----------|-------------|
| `anadirProducto(nombre, precio, categoria, stock)` | Adds a new product to the catalog |
| `listarProductos()` | Lists all products in the console |
| `filtrarPorCategoria(categoria)` | Shows products from a specific category |
| `aplicarDescuento(categoria, porcentaje)` | Applies a discount to all products in a category |
| `ordenarPorPrecio(ascendente)` | Sorts products by price (ascending or descending) |
| `calcularValorTotal()` | Calculates total inventory value (price × stock) |
| `buscarProducto(nombre)` | Searches for a product by name (case insensitive) |

---

## 🧪 Test (10 questions)

| # | Question | Correct Answer |
|---|----------|----------------|
| 1 | What method is used to add a product to the array? | `.push()` |
| 2 | What method is used to filter products by category? | `.filter()` |
| 3 | What method is used to transform products with a discount? | `.map()` |
| 4 | What method is used to calculate total inventory value? | `.reduce()` |
| 5 | What method is used to search for a product by name? | `.find()` |
| 6 | What method is used to sort products by price? | `.sort()` |
| 7 | What is the name of the function that generates IDs? | `crearGeneradorId()` |
| 8 | What type of function is `crearGeneradorId()`? | A closure (returns a function) |
| 9 | What type of function is `crearAplicadorDescuento()`? | Higher Order Function |
| 10 | What operator is used to copy an array without modifying the original? | Spread (`...`) |

---

## 🧪 Test Results (NTR1991)

| # | Question | Correct Answer | Status |
|---|----------|----------------|--------|
| 1 | What method is used to add a product to the array? | `.push()` | ✅ |
| 2 | What method is used to filter products by category? | `.filter()` | ✅ |
| 3 | What method is used to transform products with a discount? | `.map()` | ✅ |
| 4 | What method is used to calculate total inventory value? | `.reduce()` | ✅ |
| 5 | What method is used to search for a product by name? | `.find()` | ✅ |
| 6 | What method is used to sort products by price? | `.sort()` | ✅ |
| 7 | What is the name of the function that generates IDs? | `crearGeneradorId()` | ✅ |
| 8 | What type of function is `crearGeneradorId()`? | A closure | ✅ |
| 9 | What type of function is `crearAplicadorDescuento()`? | Higher Order Function | ✅ |
| 10 | What operator is used to copy an array without modifying the original? | Spread (`...`) | ✅ |

**Result: 10/10 (100%)** ✅

---

## 👤 Author

*NTR1991 – Full Stack Developer in training | FP DAW Student*

## 📅 Date

July 2026
