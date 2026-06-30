# 📘 PHP Constants

## 📋 Description

A PHP script demonstrating the use of constants in real-world business scenarios, including company configuration, online store settings, and HR management systems. Constants are immutable values that cannot be changed during script execution.

---

## 🎯 Learning Objectives

- Understanding the concept of constants in PHP
- Using `define()` to create constants at runtime
- Using `const` to create constants at compile time
- Using `defined()` to check if a constant exists
- Understanding that constants cannot be modified after definition
- Following naming conventions for constants (UPPERCASE_WITH_UNDERSCORES)
- Understanding the difference between `define()` and `const`
- Using constants in calculations and business logic

---

## 📝 Exercises (Real-World Scenarios)

### 🟢 Normal Level (1 exercise)

1. **Software Company Configuration**
   A software company needs to define fixed values that are used throughout the application. These values must not change during execution.

   Tasks to perform:
   ````
   - Define constants using `define()`:
     - `NOMBRE_EMPRESA` → "TechSolutions"
     - `IVA` → 21
     - `DESCUENTO_DEFAULT` → 10
     - `PRECIO_HORA` → 35.50
     - `MONEDA` → "€"
   
   - Define constants using `const`:
     - `ANIO_FUNDACION` → 2015
     - `PAIS` → "España"
     - `TAZA_INTERES` → 5.5
     ````
   
   - Display all constants with `echo`
   - Use `defined()` to verify if `NOMBRE_EMPRESA` exists

---

### 🟡 Intermediate Level (1 exercise)

1. **Online Store Configuration**
   An online store needs to define fixed values for its invoicing and promotions system.

   Tasks to perform:
   ````
   - Define constants using `define()`:
     - `EMPRESA_NOMBRE` → "MiTiendaOnline"
     - `EMPRESA_EMAIL` → "info@mitienda.com"
     - `IVA_GENERAL` → 21
     - `IVA_REDUCIDO` → 10
     - `GASTOS_ENVIO` → 4.99
     - `ENVIO_GRATIS_DESDE` → 50
     - `MONEDA` → "€"
   
   - Define constants using `const`:
     - `DESCUENTO_BLACK_FRIDAY` → 30
     - `DESCUENTO_NAVIDAD` → 15
     - `DESCUENTO_NUEVO_USUARIO` → 10
     - `DIAS_GARANTIA` → 365
     ````
   
   - Display all constants with `echo`
   - Verify if `MONEDA` is defined

---

### 🔴 Difficult Level (1 exercise)

1. **HR Management System**
   An HR company needs to define fixed values for its employee management and payroll system.

   Tasks to perform:
   ````
   - Define constants using `define()`:
     - `EMPRESA_NOMBRE` → "HR Solutions"
     - `EMPRESA_RUT` → "B-12345678"
     - `ANIO_CURRENT` → 2026
     - `SALARIO_MINIMO` → 1166.70
     - `HORAS_MENSUALES` → 160
     - `IVA` → 21
     - `RETENCION_IRPF` → 15
     - `SEGURIDAD_SOCIAL` → 6.35
     - `MONEDA` → "€"
   
   - Define constants using `const`:
     - `DIAS_VACACIONES` → 22
     - `HORAS_SEMANALES` → 40
     - `MESES_AÑO` → 12
     - `DIAS_MES` → 30
     ````
   
   - Calculate salary per hour: `SALARIO_MINIMO / HORAS_MENSUALES`
   - Calculate IRPF retention and Social Security deductions
   - Calculate net salary
   - Display all constants and calculations

---

### 🧪 Test (10 questions)

| # | Question | Correct Answer |
|---|----------|----------------|
| 1 | What function is used to define a constant in PHP? | B) `define()` |
| 2 | What is the correct way to define a constant with `define()`? | D) `define("NOMBRE", "Juan");` |
| 3 | What is the correct way to define a constant with `const`? | A) `const NOMBRE = "Juan";` |
| 4 | What function is used to check if a constant exists in PHP? | B) `defined()` |
| 5 | What naming convention is used for constants in PHP? | C) Uppercase with underscores |
| 6 | Can constants be modified after definition? | C) No, never |
| 7 | Where can constants be used in PHP? | C) Anywhere in the code |
| 8 | What is the difference between `define()` and `const`? | C) `define()` is runtime, `const` is compile-time |
| 9 | What is the result of `defined("IVA")` if `IVA` is defined? | A) true |
| 10 | What happens if you try to redefine a constant? | B) PHP generates an error or warning |

---

### ✅ Test Results (NTR1991)

| # | Question | Your Answer | Correct Answer | Status |
|---|----------|-------------|----------------|--------|
| 1 | What function defines a constant? | B | B | ✅ |
| 2 | Correct way to use `define()`? | D | D | ✅ |
| 3 | Correct way to use `const`? | A | A | ✅ |
| 4 | What function checks if a constant exists? | B | B | ✅ |
| 5 | Naming convention for constants? | C | C | ✅ |
| 6 | Can constants be modified? | C | C | ✅ |
| 7 | Where can constants be used? | C | C | ✅ |
| 8 | Difference between `define()` and `const`? | C | C | ✅ |
| 9 | Result of `defined("IVA")` if defined? | A | A | ✅ |
| 10 | What happens if you redefine a constant? | B | B | ✅ |

**Result: 10/10 (100%)** ✅

---

## 🛠️ Technologies Used

- **PHP** – Core language, `define()`, `const`, `defined()`
- **HTML5** – Structure
- **CSS3** – Styling

---

## 📂 Folder Structure
````
10-constants/
├── css/
│ └── style.css
├── php/
│ └── main.php
├── index.html
└── README.md
````


---
## 👤 Author

*NTR1991 – Full Stack in training | FP DAW Student*

## 📅 Date

June 2026