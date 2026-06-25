# 📘 PHP Strings

## 📋 Description

A PHP script demonstrating the manipulation and formatting of strings using various built-in functions in real-world business scenarios, including client name processing, product description optimization, and employee data formatting.

---

## 🎯 Learning Objectives

- Understanding string manipulation in PHP
- Using `trim()` to remove whitespace from the beginning and end of a string
- Using `strtoupper()` and `strtolower()` to change case
- Using `ucfirst()` and `ucwords()` to capitalize letters
- Using `strlen()` to count characters in a string
- Using `substr()` to extract parts of a string
- Using `str_replace()` to replace text within a string
- Using `explode()` to split a string into an array
- Using `implode()` to join array elements into a string
- Understanding the difference between single and double quotes

---

## 📝 Exercises (Real-World Scenarios)

### 🟢 Normal Level (1 exercise)

1. **Client Name Processing for Email Campaigns**
   A marketing company needs a system to process and format client names for email campaigns. The system must:
   - Clean the name (remove whitespace at the beginning and end).
   - Convert the name to uppercase for the greeting.
   - Count how many characters the name has.
   - Extract only the first name.
   - Replace spaces with underscores for the email.

   **Input:**
   - `$clienteNombre = "  Ana Maria Rodriguez  ";` (with leading and trailing spaces)

   Create a PHP script that:
   - Declares the variable with the client name.
   - Uses `trim()` to clean whitespace.
   - Uses `strtoupper()` for the greeting.
   - Uses `strlen()` to count characters.
   - Uses `explode()` or `substr()` to extract the first name.
   - Uses `str_replace()` to replace spaces with underscores.
   - Displays all results with `echo`.

---

### 🟡 Intermediate Level (1 exercise)

1. **E-commerce Product Description Processing**
   An e-commerce company needs a system to process product descriptions and generate SEO-friendly URLs.

   **Input:**
   - `$productoNombre = "  Laptop Gamer Ultra Pro  ";` (with leading and trailing spaces)
   - `$productoDescripcion = "La mejor laptop para gaming con procesador de ultima generacion";`

   Tasks to perform:
   - Clean the product name (remove whitespace).
   - Convert the name to lowercase for the URL.
   - Replace spaces with hyphens in the name for the URL.
   - Count how many characters the description has.
   - Extract only the first 30 characters of the description (for the summary).
   - Capitalize the first letter of the description.
   - Replace the word "gaming" with "videojuegos" in the description.

---

### 🔴 Difficult Level (1 exercise)

1. **HR Employee Data Processing System**
   An HR company needs a system to process and format employee data for internal reports and communications.

 ````   
**Input:**
   $empleadoNombre = "  carlos manuel gomez  ";
   $empleadoEmail = "  CARLOS.GOMEZ@EMPRESA.COM  ";
   $empleadoTelefono = "  912345678  ";
   $empleadoPuesto = "   DESARROLLADOR SENIOR   ";
   $empleadoDepartamento = " tecnologia  ";
   $empleadoFecha = "2026-06-25";
````


   Tasks to perform:
   - Format name: Remove whitespace, capitalize first letter of each word (using ucwords()).
   - Format email: Remove whitespace, convert to lowercase.
   - Format phone: Remove whitespace.
   - Format position: Remove whitespace, convert to uppercase.
   - Format department: Remove whitespace, capitalize first letter (using ucfirst()).
   - Format date: Convert from 2026-06-25 to 25/06/2026 (using explode()).
   - Generate email signature: Combine name, position, and department in a professional format.
   - Generate username: First letter of first name + last name + last 2 digits of year (e.g., "cgomez26").



---

### 🧪 Test (10 questions)

| # | Question | Correct Answer |
|---|----------|----------------|
| 1 | What function is used to remove whitespace from the beginning and end of a string in PHP? | B) trim() |
| 2 | What function converts a string to uppercase in PHP? | C) strtoupper() |
| 3 | What function converts the first letter of each word to uppercase in PHP? | C) ucwords() |
| 4 | What function is used to count the number of characters in a string in PHP? | B) strlen() |
| 5 | What function extracts a part of a string in PHP? | A) substr() |
| 6 | What function is used to replace text within a string in PHP? | A) str_replace() |
| 7 | What function splits a string into an array using a separator in PHP? | A) explode() |
| 8 | What function converts an array into a string by joining elements with a separator in PHP? | C) implode() |
| 9 | What function converts the first letter of a string to uppercase in PHP? | C) ucfirst() |
| 10 | What is the result of str_replace("gato", "perro", "Mi gato es lindo")? | B) "Mi perro es lindo" |

---

### ✅ Test Results (NTR1991)

| # | Question | Your Answer | Correct Answer | Status |
|---|----------|-------------|----------------|--------|
| 1 | What function removes whitespace from the beginning and end of a string? | B | B | ✅ |
| 2 | What function converts a string to uppercase? | C | C | ✅ |
| 3 | What function converts the first letter of each word to uppercase? | C | C | ✅ |
| 4 | What function counts the number of characters in a string? | B | B | ✅ |
| 5 | What function extracts a part of a string? | A | A | ✅ |
| 6 | What function replaces text within a string? | A | A | ✅ |
| 7 | What function splits a string into an array? | A | A | ✅ |
| 8 | What function converts an array into a string? | C | C | ✅ |
| 9 | What function converts the first letter of a string to uppercase? | C | C | ✅ |
| 10 | What is the result of str_replace("gato", "perro", "Mi gato es lindo")? | B | B | ✅ |

**Result: 10/10 (100%)** ✅

---

## 🛠️ Technologies Used

- PHP – Core language, string functions, trim(), strtoupper(), strtolower(), ucfirst(), ucwords(), strlen(), substr(), str_replace(), explode(), implode()
- HTML5 – Structure
- CSS3 – Styling

---

## 📂 Folder Structure
````
06-strings/
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
