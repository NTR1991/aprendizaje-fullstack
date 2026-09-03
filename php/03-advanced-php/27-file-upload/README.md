# 📘 PHP Include

## 📋 Description

A PHP script demonstrating the use of `include`, `require`, `include_once`, and `require_once` to organize code into multiple files in real-world business scenarios, including configuration management, product listing, shopping cart, and order management systems.

---

## 🎯 Learning Objectives

- Understanding `include` and `require` statements
- Understanding `include_once` and `require_once`
- Reusing code across multiple files
- Organizing code into separate files (config, functions, products, cart, orders)
- Difference between `include` and `require`
- When to use `include_once` and `require_once`
- Applying include in real-world business scenarios

---

## 📝 Exercises (Real-World Scenarios)

### 🟢 Normal Level (1 exercise)

1. **Code Organization - Configuration and Functions**
   A company needs to organize its code into different files using `include` and `require`.

   Tasks to perform:
   - Create a `config.php` file with constants:
     - `NOMBRE_EMPRESA` = "Tech Solutions"
     - `IVA` = 21
     - `MONEDA` = "€"
   - Create a `funciones.php` file with functions:
     - `calcularPrecioConIva($precio)` → calculates price with VAT
     - `formatearMoneda($cantidad)` → formats price with currency
   - Create a `main.php` file that includes both files and uses the constants and functions
   - Display results with `echo`

---

### 🟡 Intermediate Level (1 exercise)

1. **E-commerce System - Products and Cart**
   An e-commerce company needs to organize its code into different files to manage products, shopping cart, and orders.

   Tasks to perform:
   - Create a `config.php` file with:
     - `NOMBRE_EMPRESA` = "MiTiendaOnline"
     - `IVA` = 21
     - `MONEDA` = "€"
     - `ENVIO_GRATIS_DESDE` = 50
   - Create a `productos.php` file with:
     - Array `$productos` with 3 products (name, price, stock)
     - Function `mostrarProductos()` to display all products
   - Create a `carrito.php` file with:
     - Function `calcularTotalCarrito($productos, $cantidades)` to calculate total
     - Function `aplicarDescuento($total)` to apply discount if > 50 €
   - Create a `main.php` file that includes all files and displays:
     - Product list
     - Cart total with discount applied

---

### 🔴 Difficult Level (1 exercise)

1. **Order Management System**
   An e-commerce company needs an order management system with multiple files.

   Tasks to perform:
   - Create a `config.php` file with:
     - `NOMBRE_EMPRESA` = "PedidosYa"
     - `IVA` = 21
     - `MONEDA` = "€"
     - `GASTOS_ENVIO` = 5
   - Create a `productos.php` file with:
     - Array `$productos` with 5 products (name, price, stock, category)
     - Function `mostrarProductos()` to display all products
     - Function `buscarProducto($nombre)` to search for a product by name
   - Create a `pedido.php` file with:
     - Function `crearPedido($productos, $cantidades, $cliente)` that:
       - Calculates subtotal
       - Applies 10% discount if subtotal > 100 €
       - Applies shipping cost (5 €) if subtotal < 50 €
       - Calculates VAT
       - Returns an array with all order data
     - Function `mostrarPedido($pedido)` to display order summary
   - Create a `main.php` file that:
     - Includes all files
     - Displays the product list
     - Simulates an order with quantities
     - Displays the order summary

---

### 🧪 Test (10 questions)

| # | Question | Correct Answer |
|---|----------|----------------|
| 1 | What function is used to include a file in PHP? | D) A and C are correct |
| 2 | What is the difference between `include` and `require`? | B) `require` stops the script if the file doesn't exist |
| 3 | What function includes a file only once? | D) A and B are correct |
| 4 | What happens if you use `require` and the file doesn't exist? | C) PHP shows a fatal error and stops the script |
| 5 | When would you use `include` instead of `require`? | B) When the file is not critical (e.g., an ad) |
| 6 | What is the correct syntax to include a file? | D) A and C are correct |
| 7 | What happens if you use `include_once` twice with the same file? | B) It's included only the first time |
| 8 | Where is `include` typically placed in a project structure? | A) In the main file to load configurations and functions |
| 9 | Which configuration file is best to use `require` instead of `include`? | C) `config.php` |
| 10 | What is the main purpose of using `include` and `require`? | B) To reuse code and organize files |

---

### ✅ Test Results (NTR1991)

| # | Question | Your Answer | Correct Answer | Status |
|---|----------|-------------|----------------|--------|
| 1 | What function is used to include a file? | D | D | ✅ |
| 2 | Difference between `include` and `require`? | B | B | ✅ |
| 3 | What function includes a file only once? | D | D | ✅ |
| 4 | What happens if `require` fails? | C | C | ✅ |
| 5 | When to use `include` instead of `require`? | B | B | ✅ |
| 6 | Correct syntax to include a file? | D | D | ✅ |
| 7 | What happens with `include_once` twice? | B | B | ✅ |
| 8 | Where is `include` typically placed? | A | A | ✅ |
| 9 | Which file is best with `require`? | C | C | ✅ |
| 10 | Main purpose of `include` and `require`? | B | B | ✅ |

**Result: 10/10 (100%)** ✅

---

## 🛠️ Technologies Used

- **PHP** – Core language, `include`, `require`, `include_once`, `require_once`
- **HTML5** – Structure
- **CSS3** – Styling

---

## 📂 Folder Structure
````
23-include/
├── css/
│ └── style.css
├── php/
│ ├── config.php
│ ├── funciones.php
│ ├── productos.php
│ ├── carrito.php
│ ├── pedido.php
│ └── main.php
├── index.html
└── README.md
````


---

## 👤 Author

*NTR1991 – Full Stack in training | FP DAW Student*

## 📅 Date

July 2026