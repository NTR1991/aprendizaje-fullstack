# 📘 PHP File Handling

## 📋 Description

A PHP script demonstrating file handling operations in real-world business scenarios, including creating files, reading files, writing files, appending data, and managing CSV files for inventory systems.

---

## 🎯 Learning Objectives

- Opening files with `fopen()`
- Reading files with `fread()`, `fgets()`, and `file_get_contents()`
- Writing files with `fwrite()` and `file_put_contents()`
- Appending data to files with `FILE_APPEND`
- Closing files with `fclose()`
- Checking if a file exists with `file_exists()`
- Reading CSV files with `fgetcsv()`
- Writing CSV files with `fputcsv()`
- Applying file handling in real-world business scenarios

---

## 📝 Exercises (Real-World Scenarios)

### 🟢 Normal Level (1 exercise)

1. **Daily Sales Report**
   A company needs to create and manage a daily sales report file.

   Tasks to perform:
   - Create a file `ventas.txt` with initial content:
     - Header "VENTAS DEL DIA"
     - Date
     - Product list with prices
     - Total
   - Read and display the file content
   - Append new lines to the file
   - Display the updated content
   - Verify that the file exists

---

### 🟡 Intermediate Level (1 exercise)

1. **Shipping Log System**
   A logistics company needs to manage a shipping log file.

   Tasks to perform:
   - Create a file `envios.txt` with initial content:
     - Header "REGISTRO DE ENVIOS"
     - Date
     - Shipping list with destinations and costs
     - Total
   - Read and display the file content
   - Append a new shipping entry
   - Read the file line by line using `fopen()`, `fgets()`, and `fclose()`
   - Display the updated content
   - Count the total number of lines

---

### 🔴 Difficult Level (1 exercise)

1. **Inventory Management with CSV**
   A company needs to manage product inventory using a CSV file.

   Tasks to perform:
   - Create a file `productos.csv` with initial data:
     - Header: nombre, precio, stock, categoria
     - Products: Portatil, Raton, Teclado, Monitor, Auriculares
   - Read and display all products
   - Add a new product: Tablet
   - Display updated product list
   - Search for a product by name
   - Calculate total stock

---

### 🧪 Test (10 questions)

| # | Question | Correct Answer |
|---|----------|----------------|
| 1 | What function is used to open a file in PHP? | B) `fopen()` |
| 2 | What function reads all content from a file? | B) `file_get_contents()` |
| 3 | What function is used to write to a file? | D) A and B are correct |
| 4 | What function closes an open file? | A) `fclose()` |
| 5 | What function checks if a file exists? | A) `file_exists()` |
| 6 | What function reads a single line from a file? | B) `fgets()` |
| 7 | What is the correct mode for reading a file? | A) `"r"` |
| 8 | What is the correct mode for writing a file (overwrites)? | B) `"w"` |
| 9 | What constant appends content to the end of a file? | A) `FILE_APPEND` |
| 10 | What is the output with `fwrite()` and `file_get_contents()`? | A) "Hola mundo" |

---

### ✅ Test Results (NTR1991)

| # | Question | Your Answer | Correct Answer | Status |
|---|----------|-------------|----------------|--------|
| 1 | What function opens a file? | B | B | ✅ |
| 2 | What function reads all content? | B | B | ✅ |
| 3 | What function writes to a file? | D | D | ✅ |
| 4 | What function closes a file? | A | A | ✅ |
| 5 | What function checks if a file exists? | A | A | ✅ |
| 6 | What function reads a line? | B | B | ✅ |
| 7 | Correct mode for reading? | A | A | ✅ |
| 8 | Correct mode for writing? | B | B | ✅ |
| 9 | Constant for appending? | A | A | ✅ |
| 10 | Output with `fwrite()`? | A | A | ✅ |

**Result: 10/10 (100%)** ✅

---

## 🛠️ Technologies Used

- **PHP** – Core language, `fopen()`, `fclose()`, `fread()`, `fwrite()`, `fgets()`, `file_get_contents()`, `file_put_contents()`, `fgetcsv()`, `fputcsv()`, `file_exists()`, `FILE_APPEND`
- **HTML5** – Structure
- **CSS3** – Styling

---

## 📂 Folder Structure
````
24-file-handling/
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

July 2026