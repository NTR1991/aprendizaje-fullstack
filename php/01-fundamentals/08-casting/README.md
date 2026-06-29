# 📘 PHP Casting

## 📋 Description

A PHP script demonstrating type conversion (casting) in PHP, showing how to convert variables between different data types such as integer, float, string, and boolean in real-world business scenarios, including data processing from forms, CSV files, and databases.

---

## 🎯 Learning Objectives

- Understanding type casting in PHP
- Converting strings to integers using `(int)`
- Converting strings to floats using `(float)`
- Converting values to booleans using `(bool)`
- Converting values to strings using `(string)`
- Understanding how `null` behaves when cast to different types
- Understanding how boolean values convert to integers and strings
- Understanding how floats convert to integers (truncation)
- Using `gettype()` to verify data types after casting
- Using `str_replace()` to clean data before casting

---

## 📝 Exercises (Real-World Scenarios)

### 🟢 Normal Level (1 exercise)

1. **Data Analysis - Type Conversion**
   A data analysis company needs to convert different types of data for processing. The data comes in different formats and must be converted to the correct type.

   Input:
   $numeroString = "150.75";
   $verdaderoString = "true";
   $falsoString = "false";
   $enteroString = "42";
   $flotanteString = "3.1416";
   $valorNulo = null;
   $booleanoVerdadero = true;
   $booleanoFalso = false;
   $numeroEntero = 100;
   $numeroDecimal = 99.99;

   Tasks to perform:
   - Convert `$numeroString` to float and int using `(float)` and `(int)`
   - Convert `$verdaderoString` to bool using `(bool)`
   - Convert `$falsoString` to bool using `(bool)`
   - Convert `$enteroString` to int and string
   - Convert `$flotanteString` to float
   - Convert `$valorNulo` to int, float, string, and bool
   - Convert `$booleanoVerdadero` to int and string
   - Convert `$booleanoFalso` to int and string
   - Convert `$numeroEntero` to string
   - Convert `$numeroDecimal` to int
   - Display all conversions with `gettype()` to verify the result

---

### 🟡 Intermediate Level (1 exercise)

1. **User Management System - Data Processing**
   A user management system needs to process data that comes in different formats. You must convert the data to the correct type before using it.

   Input:
   $idUsuario = "1045";
   $nombre = "Maria Gomez";
   $edad = "28";
   $altura = "1.75";
   $activo = "true";
   $peso = "72.5";
   $telefono = "691234567";
   $email = "maria@email.com";
   $dni = "12345678A";
   $saldo = "-150.75";

   Tasks to perform:
   - Convert `$idUsuario` to int and float
   - Convert `$edad` to int
   - Convert `$altura` to float
   - Convert `$activo` to bool
   - Convert `$peso` to int and float
   - Convert `$telefono` to int
   - Convert `$saldo` to float and int
   - Convert `$dni` to string (forcing with `(string)`)
   - Display each conversion with `gettype()` to verify the result

---

### 🔴 Difficult Level (1 exercise)

1. **CSV Data Import System**
   A data import company needs to process a CSV file with product information. The data comes in text format but must be converted to the correct type before being stored in the database.

   Input:
   $productoId = "P-1056";
   $nombre = "Laptop Gamer Pro";
   $precio = "1.299,99";
   $stock = "045";
   $disponible = "true";
   $peso = "2.5";
   $ancho = "35.8";
   $alto = "2.4";
   $profundidad = "24.0";
   $fechaLanzamiento = "2026-06-15";
   $codigoBarras = "8434567890123";
   $categoria = "electronica";
   $descuento = "0";
   $valoracion = "4.7";
   $reseñas = "128";

   Tasks to perform:
   - `$productoId` → Extract only the number (e.g., "1056") and convert to int
   - `$precio` → Convert to float by removing thousands separators and changing comma to dot
   - `$stock` → Convert to int (leading zero should disappear)
   - `$disponible` → Convert to bool
   - `$peso`, `$ancho`, `$alto`, `$profundidad` → Convert each to float
   - `$fechaLanzamiento` → Convert to string (forcing with `(string)`)
   - `$codigoBarras` → Convert to int
   - `$categoria` → Convert to string (forcing with `(string)`)
   - `$descuento` → Convert to int
   - `$valoracion` → Convert to float
   - `$reseñas` → Convert to int
   - Display each conversion with `gettype()` to verify the result

---

### 🧪 Test (10 questions)

| # | Question | Correct Answer |
|---|----------|----------------|
| 1 | What syntax is used to convert a variable to integer in PHP? | B) `(int)` |
| 2 | What syntax is used to convert a variable to float in PHP? | C) `(float)` |
| 3 | What syntax is used to convert a variable to boolean in PHP? | D) `(bool)` |
| 4 | What syntax is used to convert a variable to string in PHP? | A) `(string)` |
| 5 | What is the result of `(int) "42.5"`? | B) 42 |
| 6 | What is the result of `(float) "3.14"`? | B) 3.14 |
| 7 | What is the result of `(bool) "true"`? | A) true |
| 8 | What is the result of `(int) null`? | B) 0 |
| 9 | What is the result of `(bool) 0`? | B) false |
| 10 | What is the result of `(string) 100`? | B) "100" |

---

### ✅ Test Results (NTR1991)

| # | Question | Your Answer | Correct Answer | Status |
|---|----------|-------------|----------------|--------|
| 1 | What syntax converts a variable to integer? | B | B | ✅ |
| 2 | What syntax converts a variable to float? | C | C | ✅ |
| 3 | What syntax converts a variable to boolean? | D | D | ✅ |
| 4 | What syntax converts a variable to string? | A | A | ✅ |
| 5 | What is the result of `(int) "42.5"`? | B | B | ✅ |
| 6 | What is the result of `(float) "3.14"`? | B | B | ✅ |
| 7 | What is the result of `(bool) "true"`? | A | A | ✅ |
| 8 | What is the result of `(int) null`? | B | B | ✅ |
| 9 | What is the result of `(bool) 0`? | B | B | ✅ |
| 10 | What is the result of `(string) 100`? | B | B | ✅ |

**Result: 10/10 (100%)** ✅

---

## 🛠️ Technologies Used

- **PHP** – Core language, type casting, `(int)`, `(float)`, `(bool)`, `(string)`, `gettype()`, `str_replace()`, `explode()`
- **HTML5** – Structure
- **CSS3** – Styling

---

## 📂 Folder Structure
````
08-casting/
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